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
            factory(Message::class)->create(compact('user_id'));
        });

    }
}
