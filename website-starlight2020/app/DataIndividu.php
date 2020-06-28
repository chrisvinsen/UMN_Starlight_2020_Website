<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataIndividu extends Model
{
    protected $table = 'data_individu';

    protected $fillable = [
        'fullname',
        'birthdate',
        'address',
        'school',
        'phonenumber',
        'line',
        'ktp',
        'studentid',
        'stagename',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
