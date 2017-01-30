<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run();
    {
        $faker = Faker::create();
         for ($i=0; $i < 10; $i++){
         	DB::table('produk')->insert([
               'nama_prd' => $faker->title,
               'spek'     => $faker->text,
               'harga'    => $faker->text,

         		]);
         }
    }
}
