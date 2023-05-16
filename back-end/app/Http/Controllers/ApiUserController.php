<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;

class ApiUserController extends Controller
{

    public function __construct(){
        $this->users = new User();
        $this->admin = new Admin();
    }
    public function index(){
        return $this->users->getAll();
    }
}
