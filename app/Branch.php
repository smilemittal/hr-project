<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $guarded = ['id'];

    public function company(){
    	return $this->belongsTo(Company::class, 'company_id', 'id');
    }
    public function branchCountry() {
        return $this->hasOne(Country::class , 'id', 'country_id');
    }
    public function branchCity() {
        return $this->hasOne(City::class , 'id', 'city');
    }
    public function branchState() {
        return $this->hasOne(State::class , 'id', 'state_id');
    }
}
