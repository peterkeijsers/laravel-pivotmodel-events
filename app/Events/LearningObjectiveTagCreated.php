<?php

namespace App\Events;

use App\Models\LearningObjectiveTag;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\LearningObjective;

class LearningObjectiveTagCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var LearningObjective
     */
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
