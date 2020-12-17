<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $touches = [
        'user'
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    // Relation many to one
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
