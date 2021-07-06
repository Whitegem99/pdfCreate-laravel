<?php

use Illuminate\Database\Seeder;

class profilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'name' => "Ibra Damir",
            'sex' => "male",
            'age' => "26",
            'office_name' => "Claremont Dental surgery",
            'address' => "Harry's Place Lakes Road RMB 4600",
            'email' => "office@offices.com",
            'phone' => "+3816333333",
            'profile_image' => "1.png"
        ]);

    }
}
