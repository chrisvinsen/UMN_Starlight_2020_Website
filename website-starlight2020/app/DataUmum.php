<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUmum extends Model
{
    protected $table = 'data_umum';

    protected $fillable = [
        'stagename',
        'membersvalue',
        'email',
        'line',
        'phonenumber',
        'instagram',
        'stagedescription',
        'payment',
        'payment_name',
        'payment_bank',
        'payment_number',
        'token',
        'stage',
        'status',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function individu()
    {
        return $this->hasMany('App\DataIndividu', 'stagename', 'stagename');
    }
}
