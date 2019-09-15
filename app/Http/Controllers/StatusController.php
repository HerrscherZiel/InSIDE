<?php

namespace App\Http\Controllers;

use App\Utils\Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Status;


class StatusController extends Controller
{
    //
//    public function __construct()
//    {
//        $this->middleware('permission:admin-list',['except' => ['enabled']]);
//        $this->middleware('permission:admin-create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:admin-edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:admin-delete', ['only' => ['destroy']]);
//    }

    public function index()
    {
        //

        $status_ = Status::all();

        return response()->json( $status_, 200);
//        return $result;

    }

    ///////////////////////////////


    public function store(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
//            'keterangan' => 'required'
        ]);

        $status_ = Status::create($request->all());
        $result = array(
            'message' => "Data Added",
            'data' => $status_,
        );


        return response()->json( $result, 201);
    }

    ///////////////////////////////


    public function show($id)
    {
        $code = 200;
        $status_ = Status::find($id);

        if ($status_ == null) {
            $code = 404;
            $result = array(
                'message' => "No data found",
            );
        } else {
            $result = array(
                'message' => "Success",
                'data' => $status_,
            );
        }
        return response()->json($result, $code);
    }

    /////////////////////////////


    public function update(Request $request, $id)
    {

        $status_ = Status::findOrFail($id);
        if ($status_ == null) {
            $code = 404;
            $result = array(
                'message' => "No data found",
            );
        } else {
            $status_->update($request->all());
            $result = array(

                'message' => "Success",
                'data' => $status_,
            );
        }


        return response()->json($result, 200);
    }

    /////////////////////////////////


    public function destroy($id)
    {
        $m = "Sorry, please try again";
        $data = Status::find($id);
//        $data->delete();
        if ($data->delete()) {
            $m = "Delete Successfully";
        }
        $result = array(
            'message' => $m,
        );

        return response()->json($result, 200);

    }

}
