<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $guarded = ['id'];

    public function comCountry() {
        return $this->hasOne(Country::class , 'id', 'country_id');
    }
    public function comCity() {
        return $this->hasOne(City::class , 'id', 'city');
    }
    public function comState() {
        return $this->hasOne(State::class , 'id', 'state_id');
    }
}
