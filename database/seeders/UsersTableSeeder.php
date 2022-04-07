<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('user_infos')->truncate();
        $users = [
                    [
                        'user' => [
                                'id' => '1',
                                'name' => 'Admin1',
                                'email' => 'khoa1@gmail.com',
                                'password' => bcrypt('123456')
                            ],
                    
                        'info' =>  [
                                    'address' => 'Hanoi',
                                    'phone' => '091294214'
                                ]
                        ],
                       [ 
                        'user'=>  [
                                    'id' => '2',
                                    'name' => 'Admin2',
                                    'email' => 'khoa2@gmail.com',
                                    'password' => bcrypt('123456')
                                    ],
                        'info'=>[
                                    'address' => 'Ho Chi Minh',
                                    'phone' => '091290114'
                                ]
                        ],
                        [
                        'user' =>   [
                                        'id' => '3',
                                        'name' => 'Admin3',
                                        'email' => 'khoa3@gmail.com',
                                        'password' => bcrypt('123456')
                                    ],
                        'info' => [
                                    'address' => 'Da Nang',
                                    'phone' => '09141214'
                                    ]
                        ]
        ];
        foreach($users as $user)
        {
            $user_id = DB::table('users')->insertGetId($user['user']);
            $user['info']['user_id'] = $user_id;
            DB::table('user_infos')->insert($user['info']);
        }
    }
}
