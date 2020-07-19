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
        //
        DB::table('users')->insert([
            ['username' => 'ryo','mail' => 'ogar051804@gmail.com','password' => 'Jyu2148Ryo'],
        ]);
        
    }
}
