<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\LearningObjectiveTagCreated;

class LearningObjective extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->using(LearningObjectiveTag::class);
    }
}
