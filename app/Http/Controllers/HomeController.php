<?php

namespace App\Http\Controllers;

use App\Company;
use App\Role;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {

        $roles = Role::all();
        $companies = Company::all();
        $data = [
          'roles'=>$roles,
          'companies'=>$companies
        ];
        return view('home',$data);
    }
}
