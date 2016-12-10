<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class ShicaiCategory extends Model
{
    protected $table = 'shicai_category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded = [];
}
