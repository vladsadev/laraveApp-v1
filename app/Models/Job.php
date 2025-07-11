<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public static function find(int $id)
    {
//        $job = Arr::first(Job::all(), fn($job) => $job['id'] === $id);
        $job = Arr::first(static::all(), fn($job) => $job['id'] === $id);

        if(!$job){
            abort(404);
        }
        return $job;

    }

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'name' => "Director",
                'salary' => "20.000 USD"
            ],
            [
                'id' => 2,
                'name' => "Actor",
                'salary' => "50.000 USD"
            ],
            [
                'id' => 3,
                'name' => "Mechanic",
                'salary' => "90.000 USD"
            ]
        ];
    }

}
