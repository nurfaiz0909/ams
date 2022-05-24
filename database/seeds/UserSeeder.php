<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        User::updateOrCreate([
            'id' => 1,
            'nip' => 'admin',
            'password' => bcrypt('admin'),
            'is_active' => 1
        ]);
    }
}
