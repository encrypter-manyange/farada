<?php

namespace App\Http\Controllers;

use App\Company;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
class UsersController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    public function store(Request $request){
        try{
            $user = new User;
            $user->name = $request->fullname;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->company_id = $request->company_id;
            $user->password = Hash::make($request->password);
            $user->save();
            $roles = Role::all();
            $companies = Company::all();
            $users = DB::select('select users.name as fullname,users.email,companies.name as company_name,roles.name as role_name,users.created_at,users.updated_at from users inner join companies on companies.id = users.company_id inner join roles on roles.id = users.role_id');
            $data = [
                'status'=>'User Successfully Saved!',
                'roles'=>$roles,
                'companies'=>$companies,
                'users'=>$users
            ];
            return redirect()->to('users')->with($data);
        }
        catch (QueryException $e){
            $roles = Role::all();
            $companies = Company::all();
            $users = DB::select('select users.name as fullname,users.email,companies.name as company_name,roles.name as role_name,users.created_at,users.updated_at from users inner join companies on companies.id = users.company_id inner join roles on roles.id = users.role_id');
            $data = [
                'status'=>'User Creation Failed Username/Email Already Exists!',
                'roles'=>$roles,
                'companies'=>$companies,
                'users'=>$users
            ];
            return redirect()->to('users')->with($data);
        }

    }
    public function index(){
        $roles = Role::all();
        $companies = Company::all();
        $users = DB::select('select users.name as fullname,users.email,companies.name as company_name,roles.name as role_name,users.created_at,users.updated_at from users inner join companies on companies.id = users.company_id inner join roles on roles.id = users.role_id');
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'users'=>$users
        ];
        return view('users.index',$data);
    }
}
