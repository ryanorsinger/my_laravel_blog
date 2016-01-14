<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        $user = new User();
        $user->username = 'admin';
        $user->email = 'info@codeup';
        $user->password = $_ENV['USER_PASS'];
        $user->save();
    }
}
