<?php

use Illuminate\Database\Seeder;
use \App\Message;
class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        collect(range(1, rand(2,20)))->each(function (int $user_id) {
            $post_id = rand(1, 30);
            factory(Message::class)->create(compact('post_id','user_id'));
        });

    }
}
