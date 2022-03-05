<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $table = 'visits';
    protected $guarded = [];
    const STATUSES = [
        1 => 'В процессе',
        2 => 'Завершено'
    ];
    const STATUSES_CLASS = [
        1 => 'text-primary',
        2 => 'text-success',
    ];

    public function getStatusTitle(): string
    {
        return self::STATUSES[$this->status];
    }

    public function getStatusClass(): string
    {
        return self::STATUSES_CLASS[$this->status];
    }

    public function getStatuses():array
    {
        return self::STATUSES;
    }
}
