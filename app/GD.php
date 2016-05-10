<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD extends Model
{
    protected $table = "gds";
    protected $fillable = [

        'MaGD', 'MaMH', 'users_id', 'TenGD' , 'TgBD' , 'TgKT', 'Trangthai'
    ];

    public $timestamps = false;

    public function tacvugds () {
        return $this->hasMany('App\TacVuGD');
    }
    
    public function monhocs () {
        return $this->belongsTo('App\MonHoc');
    }
}
