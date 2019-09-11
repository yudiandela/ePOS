<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Pelanggan extends Model
{
    protected $table = "tbl_pelanggan";
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = ['nama_pelangan','no_hp','alamat'];
}
