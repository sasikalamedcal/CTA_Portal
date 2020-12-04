<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loa extends Model
{
    protected $fillable = [
        'title','forename','surname','email','phone','mobile','dob','address_line_1','address_line_2','town','county','postcode','cta','comments','leadsource'
    ];
}
