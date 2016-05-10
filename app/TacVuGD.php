<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TacVuGD extends Model
{
    protected $table = "tacvugds";
    protected $fillable = [

        'MaTV' , 'MaGD', 'TenTV' , 'TgBD' , 'TgKT', 'Trangthai'
    ];

    public $timestamps = false;

    public function gd () {
        return $this->belongsTo('App\GD');
    }
}
