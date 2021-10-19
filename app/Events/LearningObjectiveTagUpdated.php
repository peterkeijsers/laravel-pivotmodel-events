<?php

namespace App\Events;

use App\Models\LearningObjectiveTag;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LearningObjectiveTagUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public LearningObjectiveTag $learningObjectiveTag;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(LearningObjectiveTag $learningObjectiveTag)
    {

        $this->learningObjectiveTag = $learningObjectiveTag;
    }

}
