<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Users;

//use Illuminate\Support\Facades\Hash; (enkripsi password)


class AuthController extends Controller
{
   public function register_kernet(Request $request)
   {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $level =$request->input('level');

        $register_kernet = Users::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'level' => $level
        ]);

        if ($register_kernet) {
            return response()->json([
                'success' => true,
                'message' => 'Register Kernet Success!',
                'data' => $register_kernet
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Register Kernet Fail!',
                'data' => ''
            ], 400);
        }
   }

   public function register_penumpang(Request $request)
   {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $level =$request->input('level');

        $register_penumpang = Users::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'level' => $level
        ]);

        if ($register_penumpang) {
            return response()->json([
                'success' => true,
                'message' => 'Register Penumpang Success!',
                'data' => $register_penumpang
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Register Penumpang Fail!',
                'data' => ''
            ], 400);
        }
   }

   public function login(Request $request)
   {
        $email = $request->input('email');
        $password = $request->input('password');

        $users = Users::where('email', $email)->first();

        if (Hash::check($password, $users->password)) {
            $apiToken = base64_encode(str_random(40));

            $users->update([
                'api_token' => $apiToken
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Login Success!',
                'data' => [
                    'user' => $users,
                    'api_token' => $apiToken
                ]
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Fail!',
                'data' => ''
                ],);
        }

   }
}
