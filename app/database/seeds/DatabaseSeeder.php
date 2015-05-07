<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('StudentTableSeeder');

        $this->command->info('Student table seeded!');
    }

}

class StudentTableSeeder extends Seeder{

    public function run()
    {
        DB::table('students')->delete();

        DB::table('students')->insert(
            [
                'firstName'=>'Almer',
                'middleName'=>'Robot',
                'lastName'=>'Test',
                'sex'=>'Male',
                'birthdate'=>'1111-44-21',
                'userName'=>'heyalmer',
                'email'=>'hello@email.com',
                'studentNumber'=>'2012-12345',
                'password'=>Hash::make('hello'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Hello',
                'middleName'=>'Hi',
                'lastName'=>'Wazup',
                'sex'=>'Female',
                'birthdate'=>'1111-12-12',
                'userName'=>'hellohi',
                'email'=>'hi@email.com',
                'studentNumber'=>'2011-12345',
                'password'=>Hash::make('pass'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Peter',
                'middleName'=>'Bernard',
                'lastName'=>'Rupa',
                'sex'=>'Male',
                'birthdate'=>'2012-10-11',
                'userName'=>'megatricycle',
                'email'=>'peter@email.com',
                'studentNumber'=>'2013-53532',
                'password'=>Hash::make('passer'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Arvie',
                'middleName'=>'Exorcise',
                'lastName'=>'Limbo',
                'sex'=>'Male',
                'birthdate'=>'2012-20-11',
                'userName'=>'arvieishello',
                'email'=>'arvie@email.com',
                'studentNumber'=>'2012-90432',
                'password'=>Hash::make('wtf'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Angelo',
                'middleName'=>'Capa',
                'lastName'=>'Guiam',
                'sex'=>'Male',
                'birthdate'=>'2013-42-11',
                'userName'=>'angelocapa',
                'email'=>'angelo@email.com',
                'studentNumber'=>'2013-42432',
                'password'=>Hash::make('angelo'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Joshua',
                'middleName'=>'Hello',
                'lastName'=>'Burgos',
                'sex'=>'Male',
                'birthdate'=>'2013-99-99',
                'userName'=>'joshuaburgos',
                'email'=>'joshua@email.com',
                'studentNumber'=>'2013-43029',
                'password'=>Hash::make('shit'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Cacai',
                'middleName'=>'-babe',
                'lastName'=>'Esguerra',
                'sex'=>'Female',
                'birthdate'=>'2013-43-23',
                'userName'=>'isangcacaibabe',
                'email'=>'cacai@email.com',
                'studentNumber'=>'2013-32932',
                'password'=>Hash::make('cacaibabe'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Anne',
                'middleName'=>'Kristine',
                'lastName'=>'Montoya',
                'sex'=>'Female',
                'birthdate'=>'2103-43-21',
                'userName'=>'haruhi1234',
                'email'=>'annetin@email.com',
                'studentNumber'=>'2013-13242',
                'password'=>Hash::make('what'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Leensey',
                'middleName'=>'L0R3Nz0hhxZsz',
                'lastName'=>'Lawas',
                'sex'=>'Female',
                'birthdate'=>'2013-20-11',
                'userName'=>'leenseylawas',
                'email'=>'leensey@email.com',
                'studentNumber'=>'2013-54642',
                'password'=>Hash::make('hey'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Jervie',
                'middleName'=>'Exorcise',
                'lastName'=>'Limbo',
                'sex'=>'Male',
                'birthdate'=>'2012-20-11',
                'userName'=>'jervieshello',
                'email'=>'harlo@email.com',
                'studentNumber'=>'2012-45487',
                'password'=>Hash::make('wtf'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'Darth',
                'middleName'=>'Black',
                'lastName'=>'Vader',
                'sex'=>'Male',
                'birthdate'=>'1222-32-43',
                'userName'=>'darthvader',
                'email'=>'vader@email.com',
                'studentNumber'=>'1231-43492',
                'password'=>Hash::make('darkside'),
            ]
        );

        DB::table('students')->insert(
            [
                'firstName'=>'1',
                'middleName'=>'1',
                'lastName'=>'1',
                'sex'=>'Male',
                'birthdate'=>'1222-11-11',
                'userName'=>'1',
                'email'=>'1@e.com',
                'studentNumber'=>'1229-43492',
                'password'=>Hash::make('123'),
            ]
        );

//        Student::create(
//            [
//                'firstName'=>'Almer',
//                'middleName'=>'Robot',
//                'lastName'=>'Test',
//                'sex'=>'Male',
//                'birthdate'=>'1111-44-21',
//                'userName'=>'heyalmer',
//                'email'=>'hello@email.com',
//                'password'=>Hash::make('hello'),
//            ],[
//                'firstName'=>'Hello',
//                'middleName'=>'Hi',
//                'lastName'=>'Wazup',
//                'sex'=>'Female',
//                'birthdate'=>'1111-12-12',
//                'userName'=>'hellohi',
//                'email'=>'hi@email.com',
//                'password'=>Hash::make('pass'),
//            ]
//        );

    }

}