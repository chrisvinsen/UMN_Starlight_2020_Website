<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUmum extends Model
{
    protected $table = 'data_umum';

    protected $fillable = [
        'stagename',
        'membersvalue',
        'line',
        'phonenumber',
        'instagram',
        'stagedescription',
        'performerbackground',
        'payment',
        'videolink'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
