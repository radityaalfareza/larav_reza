<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';   // nama tabel di database
    protected $primaryKey = 'id';    // primary key
    public $timestamps = false;      // kalau tabel tidak punya created_at & updated_at
}
