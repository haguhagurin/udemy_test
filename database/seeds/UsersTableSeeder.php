<?php

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
        //
        DB::table("users")->insert([
            ["name" => "こたま",
            "email" => "kotama@kotama",
            "password" => Hash::make("password123")],
            [
            "name" => "みーこ",
            "email" => "miko@miko",
            "password" => Hash::make("password123")
            ],
            [
            "name" => "はむはむ",
            "email" => "hamu@hamu",
            "password" => Hash::make("password123")
            ]
        ]);
    }
}
