<?php

use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Customer::create([
            'date' => '1999/03/20',
            'time' => '8h',
            'name' => 'Admfefe',
            'email' => 'admin@google.com',
            'phone' => '0912766337',
            'content' =>'Xem nhà vào lúc 17h30 nhớ ra sớm 30p',

        ]);
        \App\Customer::create([
            'date' => '1999/03/20',
            'time' => '8h',
            'name' => 'Admfefe',
            'email' => 'admin@google.com',
            'phone' => '0912766337',
            'content' =>'Xem nhà vào lúc 17h30 nhớ ra sớm 30p',

        ]);\App\Customer::create([
        'date' => '1999/03/20',
        'time' => '8h',
        'name' => 'Admfefe',
        'email' => 'admin@google.com',
        'phone' => '0912766337',
        'content' =>'Xem nhà vào lúc 17h30 nhớ ra sớm 30p',

    ]);\App\Customer::create([
        'date' => '1999/03/20',
        'time' => '8h',
        'name' => 'Admfefe',
        'email' => 'admin@google.com',
        'phone' => '0912766337',
        'content' =>'Xem nhà vào lúc 17h30 nhớ ra sớm 30p',

    ]);
    }
}
