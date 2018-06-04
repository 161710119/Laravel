<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table = 'tipes';
    protected $fillable =['nama','tipe_id'];
    public $timestamps = true;

    public function Merk()
    {
        return $this->BelongsTo('App\Merk' , 'merk_id');
    }

    public function Mobil()
    {
        return $this->HasMany('App\Mobil' , 'tipe_id');
    }
}
