<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Trait
use App\Models\BelongstouserTrait;

class About extends Model
{
    use HasFactory, BelongstouserTrait;

    protected $fillable = [
        'description'
    ];
}
