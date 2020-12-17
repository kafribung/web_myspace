<?php
namespace App\Models;

trait BelongstouserTrait
{
    protected $touches = [
        'user'
    ];
    // Relation one to one
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}