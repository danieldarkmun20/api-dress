<?php

namespace Database\Seeders;

use App\Models\DressModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DressModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DressModel::create(array(
            "name" => "DARKMUN BLUSA",
            "price" => "12.00",
            "brand" => "DARKMUN",
            "user_id" => 1
        ));
        DressModel::create(array(
            "name" => "DARKMUN PANTALON",
            "price" => "22.00",
            "brand" => "DARKMUN",
            "user_id" => 1
        ));
        DressModel::create(array(
            "name" => "DARKMUN BOXER",
            "price" => "2.00",
            "brand" => "DARKMUN",
            "user_id" => 1
        ));
        DressModel::create(array(
            "name" => "PEREZ BLUSA",
            "price" => "12.00",
            "brand" => "PEREZ",
            "user_id" => 2
        ));
        DressModel::create(array(
            "name" => "PEREZ CAMISETA ROJA",
            "price" => "22.00",
            "brand" => "PEREZ",
            "user_id" => 2
        ));
        DressModel::create(array(
            "name" => "DEV REACT",
            "price" => "32.00",
            "brand" => "DEV",
            "user_id" => 2
        ));
        DressModel::create(array(
            "name" => "DEV VUE",
            "price" => "32.00",
            "brand" => "DEV",
            "user_id" => 3
        ));
        DressModel::create(array(
            "name" => "DEV ANGULAR",
            "price" => "32.00",
            "brand" => "DEV",
            "user_id" => 3
        ));
        DressModel::create(array(
            "name" => "DEV SVELTE",
            "price" => "32.00",
            "brand" => "DEV",
            "user_id" => 3
        ));
        DressModel::create(array(
            "name" => "DEV FLUTTER",
            "price" => "32.00",
            "brand" => "DEV",
            "user_id" => 4
        ));
    }
}
