<?php

namespace App\Http\Controllers\Admin\Hrm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Announcement;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Announcement::orderBy('id', 'desc')->get();
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
                ->editColumn('description', function($data){
                    return substr($data->description, 0, 35).'...';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view ('apps.admin.hrm.announcements.announcements');
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

        Announcement::create($data);

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
    public function edit(Announcement $announcement)
    {
        return response()->json([
            'id' => $announcement->id,
            'title' => $announcement->title,
            'description' => $announcement->description,
            'sent_to' => $announcement->sent_to,
        ]);
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
        $announcement = Announcement::findOrFail($request->id);

        $announcement->update($data);

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
    public function delete(Announcement $announcement)
    {
        $announcement->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data telah terhapus'
        ]);
    }
}
