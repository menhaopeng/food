<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CaipuCategory extends Model
{
    protected $table = 'caipu_category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded = [];
}