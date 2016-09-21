<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) {
          DB::table('items')->insert([
              'title' => str_random(10),
              'description' => str_random(30)
          ]);
        }
    }
}
