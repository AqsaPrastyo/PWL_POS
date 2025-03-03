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
        $user = UserModel::where('level_id', 2)-> count();
    
        return view('user', ['data' => $user]);

    }

}
