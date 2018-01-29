<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $users = [
            [
                'name' => 'samplekim',
                'email' => 'kimmy@test.com',
                'password' => Hash::make('password'),
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('admins')->insert($users);
    }
}
