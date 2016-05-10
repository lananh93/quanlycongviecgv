<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = "monhocs";
    protected $fillable = [
        
        'MaMH', 'MaLop', 'HocKy','HeDT', 'TenMH' , 'Loaigio', 'Sogio' , 'SoSV' , 'SoTC', 'HesoLop' , 'HesoDT'
    ];

    public $timestamps = false;

    public function gds () {
        return $this->hasMany('App\GD');
    }
}
