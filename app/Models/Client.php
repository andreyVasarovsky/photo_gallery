<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $guarded = [];

    public function themes()
    {
        return $this->belongsToMany(Theme::class, 'client_themes', 'client_id', 'theme_id');
    }
}
