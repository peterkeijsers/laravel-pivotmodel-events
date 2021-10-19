<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function learningObjects()
    {
        return $this->belongsToMany(LearningObjective::class)->using(LearningObjectiveTag::class);
    }

}
