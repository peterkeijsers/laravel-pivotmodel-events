<?php

namespace App\Events;

use App\Models\LearningObjectiveTag;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LearningObjectiveTagDeleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var LearningObjectiveTag
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
