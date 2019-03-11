<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function index() {
      $grades = \App\Course::all();
//      $grades = CoursesController::grades();

        return view('courses/index')->withCourseResults($grades);
    }


    public static function grades() {
        $courseResults = [
            [
                'period'=> 1,
                'header'=> true,
                'course' => 'Opleidings- en beroepsoriëntatie',
                'grade' => 5.5,
                'ec' => '2.5/2.5'
            ],
            [
                'period'=> 1,
                'header'=> false,
                'course' => 'Computer Science Basics',
                'grade' => 7.7,
                'ec' => '7.5/7.5'
            ],
            [
                'period'=> 1,
                'header'=> false,
                'course' => 'Programming Basics',
                'grade' => 9,
                'ec' => '5.0/5.0'
            ],
            [
                'period'=> 2,
                'header'=> true,
                'course' => 'Object Oriented Programming',
                'grade' => 8.2,
                'ec' => '10.0/10.0'
            ],
            [
                'period'=> 2,
                'header'=> false,
                'course' => 'Professional Skills 1',
                'grade' => 7.9,
                'ec' => '2.5/2.5'
            ],
            [
                'period'=> 2,
                'header'=> false,
                'course' => 'HZ Personality',
                'grade' => '',
                'ec' => '0/2.5'
            ],
            [
                'period'=> 2,
                'header'=> false,
                'course' => 'IT Personality',
                'grade' => '',
                'ec' => '0/2.5'
            ],
            [
                'period'=> 3,
                'header'=> true,
                'course' => 'Professional Skills 2',
                'grade' => '',
                'ec' => '0/2.5'
            ],
            [
                'period'=> 3,
                'header'=> false,
                'course' => 'Professionele Werkplek 1',
                'grade' => '',
                'ec' => '0/2.5'
            ],
            [
                'period'=> 3,
                'header'=> false,
                'course' => 'Framework Development 1',
                'grade' => '',
                'ec' => '0/5.0'
            ],
            [
                'period'=> 3,
                'header'=> false,
                'course' => 'Framework Project 1',
                'grade' => '',
                'ec' => '0/5.0'
            ],
            [
                'period'=> 4,
                'header'=> true,
                'course' => 'Professional Skills 3',
                'grade' => '',
                'ec' => '0/2.5'
            ],
            [
                'period'=> 4,
                'header'=> false,
                'course' => 'Framework Project 2',
                'grade' => '',
                'ec' => '0/5.0'
            ],
            [
                'period'=> 4,
                'header'=> false,
                'course' => 'Framework Development 2',
                'grade' => '',
                'ec' => '0/2.5'
            ],

        ];
        return($courseResults);
    }
}
