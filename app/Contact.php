<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    protected $guarded = ['id'];
    use SoftDeletes;

    public function getAddressInfo() {
        return $this->hasMany(ContactAddress::class);
    }

    public function getAccInfo() {
        return $this->hasOne(ContactAccountingInfo::class);
    }
}
