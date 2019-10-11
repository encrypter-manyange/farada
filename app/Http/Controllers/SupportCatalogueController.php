<?php

namespace App\Http\Controllers;

use App\Company;
use App\RegistrationGroup;
use App\Role;
use App\SupportCatalogue;
use App\SupportCategory;
use App\SupportItem;
use Illuminate\Http\Request;

class SupportCatalogueController extends Controller
{
    public function create(){
        $groups=RegistrationGroup::all();
        $supports=SupportCategory::all();
        $units=SupportItem::all();

        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'groups'=>$groups,
            'supports'=>$supports,
            'units'=>$units
        ];


        return view('supportcatalogues.create',$data);
    }

    public function store(Request $request){
        $sc=new SupportCatalogue;
        $sc->support_catalogue_name=$request->input('support_catalogue_name');
        $sc->support_category_id=$request->input('support_category_number');
        $sc->support_item_id=$request->input('support_item_number');
        $sc->registration_group_id=$request->input('registration_group_number');
        $sc->unit=$request->input('unit');
        $sc->isActive=1;
        $sc->save();
        return redirect('/supportcatalogues')->with('success','Support Catalogue saved');

    }


    public function  edit(Request $request){
        $sc=SupportCatalogue::find($request->input('id'));
        $sc->support_category_id=$request->input('support_category_id');
        $sc->support_catalogue_name=$request->input('support_catalogue_name');
        $sc->support_item_id=$request->input('support_item_id');
        $sc->registration_group_id=$request->input('registration_group_id');
        $sc->isActive=$request->input('isActive');
        $sc->save();
        return redirect('supportcatalogues/showone/'.$request->input('id'))->with('success','Support catalogue Changed');
    }

    public function  index(){
        $catalogues=SupportCatalogue::all();
        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'catalogues'=>$catalogues
        ];
        return view('supportcatalogues.index',$data);

    }

    public function showone($id){
        $categories=SupportCategory::all();
        $items=SupportItem::all();
        $groups=RegistrationGroup::all();
        $catalogue=SupportCatalogue::find($id);
        $roles = Role::all();
        $companies = Company::all();
        $data = [
            'roles'=>$roles,
            'companies'=>$companies,
            'catalogue'=>$catalogue,
            'categories'=>$categories,
            'items'=>$items,
            'groups'=>$groups
        ];
        return view('supportcatalogues.showone',$data);

    }

}
