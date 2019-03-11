<?php

use Illuminate\Database\Seeder;
use \App\User;
use \App\Post;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'name' => str_random(10),
        //     'account' => str_random(10),
        //     'password' => bcrypt('pa55w0rd'),
        //     'created_at' => null,
        //     'updated_at' => null
        // ]);
        factory(User::class, 20)->create()
            ->each(function (User $user) {
                collect(range(2, 6))->each(function () use ($user) {
                    $user->posts()
                        ->save(factory(Post::class)
                        ->make());
                });
            });
    }
}
