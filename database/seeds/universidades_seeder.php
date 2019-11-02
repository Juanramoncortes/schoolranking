<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class universidades_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(App\University::class,50)->create()->each(function($University){
                $University->posts()->save(factory(App\Post::class)->make());
            });
    }
}
