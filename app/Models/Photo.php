<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'photos';
    protected $guarded = [];

    public function theme(){
        return $this->belongsTo(Theme::class, 'theme_id', 'id');
    }
}
