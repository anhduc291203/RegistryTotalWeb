<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class ApiUserInfoController extends Controller
{
    public function __construct()
    {
        $this->userinfo = new UserInfo();
        $this->user = new User();
    }
    public function create(){
        for($i = 3; $i <= 65; $i++){
            $user = $this->user->getbyid($i);
            UserInfo::create([
                'name'=> $user['name'],
                'address'=> 'Ha Noi'
            ]);

        }
        return $this->userinfo->getAll();

    }
}
