<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    const ADMIN_ROLE_FK = 1;
    const ROLE_TITLE_MAP = [
        1 => 'Админ',
        2 => 'Пользователь'
    ];
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    protected $guarded = [];

    public function isAdmin():bool{
        return intval($this->role_fk) === self::ADMIN_ROLE_FK;
    }

    public function getRoleTitle():string{
        return (isset(self::ROLE_TITLE_MAP[$this->role_fk])) ? self::ROLE_TITLE_MAP[$this->role_fk] : 'Неизвестно';
    }

    public function getRoles():array{
        return self::ROLE_TITLE_MAP;
    }
}
