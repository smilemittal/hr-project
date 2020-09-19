<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = ['id'];

    public function getAddressInfo() {
        return $this->hasMany(ContactAddress::class);
    }

    public function getAccInfo() {
        return $this->hasOne(ContactAccountingInfo::class);
    }
}
