<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;

class ApiAdminController extends Controller
{
    public function __construct()
    {
        $this->admin = new Admin();
        $this->user = new User();
    }
    public function create(){
        $user = $this->user->getbyid(2);
//        $admin = $user->get('name');
//        dd($user['name']);
        Admin::create([
            'name'=> $user['name'],
        ]);
        return $this->admin->getAll();
    }

    public function index(){
        return $this->admin->getAll();
    }
}
