<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $table = 'dealers';
    protected $fillable =['nama','alamat','no_hp','deskripsi'];
    public $timestamps = true;

    public function Dealer()
    {
        return $this->HasOne('App\Mobil' , 'dealer_id');
    }
}
