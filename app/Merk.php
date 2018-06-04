<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merks';
    protected $fillable =['nama','deskripsi'];
    public $timestamps = true;

    public function Merk()
    {
        return $this->HasOne('App\Tipe' , 'merk_id');
    }
}
