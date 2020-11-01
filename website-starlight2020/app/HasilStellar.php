<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HasilStellar extends Model
{
    use SoftDeletes;

	protected $table = 'hasil_stellar';

	protected $dates = ['deleted_at'];

	protected $fillable = ['ip_address', 'peserta_stellar_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at',
    ];
}
