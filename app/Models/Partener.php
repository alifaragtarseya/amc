<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partener extends Model
{
    use HasFactory;

    protected $fillable = [
        'image','type'
    ];


    public function scopeParteners($query)
    {
        return $query->where('type', 'partener');
    }

    public function scopeTools($query)
    {
        return $query->where('type', 'tool');
    }
}
