<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            ['name'=>'programing', 'slug'=>'programing', 'slug_id'=>100000, 'status'=>1, 'order_by'=>1],
            ['name'=>'Tech News', 'slug'=>'tech-news', 'slug_id'=>1000001, 'status'=>1, 'order_by'=>2],
            ['name'=>'Information Technology', 'slug'=>'information-technology', 'slug_id'=>1000002, 'status'=>1, 'order_by'=>3],
            ['name'=>'Hardware', 'slug'=>'hardware', 'slug_id'=>1000003, 'status'=>1, 'order_by'=>4],
            ['name'=>'Software', 'slug'=>'software', 'slug_id'=>1000004, 'status'=>1, 'order_by'=>5],
        ];

        foreach ($categories as $category){
            category::create($category);
        }
    }
}
 