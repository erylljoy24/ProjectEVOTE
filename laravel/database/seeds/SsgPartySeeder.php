<?php

use Illuminate\Database\Seeder;

class SsgPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ssg_parties')->delete();
        $courses = [
            [
                'party_name' => 'wan plas wan',
                'propaganda' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mollis in erat sed aliquam. Maecenas feugiat lectus velit, suscipit sodales orci sodales vel. Curabitur bibendum urna eu euismod placerat. Etiam ipsum mi, tristique a tristique sit amet, convallis at diam. Nulla sed libero ut ligula consectetur auctor sit amet sit amet dui. Ut vel felis quis sem euismod ornare pulvinar et libero. Ut nisi odio, iaculis in laoreet in, volutpat eget purus. Donec ut dui mi. Ut ac dignissim mauris. Mauris non tempus urna.

Praesent blandit ligula vel congue vehicula. Duis varius sagittis auctor. Nam aliquet magna tellus, sed pellentesque nunc pretium at. Nam sapien ex, interdum eget ipsum quis, mattis iaculis leo. Duis faucibus dapibus gravida. Cras molestie nisi ex, in pretium massa porttitor molestie. In semper dapibus nisi, ut tempus est commodo eget. Praesent in tellus eu purus porttitor varius. Donec sed semper neque.',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'party_name' => 'to plas to',
                'propaganda' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mollis in erat sed aliquam. Maecenas feugiat lectus velit, suscipit sodales orci sodales vel. Curabitur bibendum urna eu euismod placerat. Etiam ipsum mi, tristique a tristique sit amet, convallis at diam. Nulla sed libero ut ligula consectetur auctor sit amet sit amet dui. Ut vel felis quis sem euismod ornare pulvinar et libero. Ut nisi odio, iaculis in laoreet in, volutpat eget purus. Donec ut dui mi. Ut ac dignissim mauris. Mauris non tempus urna.

Praesent blandit ligula vel congue vehicula. Duis varius sagittis auctor. Nam aliquet magna tellus, sed pellentesque nunc pretium at. Nam sapien ex, interdum eget ipsum quis, mattis iaculis leo. Duis faucibus dapibus gravida. Cras molestie nisi ex, in pretium massa porttitor molestie. In semper dapibus nisi, ut tempus est commodo eget. Praesent in tellus eu purus porttitor varius. Donec sed semper neque.',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        DB::table('ssg_parties')->insert($courses);
    }
}
