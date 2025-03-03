<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){


       

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'Manager-tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')

        // ];
        // $user = UserModel::find(2);
        // $user = UserModel::firstwhere('level_id',3);
        $user = UserModel::findOrFail(20, ['username', 'nama'], function () {
            abort(404);
        });
        return view('user', ['data' => $user]);

    }

}
