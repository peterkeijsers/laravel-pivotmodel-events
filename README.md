# Pivot Model Events

This is a simple example project to proof that Eloquent Model events also fire for custom pivot models.

## Use case

We have two simpel models: learningObjective and tag. They have a many-to-many relationship. For performance reasons
we'd like to store the number of tags on each learningObjective model in a property named `tag_count`. This is done so
we don't need to query the pivot table each and every time we need to know the total number of tags a learningObjective
has.

## Solution

A custom pivot model in combination with an event subscriber for this pivot model's default eloquent model events. The
Subscriber class updates the learningObjective `tag_count` property.

## Extended usecases

By using a subscriber class to process any side-effects on the relationship between two models we can even queue these
the subscibers actions performed in the `subscribe` method. By only implementing the `ShouldQueue` interface in the subscribers class the possible slow task defined in the `subscribe()` method are added to Laravels default queue. 
