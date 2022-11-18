<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'filename',
        'album_id',
    ];
    public $timestamps = true;


    public function album()
    {
        return $this->belongsToMany('App\Models\Album', 'album_id');
    }
}
