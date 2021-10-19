<?php

namespace Database\Seeders;

use App\Models\LearningObjective;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $learningObjectives = LearningObjective::factory()->count(10000)->create();
        $tags = Tag::factory()->count(100)->create();

        foreach ($learningObjectives as $learningObjective) {
            $learningObjective->tags()->sync( $tags->random(rand(0,10))->pluck('id') );
        }
    }
}
