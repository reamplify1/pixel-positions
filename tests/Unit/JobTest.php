<?php

use App\Models\Employer;
use App\Models\Job;

//test('example', function () {
//    expect(true)->toBeTrue();
//});

it('it belongs to an employer', function () {
    // AAA - Arrange the world Act(some action) Assert(expectations)
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    // Act and Assert
    expect($job->employer()->is($employer))->toBeTrue();

});

it('can have tags', function () {
    // AAA
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
