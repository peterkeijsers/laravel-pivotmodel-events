<?php

namespace App\Models;

use App\Events\LearningObjectiveTagCreated;
use App\Events\LearningObjectiveTagDeleted;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LearningObjectiveTag extends Pivot
{
    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => LearningObjectiveTagCreated::class,
        'deleted' => LearningObjectiveTagDeleted::class
    ];
}
