<?php

namespace Database\Seeders;

use App\Models\CategoryCourse;
use Illuminate\Database\Seeder;

class CategoryCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryCourse::factory(6)->create();
    }
}
