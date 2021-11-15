<?php

use Alqahtani\WeightConversions\Weight;

it('can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});