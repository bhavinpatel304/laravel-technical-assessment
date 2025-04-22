<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class ActorMovieSeeder extends Seeder
{
    public function run()
    {
        $movies = Movie::factory()->count(15)->create();
        Actor::factory()
        ->count(5)
        ->create()
        ->each(function ($actor) use($movies) {
            $movieIds = $movies->random(3)->pluck('id')->toArray();
            $actor->movies()->attach($movieIds);
        });
    }
}