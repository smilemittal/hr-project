<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeRegistration extends Model
{
    protected $guarded = ['id'];

    public function relGender() {
        return $this->hasOne(Gender::class , 'id', 'gender');
    }

    public function relMartialStatus() {
        return $this->hasOne(MartialStatus::class , 'id', 'martial_status');

    }

    public function relCountry() {
        return $this->hasOne(Country::class , 'id', 'country');

    }

    public function relCity() {
        return $this->hasOne(City::class , 'id', 'city');

    }

    public function relState() {
        return $this->hasOne(State::class , 'id', 'state');

    }

}
