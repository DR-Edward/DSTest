<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'Edward Delgado',
            'email' => 'dstest@dredward.site',
            'password' => \Hash::make('5uDtqvaXLoZLziQk'),
        ]);

        factory(User::class, 5)->create();
    }
}
