<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'user_id'=>'1',
            'name'=>'Laravel',
            'is_published'=>'1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'user_id'=>'1',
            'name'=>'Wordpress',
            'is_published'=>'0',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'user_id'=>'1',
            'name'=>'Django',
            'is_published'=>'1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'user_id'=>'1',
            'name'=>'Javascript',
            'is_published'=>'0',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'user_id'=>'1',
            'name'=>'Python',
            'is_published'=>'1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
        ]);
    }
}
