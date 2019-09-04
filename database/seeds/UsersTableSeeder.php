<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Admin',
                    'login' => 'Admin',
                    'email' => 'trushkov@geops.ru',
                    'first_name' => 'Сергей',
                    'middle_name' => 'Александрович',
                    'last_name' => 'Трушков',
                    'mobile_phone' => '+79651105145',
                    'country_id' => 1,
                    'password' => '$2y$10$q8coEfWGPRJ6oQzLtfTst.bcx4kOJ5aJOgbdv0436cAlqvh0iaqyu',
                ],

                [
                    'name' => 'Гопота',
                    'login' => 'pupkin',
                    'email' => 'pupkin@geops.ru',
                    'first_name' => 'Василий',
                    'middle_name' => 'Петрович',
                    'last_name' => 'Пупкин',
                    'mobile_phone' => '+74951231212',
                    'country_id' => 1,
                    'password' => 1,
                ],

                [
                    'name' => 'Писатель',
                    'login' => 'leo',
                    'email' => 'leo@site.ru',
                    'first_name' => 'Лев',
                    'middle_name' => 'Николаевич',
                    'last_name' => 'Толстой',
                    'mobile_phone' => '+71234567899',
                    'country_id' => 1,
                    'password' => 1,
                ],

                [
                    'name' => 'Классик',
                    'login' => 'anton',
                    'email' => 'achechov@site.ru',
                    'first_name' => 'Антон',
                    'middle_name' => 'Павлович',
                    'last_name' => 'Чехов',
                    'mobile_phone' => '+74561233698',
                    'country_id' => 2,
                    'password' => 1,
                ],

                [
                    'name' => 'Светка',
                    'login' => 'sveta',
                    'email' => 's@site.ru',
                    'first_name' => 'Светлана',
                    'middle_name' => 'Васильевна',
                    'last_name' => 'Копытина',
                    'mobile_phone' => '+4959874563',
                    'country_id' => 3,
                    'password' => 1,
                ],

                [
                    'name' => 'Вождь пролетариата',
                    'login' => 'lenin',
                    'email' => 'vlenin@site.ru',
                    'first_name' => 'Владимир',
                    'middle_name' => 'Ильич',
                    'last_name' => 'Ленин',
                    'mobile_phone' => '+79874561233',
                    'country_id' => 4,
                    'password' => 1,
                ],
            ]);
    }
}
