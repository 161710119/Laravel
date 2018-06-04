<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable =['nama'];
    public $timestamps = true;

    public function Kategori()
    {
        return $this->HasOne('App\Mobil' , 'kategori_id');
    }
}
