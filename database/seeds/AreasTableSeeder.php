<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas') ->insert([
             ['name' => '広島市', 'authed' => true],
             ['name' => '宮島', 'authed' => true],
             ['name' => '東広島','authed' => true],
             ['name' => '呉', 'authed' => true],
             ['name' => '竹原', 'authed' => true],
             ['name' => '三原', 'authed' => true],
             ['name' => '福山', 'authed' => true],
             ['name' => '尾道', 'authed' => true],
             ['name' => '県北', 'authed' => true],
             ['name' => 'その他', 'authed' => true],
    ]);}
 }