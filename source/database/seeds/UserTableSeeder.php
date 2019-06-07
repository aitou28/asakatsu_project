<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert(
          [
            [
              'id' => 1,
              'name' => '山田太郎',
              'email' => 'abc@example.com',
              'password' => 'password',
              'created_at' => '2018-05-01 00:00:00',
            ],
            [
              'id' => 2,
              'name' => '山田花子',
              'email' => '123@example.com',
              'password' => 'password',
              'created_at' => '2018-05-01 00:00:00',
            ],
            [
              'id' => 3,
              'name' => '猫山ねこ',
              'email' => 'nekoyama@example.com',
              'password' => 'password',
              'created_at' => '2018-05-01 00:00:00',
            ],
            [
              'id' => 4,
              'name' => '犬居いぬ',
              'email' => 'inui@example.com',
              'password' => 'password',
              'created_at' => '2018-05-01 00:00:00',
            ],
            [
              'id' => 5,
              'name' => 'テスト次郎',
              'email' => 'testjiro@example.com',
              'password' => 'password',
              'created_at' => '2018-05-01 00:00:00',
            ],
          ]
        );
    }
}
