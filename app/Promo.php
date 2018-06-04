<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promos';
    protected $fillable =['mobil_id','promo','harga_awal','harga_promo'];
    public $timestamps = true;

    public function Mobil()
    {
        return $this->BelongsToMany('App\Mobil' , 'mobil_id');
    }
}
