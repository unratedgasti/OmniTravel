<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    //
    protected $table = 'package';
     protected $fillable = ['pack_name', 'pack_price','start_date','end_date','pack_status','pack_inclusion','pack_test'];
}
