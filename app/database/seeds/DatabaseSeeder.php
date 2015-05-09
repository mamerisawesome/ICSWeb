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
        DB::table('accounts')->delete();
        DB::table('groups')->delete();

        File::cleanDirectory('public/JSONcontents/accounts/groups');
        File::cleanDirectory('public/JSONcontents/accounts/messages');
        File::cleanDirectory('public/JSONcontents/groups/classList');
        File::cleanDirectory('public/JSONcontents/groups/posts');

        function createUserJsonFile($name){
            // JSON file creator
            $user_groups = array(
                "groups"        => NULL
            );

            $user_messages = array(
                "sentTo"            => NULL,
                "dateOfMessage"     => NULL,
                "messageTitle"      => NULL,
                "messageContent"    => NULL
            );

            File::put('public/JSONcontents/accounts/groups/'.$name.'_groups.json', json_encode($user_groups));
            File::put('public/JSONcontents/accounts/messages/'.$name.'_messages.json', json_encode($user_messages));
        }

        User::create(
            [
                'firstName'         =>'Mamer',
                'middleName'        =>'Taculog',
                'lastName'          =>'Mendoza',
                'sex'               =>'Male',
                'birthdate'         =>'1222-11-11',
                'userName'          =>'almer',
                'email'             =>'almer@e.com',
                'studentNumber'     =>'1229-43492',
                'password'          =>Hash::make('123'),
                'type'              =>'student',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/almer_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/almer_message.json'),

                'employeeNumber'    =>NULL,
                'room'              =>NULL,
                'academicPosition'  =>NULL
            ]
        );
        createUserJsonFile("almer");

        User::create(
            [
                'firstName'         =>'Cacai',
                'middleName'        =>'Babe',
                'lastName'          =>'Esguerra',
                'sex'               =>'Female',
                'birthdate'         =>'1234-01-09',
                'userName'          =>'cacai',
                'email'             =>'cacai@e.com',
                'studentNumber'     =>'3214-41531',
                'password'          =>Hash::make('123'),
                'type'              =>'student',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/cacai_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/cacai_message.json'),

                'employeeNumber'    =>NULL,
                'room'              =>NULL,
                'academicPosition'  =>NULL
            ]
        );
        createUserJsonFile("cacai");


        User::create(
            [
                'firstName'         =>'Leensey',
                'middleName'        =>'Hello',
                'lastName'          =>'Lawas',
                'sex'               =>'Female',
                'birthdate'         =>'3214-09-01',
                'userName'          =>'leensey',
                'email'             =>'leensey@e.com',
                'studentNumber'     =>'4325-53242',
                'password'          =>Hash::make('123'),
                'type'              =>'student',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/leensey_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/leensey_message.json'),


                'employeeNumber'    =>NULL,
                'room'              =>NULL,
                'academicPosition'  =>NULL
            ]
        );
        createUserJsonFile("leensey");


        User::create(
            [
                'firstName'         =>'Joshua',
                'middleName'        =>'Hi',
                'lastName'          =>'Burgos',
                'sex'               =>'Male',
                'birthdate'         =>'4222-02-03',
                'userName'          =>'joshua',
                'email'             =>'joshua@e.com',
                'studentNumber'     =>'4124-52142',
                'password'          =>Hash::make('123'),
                'type'              =>'student',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/joshua_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/joshua_message.json'),


                'employeeNumber'    =>NULL,
                'room'              =>NULL,
                'academicPosition'  =>NULL
            ]
        );
        createUserJsonFile("joshua");


        User::create(
            [
                'firstName'         =>'Angelo',
                'middleName'        =>'Wazup',
                'lastName'          =>'Guiam',
                'sex'               =>'Male',
                'birthdate'         =>'3412-11-03',
                'userName'          =>'angelo',
                'email'             =>'angelo@e.com',
                'studentNumber'     =>'4352-53125',
                'password'          =>Hash::make('123'),
                'type'              =>'student',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/angelo_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/angelo_message.json'),


                'employeeNumber'    =>NULL,
                'room'              =>NULL,
                'academicPosition'  =>NULL
            ]
        );
        createUserJsonFile("angelo");


        User::create(
            [
                'firstName'         =>'Anne',
                'middleName'        =>'Tin',
                'lastName'          =>'Montoya',
                'sex'               =>'Female',
                'birthdate'         =>'1224-05-01',
                'userName'          =>'tintin',
                'email'             =>'anne@e.com',
                'studentNumber'     =>'54642-41412',
                'password'          =>Hash::make('123'),
                'type'              =>'student',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/tintin_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/tintin_message.json'),


                'employeeNumber'    =>NULL,
                'room'              =>NULL,
                'academicPosition'  =>NULL
            ]
        );
        createUserJsonFile("tintin");


        User::create(
            [
                'firstName'         =>'Juan',
                'middleName'        =>'Protacio',
                'lastName'          =>'Tama\' Aad',
                'sex'               =>'Female',
                'birthdate'         =>'1234-01-09',
                'userName'          =>'juanitoHonesto',
                'email'             =>'juanTAMAD@e.com',
                'password'          =>Hash::make('123'),
                'type'              =>'faculty',
                'employeeNumber'    =>'2013402112',
                'room'              =>'C-123',
                'academicPosition'  =>'Assistant Professor I',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/juanitoHonesto_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/juanitoHonesto_message.json'),


                'studentNumber'     =>NULL
            ]
        );
        createUserJsonFile("juanitoHonesto");


        User::create(
            [
                'firstName'         =>'Josephine',
                'middleName'        =>'Katigbak',
                'lastName'          =>'Bracken',
                'sex'               =>'Female',
                'birthdate'         =>'2222-06-05',
                'userName'          =>'rizalForevs',
                'email'             =>'rizalANDkatigbak@e.com',
                'password'          =>Hash::make('123'),
                'type'              =>'faculty',
                'employeeNumber'    =>'2012029402',
                'room'              =>'C-125',
                'academicPosition'  =>'Professor I',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/rizalForevs_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/rizalForevs_message.json'),


                'studentNumber'     =>NULL
            ]
        );
        createUserJsonFile("rizalForevs");


        User::create(
            [
                'firstName'         =>'Administrator',
                'middleName'        =>'Sees',
                'lastName'          =>'Everything',
                'sex'               =>'Sexless',
                'birthdate'         =>'9999-00-00',
                'userName'          =>'adminCMSC100',
                'email'             =>'adminCMSC100@admin.admin',
                'password'          =>Hash::make('adminCMSC100'),
                'type'              =>'admin',
                'employeeNumber'    =>'INFINITY',
                'room'              =>'C-POWER',
                'academicPosition'  =>'ADMINISTRATOR',
                'groups'            =>URL::to('public/JSONcontents/accounts/groups/ADMIN_groups.json'),
                'messages'          =>URL::to('public/JSONcontents/accounts/messages/ADMIN_message.json'),


                'studentNumber'     =>'INFINITY'
            ]
        );
        createUserJsonFile("ADMIN");

        function createGroupJsonFile($name){
            // JSON file creator
            $group_classList = array(
                "userName"          => NULL,
                "studentNumber"     => NULL
            );

            $group_posts = array(
                "postBy"            => NULL,
                "dateOfPost"        => NULL,
                "postTitle"         => NULL,
                "postContent"       => NULL,
                "comments"          => array(
                    "commentBy"     => NULL,
                    "date"          => NULL,
                    "content"       => NULL
                )
            );

            File::put('public/JSONcontents/groups/classList/'.$name.'_classList.json', json_encode($group_classList));
            File::put('public/JSONcontents/groups/posts/'.$name.'_posts.json', json_encode($group_posts));
        }

        Group::create(
            [
                'courseTitle'   =>'CMSC170',
                'classSize'     =>'100',
                'section'       =>'CD-1L',
                'accessCode'    =>'MK1mk5n321KJkj',
                'classList'     =>URL::to('public/JSONcontents/groups/classList/CMSC170_classList.json'),
                'posts'         =>URL::to('public/JSONcontents/groups/posts/CMSC170_posts.json')
            ]
        );
        createGroupJsonFile("CMCS170");

        Group::create(
            [
                'courseTitle'   =>'CMSC56',
                'classSize'     =>'100',
                'section'       =>'X-7L',
                'accessCode'    =>'MLI5Omk15mk1N1kN32k',
                'classList'     =>URL::to('public/JSONcontents/groups/classList/CMSC56_classList.json'),
                'posts'         =>URL::to('public/JSONcontents/groups/posts/CMSC56_posts.json')
            ]
        );
        createGroupJsonFile("CMSC56");

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