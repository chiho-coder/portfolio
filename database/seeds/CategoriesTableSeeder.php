<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
         DB::table('categories') ->updateOrCreate([
         ['name' => '観光'],
         ['name' => '宿泊'],
         ['name' => 'レストラン・居酒屋'],
         ['name' => 'その他'],
       ]);}
 }