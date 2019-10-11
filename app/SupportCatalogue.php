<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportCatalogue extends Model
{
    public function SupportCategory(){

        return $this->belongsTo('App\SupportCategory');
    }

    public function SupportItem(){

        return $this->belongsTo('App\SupportItem');
    }


    public function RegistrationGroup(){

        return $this->belongsTo('App\RegistrationGroup');
    }



}
