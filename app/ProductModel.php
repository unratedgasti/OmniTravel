<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'prod_id';
}
