<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Политика'],
            ['name' => 'Спорт'],
            ['name' => 'Экономика'],
            ['name' => 'Культура'],
            ['name' => 'Авто'],
            ['name' => 'Наука'],
        ]);
    }
}
