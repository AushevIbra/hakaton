<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        \App\Category::create([
            'id'   => 1,
            'name' => 'Продукты',
        ]);

        \App\Category::create([
            'id'        => 2,
            'name'      => 'Чай, кофе',
            'parent_id' => 1,
        ]);
    }
}

