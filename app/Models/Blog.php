<?php

namespace App\Models;

// Trait
use App\Models\BelongstouserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, BelongstouserTrait;
    protected $with = [
        'user'
    ];
    protected $touches = [
        'user'
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    
}
