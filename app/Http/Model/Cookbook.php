<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Cookbook extends Model
{
    protected $table = 'cookbook';
    protected $primaryKey = 'cb_id';
    public $timestamps = false;
    protected $guarded = [];
}
