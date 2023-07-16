<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;

    protected $table = "tb_konsumen";
    protected $primaryKey = "id_konsumen";
    protected $guarded = [];
}
