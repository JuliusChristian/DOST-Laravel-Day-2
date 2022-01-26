<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function welcome(){
        return view('students.welcome');
    }

    public function subjects() {
        $subjects_data = [
            [
                'subject_id' => '1',
                'subject_name' => 'Programming',
                'daily_schedule' => 'Monday',
                'time' => '8:00 AM',
                'room' => 'Computer Laboratory 1',
                'instructor' => 'Mr. Boots'
            ],
            [
                'subject_id' => '2',
                'subject_name' => 'Networking',
                'daily_schedule' => 'Tuesday',
                'time' => '8:00 AM',
                'room' => 'Computer Laboratory 1',
                'instructor' => 'Mr. Yumul'
            ],
            [
                'subject_id' => '3',
                'subject_name' => 'Data Analytics',
                'daily_schedule' => 'Wednesday',
                'time' => '8:00 AM',
                'room' => 'Computer Laboratory 3',
                'instructor' => 'Mr. Rivera'
            ],
        ];

        return view('students.subjects', [
            'subjects' => $subjects_data
        ]);
    }

    public function profile() {
        $students_data = [
            [
                'students_id' => '1',
                'student_name' => 'Julius Christian Yumul',
                'student_avatar' => 'juliusyumul2031@email.com',
                'student_id' => '1',
                'course' => 'Information Technology',
                'birthdate' => 'June 23',
                'address' => 'Pampanga',
                'contact_information' => '09658569298'
            ],
            [
                'students_id' => '2',
                'student_name' => 'Michael Rivera',
                'student_avatar' => 'michael@email.com',
                'student_id' => '2',
                'course' => 'Information Technology',
                'birthdate' => 'November 01',
                'address' => 'Zambales',
                'contact_information' => '09123456789'
            ],
            [
                'students_id' => '3',
                'student_name' => 'Rhens Galang',
                'student_avatar' => 'rhens@email.com',
                'student_id' => '3',
                'course' => 'Information Technology',
                'birthdate' => 'February',
                'address' => 'Bulacan',
                'contact_information' => '09123456789'
            ]
        ];

        return view('students.profile', [
            'profile' => $students_data
        ]);
    }

    public function grades() {
        $grades_data = [
            [
                'grades_id' => '1',
                'subjects' => 'Programming',
                'midterm' => '98',
                'final_term' => '91',
                'overall_subject_grade' => 'samplegrades'
            ],
            [
                'grades_id' => '2',
                'subjects' => 'Networking',
                'midterm' => '91',
                'final_term' => '84',
                'overall_subject_grade' => 'samplegrades2'
            ],
            [
                'grades_id' => '3',
                'subjects' => 'Data Analytics',
                'midterm' => '85',
                'final_term' => '92',
                'overall_subject_grade' => 'samplegrades3'
            ]
        ];

        return view('students.grades', [
            'grades' => $grades_data
        ]);
    }

        
}