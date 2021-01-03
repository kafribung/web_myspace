<?php
namespace App\Models;

trait BelongstouserTrait
{
    // Relation one to one
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}