<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxPayer extends Model
{
    //

    public function addresses(){
        return $this->hasMany('App\TaxPayerAddress');
    }

    public function bussinessLegalStatus(){
        return $this->hasOne('App\BusinessLegalStatus');
    }

    public function commitment(){
        return $this->hasOne('App\Commitment');
    }

    public function lostCertificates(){
        return $this->hasMany('App\LostCertificates');
    }


}
