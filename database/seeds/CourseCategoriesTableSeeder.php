<?php

use Illuminate\Database\Seeder;
use App\CourseCategory;

class CourseCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_category = new CourseCategory();
        $course_category->course_category = 'Geotechnical Engineering';
        $course_category->save();

        $course_category = new CourseCategory();
        $course_category->course_category = 'Structural Engineering';
        $course_category->save();
    }
}
