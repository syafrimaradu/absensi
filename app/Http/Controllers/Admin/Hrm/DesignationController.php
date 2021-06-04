<?php

namespace App\Http\Controllers\Admin\Hrm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Designation;
use Validator;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Designation::orderBy('id', 'desc')->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '
                    <div class="dropdown">
                        <button type="button" class="btn btn-icons btn-rounded" style="padding-left: 12px" data-toggle="dropdown">
                            <i class="ti-more-alt"></i>
                        </button>
                        <div class="dropdown-menu" style="min-width: 10px">
                            <button class="btn btn-link edit" id="'.$data->id.'" style="color: yellow"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-link delete" id="'.$data->id.'" style="color: red"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>';

                    return $button;
                })
                ->editColumn('description', function($data){
                    return substr($data->description, 0, 35).'...';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view ('apps.admin.hrm.designation.designation');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
         // validasi
        $rules = [
            'title'  => 'required',
            'description' => 'required',
        ];

        $message = [
            'title.required' => 'Kolom title ini tidak boleh kosong',
            'description.required' => 'Kolom description ini tidak boleh kosong',
        ];

        Designation::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
       

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $type = Designation::find($id);

        return response()
            ->json([
                'type' => $type,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        //
       
        $update = Designation::where('id', $request->hidden_id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()
            ->json([
                'success' => 'Data Updated.',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $design = Designation::find($id);
        $design->delete();
    }
}
