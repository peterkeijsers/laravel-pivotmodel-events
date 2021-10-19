<?php

namespace App\Listeners;

use App\Events\LearningObjectiveTagCreated;
use App\Events\LearningObjectiveTagUpdated;
use App\Models\LearningObjective;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LearningObjectiveTagSubscriber implements ShouldQueue
{

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen(
            LearningObjectiveTagCreated::class,
            [self::class, 'updateLearningObjectiveTagsCount']
        );

        $events->listen(
            LearningObjectiveTagUpdated::class,
            [self::class, 'updateLearningObjectiveTagsCount']
        );
    }


    /**
     * Handle the event.
     *
     * @param  LearningObjectiveTagCreated|LearningObjectiveTagUpdated $event
     * @return void
     */
    public function updateLearningObjectiveTagsCount($event)
    {
        $learningObjectiveTag = $event->learningObjectiveTag;
        $learningObjective = LearningObjective::findOrFail($learningObjectiveTag->learning_objective_id);
        $tagsCount = $learningObjective->tags()->count();

        $learningObjective->tag_count = $tagsCount;
        $learningObjective->save();
    }
}
