<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Sistemas";
        $user->lastname = "Adminsitrador";
        $user->phone = "6122316503";
        $user->email = "sistema@mail.com";
        $user->password = bcrypt("12345678");
        $user->save();
        User::factory()->count(10)->create();
    }
}
