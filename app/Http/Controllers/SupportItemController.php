<?php

namespace App\Http\Controllers;

use App\Company;
use App\Role;
use App\SupportCategory;
use App\SupportItem;
use Illuminate\Http\Request;

class SupportItemController extends Controller
{

    public function  index(){
        $supports=SupportItem::all();
        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'supports'=>$supports
        ];

        return view('supportitems.index',$data);
    }


    public function  showone($id){
        $support=SupportItem::find($id);
        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'support'=>$support
        ];
        return view('supportitems.showone',$data);
    }

    public function  edit(Request $request){
        $si=SupportItem::find($request->input('id'));
        $si->support_item_number=$request->input('support_item_number');
        $si->support_item_name=$request->input('support_item_name');
        $si->support_item_description=$request->input('support_item_description');
        $si->isActive=$request->input('isActive');
        $si->save();
        return redirect('supportitems/showone/'.$request->input('id'))->with('success','Support Item Changed');
    }

    public function store(Request $request){
        $si=new SupportItem;
        $si->support_item_number=$request->input('support_item_number');
        $si->support_item_name=$request->input('support_item_name');
        $si->support_item_description=$request->input('support_item_name');
        $si->isActive=1;
        $si->save();
        return redirect('/supportitems')->with('success','Support Item saved');

    }
}
