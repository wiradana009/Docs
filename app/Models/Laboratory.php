<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    protected $table = "laboratories";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','pasien_id','staff_id','acty_name','acty_type','units','result','interval_ranges', 'desc', 'tgl_periksa'
    ];

    public function pasien()
    {
        //return $this->belongsTo('App\Models\pasien', 'id');
        return $this->belongsTo(Pasien::class);
    }

    public function staff()
    {
        //return $this->belongsTo('App\Models\pasien', 'id');
        return $this->belongsTo(Staff::class);
    }

}
