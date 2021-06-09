<?php

namespace App\Http\Controllers\Admin\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Employee, Shift};
use Validator;
use Yajra\DataTables\DataTables;

class ShiftController extends Controller
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
            $data = Shift::orderBy('id', 'desc')->get();
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
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view ('apps.admin.attendance.shift.shift')->with('employees', $employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Shift::create($request->all());

        return response()->json(['success' => true, 'message' => 'data telah disimpan']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shift $shift)
    {
        return response()->json(['shift' => $shift]);
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
        $shift = Shift::findOrFail($request->hidden_id);

        $shift->update($request->all());
        return response()->json(['success' => true, 'message' => 'Data telah disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Shift $shift)
    {
        $shift->delete();

        return response()->json(['success' => true, 'message' => 'Data telah disimpan']);
    }
}
