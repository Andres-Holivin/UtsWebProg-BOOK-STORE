<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                "categoryId"=>'1',
                "title"=>"Heir Of Joy"
            ],[
                "categoryId"=>'2',
                "title"=>"Giant Of History"
            ],[
                "categoryId"=>'1',
                "title"=>"Assassins Of Hope"
            ],[
                "categoryId"=>'1',
                "title"=>"Spiders Without Hope"
            ],[
                "categoryId"=>'2',
                "title"=>"Wolves And Rebels"
            ],[
                "categoryId"=>'2',
                "title"=>"Spiders And Heirs"
            ],[
                "categoryId"=>'1',
                "title"=>"Ruination Of The Gods"
            ],[
                "categoryId"=>'2',
                "title"=>"Success Of Dawn"
            ],[
                "categoryId"=>'1',
                "title"=>"Meeting In The Fog"
            ],[
                "categoryId"=>'1',
                "title"=>"Battle The Mountains"
            ],[
                "categoryId"=>'2',
                "title"=>"Man Of The Banished"
            ],[
                "categoryId"=>'2',
                "title"=>"Heir Of The Land"
            ]

            ];

    	for($i = 0; $i < count($data); $i++){
    		DB::table('books')->insert([
    			'id' => $i+1,
    			'category_id' => $data[$i]["categoryId"],
    			'title' =>  $data[$i]["title"],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    		]);
        }
    }
}
