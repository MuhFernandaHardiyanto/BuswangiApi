<?php

namespace App\Http\Controllers;

use App\Users;
use App\Models\BiodataKernet;
use App\Models\BiodataPenumpang;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show_users ($id)
    {
        // $data = Users::find($id);

        $data = Users::where('id', $id)->get();

        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'User Found!',
                'data' => $data
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'User Not Found!',
                'data' => ''
            ], 404);
        }
    }


    // Menghapus Data
    public function delete_users($id)
    {
        // $data = Users::where('id', $id)->first();
        // $data->delete();
        // $datakernet = BiodataKernet::where('id_users', $id)->first();
        // $datakernet->delete();

        return response('Berhasil Menghapus Data');
    }

    //Merubah Users
    public function update_users(Request $request, $id)
    {
       
        $data = Users::where('id', $id)->first();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = $request->input('password');
        
        $data->save();

        return response('Berhasil Merubah Data Users');
    }    

    // Merubah Data Peumpang
    public function update_penumpang(Request $request, $id)
    {
       
        $data_penumpang = BiodataPenumpang::where('id', $id)->first();
        $data_penumpang->name = $request->input('name');
        $data_penumpang->email = $request->input('email');
        $data_penumpang->number_phone = $request->input('number_phone');
        $data_penumpang->instagram = $request->input('instagram');
        $data_penumpang->image = $request->input('image');

        $data_penumpang->save();

        return response('Berhasil Merubah Data Penumpang');
    }

    // Merubah Data Kernet
    public function update_kernet(Request $request, $id)
    {
        
        $data_kernet = BiodataKernet::where('id', $id)->first();
        $data_kernet->pt_po = $request->input('name');
        $data_kernet->name = $request->input('name');
        $data_kernet->number_plate = $request->input('number_plate');
        $data_kernet->bus_destination = $request->input('bus_destination');
        $data_kernet->time = $request->input('time');
        $data_kernet->validity_period_kir = $request->input('validity_period_kir');
        $data_kernet->validity_period_trayek = $request->input('validity_period_trayek');
        $data_kernet->image_bus = $request->input('image_bus');
        $data_kernet->image_kernet = $request->input('image_kernet');

        $data_kernet->save();

        return response('Berhasil Merubah Data Kernet');
    }

    
}
