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
        DB::table('library')->delete();

        File::cleanDirectory('public/JSONcontents/accounts/groups');
        File::cleanDirectory('public/JSONcontents/accounts/messages');
        File::cleanDirectory('public/JSONcontents/groups/classList');
        File::cleanDirectory('public/JSONcontents/groups/posts');

        function createUserJsonFile($name){
            // JSON file creator
            $user_groups = array(
                "groups"        => array()
            );

            $user_messages = [array(
                "sentFrom"          => "Admin",
                "dateOfMessage"     => "Forever 21, 2015",
                "messageTitle"      => "Congratulations!",
                "messageContent"    => "Congratulations user! You successfully created your first account."
            )];

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
            $group_classList = [];

            $group_posts = [];

//            $group_classList = array(
//                "userName"          => NULL,
//                "studentNumber"     => NULL
//            );
//
//            $group_posts = [array(
//                "postBy"            => NULL,
//                "dateOfPost"        => NULL,
//                "postTitle"         => NULL,
//                "postContent"       => NULL,
//                "comments"          => array(
//                    "commentBy"     => NULL,
//                    "date"          => NULL,
//                    "content"       => NULL
//                )
//            )];

            File::put('public/JSONcontents/groups/classList/'.$name.'_classList.json', json_encode($group_classList));
            File::put('public/JSONcontents/groups/posts/'.$name.'_posts.json', json_encode($group_posts));
        }

        Group::create(
            [
                'courseTitle'   =>'CMSC170',
                'classSize'     =>'100',
                'section'       =>'UV-2L',
                'accessCode'    =>'MK1mk5n321KJkj',
                'classList'     =>URL::to('public/JSONcontents/groups/classList/CMSC170_classList.json'),
                'posts'         =>URL::to('public/JSONcontents/groups/posts/CMSC170_posts.json')
            ]
        );
        createGroupJsonFile("CMSC170UV-2L");

        Group::create(
            [
                'courseTitle'   =>'CMSC56',
                'classSize'     =>'100',
                'section'       =>'X-2L',
                'accessCode'    =>'MLI5Omk15mk1N1kN32k',
                'classList'     =>URL::to('public/JSONcontents/groups/classList/CMSC56_classList.json'),
                'posts'         =>URL::to('public/JSONcontents/groups/posts/CMSC56_posts.json')
            ]
        );
        createGroupJsonFile("CMSC56X-2L");

//        $query = "INSERT INTO `library` (`id`, `year`, `author`, `lastName`, `title`, `url`) VALUES
//            (1, 2008, 'Ani, Darla Grace B.', 'Ani', 'An Interface for CLustered Monitoring of Arbitrary Number of Remote Desktops', '/res/SP/SP2008/SP_2008_Ani.jpg'),
//            (2, 2008, 'Cortejo, John Rommel  S.', 'Cortejo', 'A Search Aggregator and Custom Search Generator', '/res/SP/SP2008/SP_2008_Cortejo.jpg'),
//            (3, 2008, 'Flores, Geraldine M.', 'Flores', 'License Plate Visual Character Recognition', '/res/SP/SP2008/SP_2008_Flores.jpg'),
//            (4, 2008, 'Gerilla, Maycor G.', 'Gerilla', 'Methods for Enhancing Scanned X-ray Images', '/res/SP/SP2008/SP_2008_Gerilla.jpg'),
//            (5, 2008, 'Hernandez, Michael Vincent T.', 'Hernandez', 'Automated Print Quality Analysis', '/res/SP/SP2008/SP_2008_Hernandez.jpg'),
//            (6, 2008, 'Init, Sandy L.', 'Init', 'Food Ordering System Through Bluetooth Wireless Technology', '/res/SP/SP2008/SP_2008_Init.jpg'),
//            (7, 2008, 'Lavilla, Erickson P.', 'Lavilla', 'Character Segmentation in License Plate Images', '/res/SP/SP2008/SP_2008_Lavilla.jpg'),
//            (8, 2008, 'Lopera, Diana O.', 'Lopera', 'Design and Detection of Document Landmark', '/res/SP/SP2008/SP_2008_Lopera.jpg'),
//            (9, 2008, 'Montevirgen, Bea Anjoli H.', 'Montevirgen', 'Face Detection for Person Counting', '/res/SP/SP2008/SP_2008_Montevirgen.jpg'),
//            (10, 2008, 'Quiliza, Arvin A.', 'Quizila', 'Activity Maps and Hotspots', '/res/SP/SP2008/SP_2008_Quiliza.jpg'),
//            (11, 2009, 'Danila, Lailanie R.', 'Danila', 'Object Isolation and Tracking Using Iterative Outlier Removal', '/res/SP/SP2009/SP_2009_Danila.jpg'),
//            (12, 2009, 'del Rosario, Andrel', 'del Rosario', 'Event Notification Using SMS, MMS, and Email', '/res/SP/SP2009/SP_2009_DelRosario.jpg'),
//            (13, 2009, 'Elvina, Camille May O.', 'Elvina', 'VP: A Piano Simulator and Note Mapper Using Real-Time Color-Based Event Detection', '/res/SP/SP2009/SP_2009_Elvina.jpg'),
//            (14, 2009, 'Roxas, Maggie Mae R.', 'Roxas', 'Interval Analysis and Pitch Classification of Monophonic and Two-Tone Polyphone Wav Files through Frequency Domain-Based Cepstrum Derivation', '/res/SP/SP2009/SP_2009_Roxas.jpg'),
//            (15, 2009, 'Santiago, Roseller V.', 'Santiago', 'Identification, Attendance Checking, and Health Service Record as Functions of UPLB ID Using Contactless Smart Card Technology', '/res/SP/SP2009/SP_2009_Santiago.jpg'),
//            (16, 2009, 'Sintos, Jan Camille B.', 'Sintos', 'MIDIMaker: A Music XML to MIDI Converter', '/res/SP/SP2009/SP_2009_Sintos.jpg'),
//            (17, 2009, 'Sullano, Norita G.', 'Sullano', 'On-Alert: Real-Time Fire Detection Using Color and Motion Analysis in Image Sequence', '/res/SP/SP2009/SP_2009_Sullano.jpg'),
//            (18, 2009, 'Tablizo, Roemer Jay E.', 'Tablizo', 'Particle Swarm Optimization Using Jumps: An Approach to Constrained Statistical Matching', '/res/SP/SP2009/SP_2009_Tablizo.jpg'),
//            (19, 2009, 'Tabuan, Fatima', 'Tabuan', 'Constructing the Filipino Folksonomies from the Web', '/res/SP/SP2009/SP_2009_Tabuan.jpg'),
//            (20, 2009, 'Wong, Kimson L.', 'Wong', 'Black Napalm: Online Social Advertising Network Service', '/res/SP/SP2009/SP_2009_Wong.jpg'),
//            (21, 2010, 'de Gracia, Ronald Eric A.', 'de Gracia', 'MobileNavigator: A Mobile Geographical Information System', '/res/SP/SP2010/SP_2010_DeGracia.jpg'),
//            (22, 2010, 'Gracilla, Rey Kristoffer D.', 'Gracilla', 'Additive White Noise Suppression using LMS-FIR Adaptive Filtering Algorithm', '/res/SP/SP2010/SP_2010_Gracilla.jpg'),
//            (23, 2010, 'Jimenez, Franz Alain M.', 'Jimenez', 'Face Recognition using Eigenfaces by Principal Component Analysis', '/res/SP/SP2010/SP_2010_Jimenez.jpg'),
//            (24, 2010, 'Marquez, Melissa Rhona L.', 'Marquez', 'Daylight Speed Estimation', '/res/SP/SP2010/SP_2010_Marquez.jpg'),
//            (25, 2010, 'Mayor, Bryan A.', 'Mayor', 'Voice Transformer System', '/res/SP/SP2010/SP_2010_Mayor.jpg'),
//            (26, 2010, 'Medina, Edfer C.', 'Medina', 'Automatic Lane Segmentation and Enhancement of Gel Electrophoresis Images', '/res/SP/SP2010/SP_2010_Medina.jpg'),
//            (27, 2010, 'Mopia, Karl Moses B.', 'Mopia', 'Air Pollution Monitoring Using Scence Contrast Analysis', '/res/SP/SP2010/SP_2010_Mopia.jpg'),
//            (28, 2010, 'Paje, Francis Michael F.', 'Paje', 'Image Proecessing Applied in Measuring Rice-Leaf Interveinal Characteristics', '/res/SP/SP2010/SP_2010_Paje.jpg'),
//            (29, 2010, 'Pasahol, Camille S.', 'Pasahol', 'Chromosome Detection and Extraction Using Image Processing', '/res/SP/SP2010/SP_2010_Pasahol.jpg'),
//            (30, 2010, 'Ya-on, Winifredo N. Jr.', 'Ya-on', 'UPLB Systemone V2: College Secretary, Instructor, Modules Module', '/res/SP/SP2010/SP_2010_YaOn.jpg'),
//            (31, 2011, 'Aguirre, Donna Mae S.', 'Aguirre', 'Jewelry Mirror: An Augmented Reality Application', '/res/SP/SP2011/SP_2011_Aguirre.jpg'),
//            (32, 2011, 'Ajes, Erika Thea H.', 'Ajes', '3D Modeling from Scanned Foot Images Using Depth-from-Shading', '/res/SP/SP2011/SP_2011_Ajes.jpg'),
//            (33, 2011, 'Ansay, Eatherly Ciara, A.', 'Ansay', 'Real-Time Detection of Bubble in Water Using Digital Image Processing', '/res/SP/SP2011/SP_2011_Ansay.jpg'),
//            (34, 2011, 'Aquitana, Lea Anne E.', 'Aquitana', 'Enhancement of AUTO-SET: Automatic Checking of Student Evaluation of Teachers Forms', '/res/SP/SP2011/SP_2011_Aquitana.jpg'),
//            (35, 2011, 'Arnejo, Zenith O. and Perez, Jessa G.', 'Arnejo, Perez', 'Smoke-belching Detection on Vehicles: Color and Motion Based Approach', '/res/SP/SP2011/SP_2011_Arnejo_Perez.jpg'),
//            (36, 2011, 'Ayco, Ramon P. Jr.', 'Ayco', 'Implementation of Various Loop Scheduling Alorithms on Desktop Grids', '/res/SP/SP2011/SP_2011_Ayco.jpg'),
//            (37, 2011, 'Banacia, Regelyn T. and Belaguin, Chryss Ann A.', 'Banacia, Belaguin', 'Billing System: An Accounting Solution for the Private Cloud with Eucalyptus', '/res/SP/SP2011/SP_2011_Banacia_Belaguin.jpg'),
//            (38, 2011, 'Bien, Victor E. and Ibay, John Paul M.', 'Bien, Ibay', 'Project Monitoring System for Water Service Provider Company', '/res/SP/SP2011/SP_2011_Bien_Ibay.jpg'),
//            (39, 2011, 'Bonza, Marjorie B. and Quitado, Krizelle Ane C.', 'Bonza, Quitado', 'Color Normalization and Temporal Greenness Analysis of Rice Plant Images in CO2 Chamber', '/res/SP/SP2011/SP_2011_Bonza_Quitadio.jpg'),
//            (40, 2011, 'Broce, Gladys P.', 'Broce', 'Non-Intrusive Eye Detection Clasification and Blink Detection using Video Analysis', '/res/SP/SP2011/SP_2011_Broce.jpg'),
//            (41, 2012, 'Abella, Paula Bianca S.', 'Abella', 'Vehicle Speed Estimation for Daylight and Night Time Conditions', '/res/SP/SP2012/SP_2012_Abella.jpg'),
//            (42, 2012, 'Aguirre, Mary Grace Angelie G. and Juanillas, Venice Margarette B.', 'Aguirre, Juanillas', '3D Building Modeling and Navigation Using WebGL and HTML5', '/res/SP/SP2012/SP_2012_Aguirre_Juanillas.jpg'),
//            (43, 2012, 'Albacea, John Patrick V.J.', 'Albacea', 'Automated Scene Comparison for Security Applications Using Image Processing', '/res/SP/SP2012/SP_2012_Albacea.jpg'),
//            (44, 2012, 'Baltazar, Sarah Gianelle C.', 'Baltazar', 'Classifying and Pairing of Human Chromosomes using Digital Image', '/res/SP/SP2012/SP_2012_Baltazar.jpg'),
//            (45, 2012, 'Borja, Shiela Kathleen L. and Tirazona, Ludwig Johann', 'Borja, Tirazona', 'SQUIGAS: A Web-based Geographic Information System for the UPLB Network', '/res/SP/SP2012/SP_2012_Borja_Tirazona.jpg'),
//            (46, 2012, 'Dano, Janelle Stephanie D.', 'Dano', 'Examination apper GRading using Optical Mark Recognition', '/res/SP/SP2012/SP_2012_Dano.jpg'),
//            (47, 2012, 'Flores, Argem Gerald R.', 'Flores', 'MicroWebPH: An Online Repository, Management and Retrieval System for Information on Microogranisms', '/res/SP/SP2012/SP_2012_Flores.jpg'),
//            (48, 2012, 'Funtanilla, Basil Z.', 'Funtanilla', 'Offline Signature Verification using Mahalanobis Distance of Keypoints', '/res/SP/SP2012/SP_2012_Funtanilla.jpg'),
//            (49, 2012, 'Hernandez, Patrick T.', 'Hernandez', 'Pollen Classification using Discrete Wavelet Transform and Haralick Texure Feature', '/res/SP/SP2012/SP_2012_Hernandez.jpg'),
//            (50, 2012, 'Aguirre, Mary Grace Angelie G. and Juanillas, Venice Margarette B.', 'Aguirre, Juanillas', '3D Building Modeling and Navigation Using WebGL and HTML5', '/res/SP/SP2012/SP_2012_Aguirre_Juanillas.jpg'),
//            (51, 2013, 'Alastoy, June Lander U. and Fornoles, Florife B.', 'Alastoy, Fornoles', 'WIPS: Web-Based Inventory and Procurement System for PCAARRD-DOST (Procurement Module)', '/res/SP/SP2013/SP_2013_Alastoy_Fornoles.jpg'),
//            (52, 2013, 'Albis, Melani T.', 'Albis', 'Facial Emotion Recognition using Facial Feature Tracking and Support Vector Machine', '/res/SP/SP2013/SP_2013_Albis.jpg'),
//            (53, 2013, 'Andora, Andrew P. and Basa, Marianne Camille D.', 'Andora, Basa', 'Time-lapsed Scene Comparison Camera Application for Android Device with Region of Focus Selection', '/res/SP/SP2013/SP_2013_Andora_Basa.jpg'),
//            (54, 2013, 'Antazo, Francis Xavier S. and Magpoc, Lawrence C.', 'Antazo, Magpoc', 'Facial Mark for Face Authentication in Android', '/res/SP/SP2013/SP_2013_Antazo_Magpoc.jpg'),
//            (55, 2013, 'Biton, Adrian John A.', 'Biton', 'Automated Karyotyping using Digital Image Analysis', '/res/SP/SP2013/SP_2013_Biton.jpg'),
//            (56, 2013, 'Caabay, Michael John P.', 'Caabay', 'Location Informal Settlements Near Waterway Areas Using Remote Sensing', '/res/SP/SP2013/SP_2013_Caabay.jpg'),
//            (57, 2013, 'Clarino, Marc D.', 'Clarino', '3D Seasonal Beehive Management Simulation', '/res/SP/SP2013/SP_2013_Clarino.jpg'),
//            (58, 2013, 'Queliste, Miyah D.', 'Queliste', 'A Web Application for Flood Simulation and Visualization Using the D8 Algorithm', '/res/SP/SP2013/SP_2013_Queliste.jpg'),
//            (59, 2013, 'Rivera, Michael Angelo G.', 'Rivera', 'Automated Tracking and Counting of Bees Using Kalman Filter', '/res/SP/SP2013/SP_2013_Rivera.jpg'),
//            (60, 2013, 'Talegon, Mongilbert DS.', 'Talegon', 'An Interactive Tool for Gel Electrophoresis Analysis of DNA', '/res/SP/SP2013/SP_2013_Talegon.jpg'),
//            (61, 2014, 'Bacalzo, Dionisio N. III', 'Bacalzo', '3D Virtual Classroom Environment of the UPLB Main Library Using OpenWonderland', '/res/SP/SP2014/SP_2014_Bacalzo.jpg'),
//            (62, 2014, 'Bragais, Luis Julius G.', 'Bragais', 'Rice Crop Nitrogen Assessment Using Near Infrared Reflectance of Images from Unmanned Aerial Vehicles', '/res/SP/SP2014/SP_2014_Bragais.jpg'),
//            (63, 2014, 'Castro, Anyzza DC.', 'Castro', 'Spelunker: An Application for 2D Cave Map and 3D Station Map Generation Using Passage Modeling', '/res/SP/SP2014/SP_2014_Castro.jpg'),
//            (64, 2014, 'Cortez, Krystel Arriane A.', 'Cortez', 'Identification of Philippine Algae using Naive Bayes Algorithm', '/res/SP/SP2014/SP_2014_Cortez.jpg'),
//            (65, 2014, 'Deliva, Fatima G.', 'Deliva', 'Applying Usability Attribute Evaluation to Open Journal Systems', '/res/SP/SP2014/SP_2014_Deliva.jpg'),
//            (66, 2014, 'Ditan, Carlo B.', 'Ditan', 'CADence: An Intranet-based CAD Production Management System for Architectural and Engineering Knowledge-based Export Industries', '/res/SP/SP2014/SP_2014_Ditan.jpg'),
//            (67, 2014, 'Lorenzo, Mark Albert G.', 'Lorenzo', 'LagBus - Laguna Bus Application', '/res/SP/SP2014/SP_2014_Lorenzo.jpg'),
//            (68, 2014, 'Magsino, Edward B.', 'Magsino', 'OpenLGU Finance and Accounting General Ledger', '/res/SP/SP2014/SP_2014_Magsino.jpg'),
//            (69, 2014, 'Nuestro, Briar Rose B.', 'Nuestro', 'Planning and Development Information System: A Module for the OpenLgu Project', '/res/SP/SP2014/SP_2014_Nuestro.jpg'),
//            (70, 2014, 'Palomo, Rose Shane R.', 'Palomo', 'A Simulation fo Student Movement Under Normal Conditions in UPLB Physical Sciences Building', '/res/SP/SP2014/SP_2014_Palomo.jpg')";
//
//        DB::query($query);

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