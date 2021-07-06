<?php

use Illuminate\Database\Seeder;

class diagnoses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diagnoses')->insert(array(
            array(
                'visit_data' => "02/04/19",
                'diagnosis' => "diagnosis1",
                'skeletal' => "skeletal1",
                'dental' => "dental1",
            ),
            array(
                'visit_data' => "02/04/19",
                'diagnosis' => "diagnosis2",
                'skeletal' => "skeletal2",
                'dental' => "dental2",
            ),
            array(
                'visit_data' => "02/04/19",
                'diagnosis' => "diagnosis3",
                'skeletal' => "skeletal3",
                'dental' => "dental3",
            ),
            array(
                'visit_data' => "02/04/19",
                'diagnosis' => "diagnosis4",
                'skeletal' => "skeletal4",
                'dental' => "dental4",
            ),
        ));

    }
}
