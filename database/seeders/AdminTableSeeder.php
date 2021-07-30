<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Admin";
        $user->no_hp = "089021902134";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('12345678');
        $user->profil = "profile-200x200.png";
        $user->role = "Admin";
        $user->save();
    }
}
