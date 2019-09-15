<?php

namespace App\Http\Controllers;

use App\User;
use App\DataMember;
use Illuminate\Http\Request;

class DataMemberController extends Controller
{
    //
    public function index()
    {
        //

//        $datamember = DataMember::all();
        $datamember = DataMember::join('users', 'user_id', '=', 'id')
            ->select('data_member.*', 'users.email')
            ->getQuery()
            ->get();
//        return view('module.index')->with('module', $module);

        return response()->json( $datamember, 200);
//        return $result;

    }

    ///////////////////////////////


    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
//            'kelompok',
//            'desa',
            'daerah'=> 'required',
//            'ayah',
//            'no_hp_ayah',
//            'ibu',
//            'no_hp_ibu',
            'makna' => 'required',
            'pendidikan_terakhir' => 'required',
            'nama_instansi' => 'required',
            'jurusan',
            'nama_pondok',
            'prosentase_quran' => 'required',
            'prosentase_hadis' => 'required',
            'alasan' => 'required',
            'harapan' => 'required',
            'user_id',
        ]);
        $datamember = new DataMember;
//        $datamember ->user_id = auth()->user()->id;
        $datamember = DataMember::create($request->all());
        $result = array(
            'message' => "Data Added",
            'data' => $datamember,
        );


        return response()->json( $result, 201);
    }

    ///////////////////////////////


//    public function show($id)
//    {
//        $code = 200;
//        $status_ = Status::find($id);
//
//        if ($status_ == null) {
//            $code = 404;
//            $result = array(
//                'message' => "No data found",
//            );
//        } else {
//            $result = array(
//                'message' => "Success",
//                'data' => $status_,
//            );
//        }
//        return response()->json($result, $code);
//    }

    /////////////////////////////


    public function update(Request $request, $id)
    {

        $datamember = DataMember::findOrFail($id);
        if ($datamember == null) {
            $code = 404;
            $result = array(
                'message' => "No data found",
            );
        } else {
            $datamember->update($request->all());
            $result = array(

                'message' => "Success",
                'data' => $datamember,
            );
        }


        return response()->json($result, 200);
    }

    /////////////////////////////////


    public function destroy($id)
    {
        $m = "Sorry, please try again";
        $data = DataMember::find($id);
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
