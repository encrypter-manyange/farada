<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationGroup extends Model
{
    public function SupportCatologue(){

        return $this->hasMany('App\SupportCatalogue');
    }
}
