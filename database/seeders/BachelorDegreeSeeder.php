<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BachelorDegree;

class BachelorDegreeSeeder extends Seeder
{
    public function run()
    {
        $degreesData = [
            ['degree_name' => 'Bachelor of Arts', 'college_id' => 1],
            ['degree_name' => 'Bachelor of Science', 'college_id' => 1],
            // Add more degree data as needed
        ];

        BachelorDegree::insert($degreesData);
    }
}