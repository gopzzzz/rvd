<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        'name',
        'dob',
        'gender',
        'adharcard',
        'email',
        'phonenumber',
        'tenth_school_name',
        'tenthpercentage',
        'higherschoolname',
        'higherpercentage',
        'higherdepartment',
        'program',
        'hearabout',
        'address',
        'city',
        'state',
        'pincode',
        'declaration',
    ];

 
}