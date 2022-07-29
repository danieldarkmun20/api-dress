<?php

namespace Database\Seeders;

use App\Models\Dress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "free",
            "dress_model_id" => 1,
            "user_id" => 1
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "free",
            "dress_model_id" => 1,
            "user_id" => 1
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "rented",
            "dress_model_id" => 2,
            "user_id" => 2
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "rented",
            "dress_model_id" => 2,
            "user_id" => 2
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "out",
            "dress_model_id" => 3,
            "user_id" => 3
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "out",
            "dress_model_id" => 3,
            "user_id" => 3
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "free",
            "dress_model_id" => 4,
            "user_id" => 4
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "free",
            "dress_model_id" => 4,
            "user_id" => 4
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "rented",
            "dress_model_id" => 5,
            "user_id" => 5
        ));
        Dress::create(array(
            "code" => substr(str_shuffle($permitted_chars), 0, 10),
            "status" => "rented",
            "dress_model_id" => 5,
            "user_id" => 5
        ));
    }
}
