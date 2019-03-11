<?php

use Illuminate\Database\Seeder;
use \App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        collect(range(1, 12))->each(function (int $userId) {
            factory(Post::class)->create([
                'user_id' => $userId
            ]);
        });
    }
}
