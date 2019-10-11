<?php

namespace App\Http\Controllers;

use App\Company;
use App\RegistrationGroup;
use App\Role;
use App\SupportCategory;
use Illuminate\Http\Request;

class SupportCategoryController extends Controller
{

    public function  index(){
        $categories=SupportCategory::all();
        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'categories'=>$categories
        ];

        return view('supportcategories.index',$data);
    }


    public function  showone($id){
        $category=SupportCategory::find($id);
        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'category'=>$category
        ];
        return view('supportcategories.showone',$data);
    }

    public function  edit(Request $request){
        $sc=SupportCategory::find($request->input('id'));
        $sc->support_category_number=$request->input('support_category_number');
        $sc->support_category_name=$request->input('support_category_name');
        $sc->isActive=$request->input('isActive');
        $sc->save();
        return redirect('supportcategories/showone/'.$request->input('id'))->with('success','Registration Group Changed');
    }

    public function store(Request $request){
        $sc=new SupportCategory;
        $sc->support_category_number=$request->input('support_category_number');
        $sc->support_category_name=$request->input('support_category_name');
        $sc->isActive=1;
        $sc->save();
        return redirect('/supportcategories')->with('success','Support Category saved');

    }


}
