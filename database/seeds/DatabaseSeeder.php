<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'aku',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('12121212'),
            'alamat' => 'bogor',
            'no_telpon' => 91818181,
            'role_user' => 1,
            'no_rekening' => '1232f1',
        ]);
    }
}
