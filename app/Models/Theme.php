<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $table = 'themes';
    protected $guarded = [];

    public function photos(){
        return $this->hasMany(Photo::class, 'theme_id', 'id');
    }

    public function clients(){
        return $this->belongsToMany(Client::class, 'client_themes', 'theme_id', 'client_id');
    }
}
