<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactAddress extends Model
{
    protected $guarded = ['id'];

    public function getCountry() {
        return $this->hasOne(Country::class , 'id' , 'country_id');
    }

    public function getState() {
        return $this->hasOne(State::class , 'id' , 'state_id');
    }

    public function getCity() {
        return $this->hasOne(City::class , 'id' , 'city_id');
    }
}
