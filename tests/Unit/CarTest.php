<?php

//car belongs to a stand

use App\Models\Stand;
use App\Models\Car;

test('it belongs to a stand', function () {

    //create a stand and a car
    $stand = Stand::factory()->create();

    $car = Car::factory()->create([ //forcing a relationship
        'stand_id' => $stand->id
    ]);

    //Testing

    expect($car->stand->is($stand))->toBeTrue();


});

//a car can have tags
it('can have tags', function() {

    //create a car and tag

    $car = Car::factory()->create();

    $car->tag('ABS');

    expect($car->tags)->toHaveCount(1);

});