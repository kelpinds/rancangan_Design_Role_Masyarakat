<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    use HasFactory;

    protected $table ="tanggapan";

    protected $primaryKey="id_tanggapan";

    public $incrementing =false;

    protected $KeyType ="string";

    protected $guarded = [];
}
