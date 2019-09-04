<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(
            [
                [
                    'name' => 'Россия',
                    'alias' => 'RU'
                ],

                [
                    'name' => 'Украина',
                    'alias' => 'UA'
                ],

                [
                    'name' => 'Казахстан',
                    'alias' => 'KZ'
                ],

                [
                    'name' => 'Беларусь',
                    'alias' => 'BY'
                ],
            ]);
    }
}
