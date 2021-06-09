<?php

namespace App\Http\Controllers\Admin\Hrm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\{Designation, Shift, Employee};
use Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $designations = Designation::get();
        $shifts = Shift::get();
        if ($request->ajax()) {
            $data = Employee::orderBy('id', 'desc')->get();
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
                ->addColumn('shift_name', function($data){
                    return $data->shift->shift_name;
                })
                ->addColumn('position', function($data){
                    return $data->designation->title;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view ('apps.admin.hrm.employee.employee')
                                ->with('shifts', $shifts)
                                ->with('designations', $designations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create($request->all());
        
        return response()->json(['success' => 'data telah disimpan']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return response()->json(['employee' => $employee]);
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
        $employee = Employee::findOrFail($request->hidden_id);

        $employee->update($request->all());

        return response()->json(['success' => 'data telah disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Employee $employee)
    {
        $employee->delete();

        return response()->json(['success' => 'data telah disimpan']);
    }
}
