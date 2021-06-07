<?php

namespace App\Http\Controllers\Admin\Hrm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\{Employee, Department};
use Validator;

class DepartmentController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = Employee::get();
        
        if ($request->ajax()) {
            $data = Department::orderBy('id', 'desc')->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '
                    <div class="dropdown">
                        <button type="button" class="btn btn-icons btn-rounded" style="padding-left: 12px" data-toggle="dropdown">
                            <i class="ti-more-alt"></i>
                        </button>
                        <div class="dropdown-menu" style="min-width: 10px">
                            <button class="btn btn-link edit" data-id="'.$data->id.'" style="color: yellow"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-link delete" data-id="'.$data->id.'" style="color: red"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>';

                    return $button;
                })
                ->addColumn('manager', function($data){
                    return $data->employee->name;
                })
                ->addColumn('sub_department', function($data){
                    if ($data->parent_id == null) {
                        return '-';    
                    }

                    return $data->department_parent_name;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('apps.admin.hrm.department.department')->with('employees', $employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $parent_departement_name = null;
        if (!empty($request->parent_id)) {
            $get_department = Department::findOrFail($request->parent_id);
            $parent_departement_name = $get_department->name;
        }

        Department::create([
            'name' => $request->name,
            'address' => $request->address,
            'manager' => $request->manager,
            'employee_id' => $request->employee_id,
            'parent_id' => $request->parent_id,
            'parent_department_name' => $parent_departement_name
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data telah tersimpan'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return response()->json(['department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $department = Department::findOrFail($request->hidden_id);

        $department->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Data telah terubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Department $department)
    {
        $department->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data telah terhapus'
        ]);
    }

    public function getParentDepartment(){
        $departments = Department::get();

        return response()->json([
            'success' => true,
            'departments' => $departments
        ]);
    }
}
