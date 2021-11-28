<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	for($i = 0; $i < 12; $i++){
    		DB::table('details')->insert([
    			'id' => $i+1,
    			'book_id' => $i+1,
                'author' => $faker->name(),
                'publisher' => $faker->name(),
                'year' => $faker->year($max = 'now') ,
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2) ,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    		]);
        }
    }
}
