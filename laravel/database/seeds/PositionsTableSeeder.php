<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('positions')->delete();
        $courses = [
            [
                'position_name' => 'President',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'Vice-President Internal',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'Vice-President External',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'Secretary',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'Asst. Secretary',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'Treasurer',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'Auditor',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'PIO 1',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'PIO 2',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => 'Property Custodian',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => '2nd Yr Representative',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => '3rd Yr Representative',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'position_name' => '4rth Yr Representative',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('positions')->insert($courses);
    }
}
