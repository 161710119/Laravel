<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'mobils';
    protected $fillable =['nama','email','password','alamat','mobil_id'];
    public $timestamps = true;

    public function Mobil()
    {
        return $this->BelongsToMany('App\Mobil' , 'mobil_id');
    }
}
