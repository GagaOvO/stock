<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocker extends Model
{
    protected $table="stock";
    protected $fillable=['product_name','voucher_number','quantity_out','outgoing_stock','comment'];
}
