<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeShift extends Model
{
    protected $guarded = ['id'];

    public const WeekDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

}
