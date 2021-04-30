<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staff";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama','alamat','tempat_lahir','tgl_lahir','gender', 'phone_email'
    ];

    public function laboratorie()
    {
          return $this->HasMany(Laboratory::class);
         //return $this->HasMany('App\Models\Laboratory', 'id');
         //return $this->belongsTo('App\Models\Laboratory', 'id');
    }
}
