<?php

namespace App\Http\Controllers;

use App\Company;
use App\Role;
use Illuminate\Http\Request;
use App\RegistrationGroup;

class RegistrationGroupController extends Controller
{
    //


    public function  index(){
        $groups=RegistrationGroup::all();
        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'groups'=>$groups
        ];

       return view('registrationgroups.index',$data);
    }

    public function  showone($id){
        $group=RegistrationGroup::find($id);
        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'group'=>$group
        ];
        return view('registrationgroups.showone',$data);
    }



    public function  diable($id){

        return redirect('/showone/'.$id);
    }

    public function  edit(Request $request){
       $rg=RegistrationGroup::find($request->input('id'));
       $rg->reg_group_name=$request->input('reg_group_name');
       $rg->reg_group_number=$request->input('reg_group_number');
       $rg->isActive=$request->input('isActive');
       $rg->save();
       return redirect('registrationgroups/showone/'.$request->input('id'))->with('success','Registration Group Changed');
    }

    public function store(Request $request){

        $rg=new RegistrationGroup;
        $rg->reg_group_name=$request->input('reg_group_name');
        $rg->reg_group_number=$request->input('reg_group_number');
        $rg->isActive=1;
        $rg->save();
        return redirect('/registrationgroups')->with('success','Registration Group saved');

    }
}
