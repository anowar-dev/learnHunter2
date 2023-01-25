<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class teachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('teachers')->insert([
            // 'name' => Str::random(10),
            // 'email' => Str::random(10).'@gmail.com',
            // 'password' => Hash::make('password'),
        // ]);

        $data=[
            [
                'name'=> Str::random(10),
                'email'=> Str::random(10).'@gmail.com',
                'address'=> Str::random(40)
            ],

            [
                'name'=> Str::random(10),
                'email'=> Str::random(10).'@gmail.com',
                'address'=> Str::random(40)
            ],

            [
                'name'=> Str::random(10),
                'email'=> Str::random(10).'@gmail.com',
                'address'=> Str::random(40)
            ],

            [
                'name'=> Str::random(10),
                'email'=> Str::random(10).'@gmail.com',
                'address'=> Str::random(40)
            ]
        ];
        DB::table('teachers')->insert($data);
    }
}
