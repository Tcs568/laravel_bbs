<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => $faker->dateTime(),
            'password' => bcrypt('1234'),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ]);

        for ($i = 0; $i < 30; $i++) {
            DB::table('users')->insert([
                'name' => $faker->unique()->userName(),
                'email' => $faker->unique()->email(),
                'password' => bcrypt('1234'),
                'email_verified_at' => $faker->dateTime(),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
