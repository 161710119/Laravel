<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    protected $fillable =['nama','warna','transmisi','tahun_keluar','harga','deskripsi','tipe_id','kategori_id','dealer_id'];
    public $timestamps = true;

    public function Tipe()
    {
        return $this->BelongsTo('App\Mobil' , 'tipe_id');
    }

    public function Kategori()
    {
        return $this->BelongsToOne('App\Mobil' , 'kategori_id');
    }

    public function Dealer()
    {
        return $this->BelongsTo('App\Mobil' , 'dealer_id');
    }

    public function Member()
    {
        return $this->HasMany('App\Member' , 'mobil_id');
    }

    public function Promo()
    {
        return $this->HasMany('App\Promo' , 'mobil_id');
    }
}
