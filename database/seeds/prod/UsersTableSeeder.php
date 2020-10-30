<?php

use Illuminate\Database\Seeder;
use App\User;

class ProdUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'id' => 1,
            'name' => 'Edward Delgado',
            'email' => 'dstest@dredward.site',
            'password' => \Hash::make('5uDtqvaXLoZLziQk'),
        ]);
    }
}
