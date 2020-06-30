<?php

namespace App\Http\Controllers;

use App\Users;

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

    public function show ($id)
    {
        $users = Users::find($id);

        if ($users) {
            return response()->json([
                'success' => true,
                'message' => 'User Found!',
                'data' => $users
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'User Not Found!',
                'data' => ''
            ], 404);
        }
    }

    
}
