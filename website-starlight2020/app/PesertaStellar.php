<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PesertaStellar extends Model
{
    use SoftDeletes;

	protected $table = 'peserta_stellar';

	protected $dates = ['deleted_at'];

	protected $fillable = ['name', 'images', 'images_hover'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at',
    ];
}
