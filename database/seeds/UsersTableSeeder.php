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
            'name'     => 'admin',
            'email'    => 'admin@local.host',
            'password' => 'admin',
        ]);

        for ($i=0; $i<20; $i++) {
            $faker = Faker\Factory::create();
            User::create([
                'name'     => $faker->name,
                'email'    => $faker->email,
                'password' => $faker->password,
            ]);
        }
    }
}
