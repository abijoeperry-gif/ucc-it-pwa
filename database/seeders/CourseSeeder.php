<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'code' => 'ITT101',
                'name' => 'Computer Information Systems',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Fundamental concepts of hardware, software, and information systems in modern organizations.'
            ],
            [
                'code' => 'ITT103',
                'name' => 'Programming Techniques',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Logic formulation, algorithm development, flowcharting, pseudocode, and procedural programming.'
            ],
            [
                'code' => 'ITT200',
                'name' => 'Object Oriented Programming using C++',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Object-oriented programming concepts: classes, inheritance, encapsulation, and polymorphism.'
            ],
            [
                'code' => 'ITT201',
                'name' => 'Data Communications & Networks I',
                'credits' => 3,
                'prerequisites' => 'ITT101',
                'description' => 'OSI reference model, TCP/IP protocol suite, IP addressing, routing, and physical networking media.'
            ],
            [
                'code' => 'ITT208',
                'name' => 'Internet Authoring I',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Front-end web design and development utilizing semantic HTML5, CSS3, and JavaScript.'
            ],
            [
                'code' => 'ITT210',
                'name' => 'Database Management Systems',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Relational database models, entity-relationship diagrams, normalization, and structured query language (SQL).'
            ],
            [
                'code' => 'ITT307',
                'name' => 'Internet Authoring II',
                'credits' => 3,
                'prerequisites' => 'ITT208',
                'description' => 'Modern server-side development, dynamic web applications, backend frameworks, and progressive web apps.'
            ],
            [
                'code' => 'ITT420',
                'name' => 'Mobile Application Development',
                'credits' => 3,
                'prerequisites' => 'ITT200',
                'description' => 'Mobile architecture, user interfaces, persistent local storage, API integration, and app deployment.'
            ],
            [
                'code' => 'ITT116',
                'name' => 'Computer Essentials & Troubleshooting I',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Hardware maintenance, system components, basic OS troubleshooting, and peripheral device setup.'
            ],
            [
                'code' => 'ITT216',
                'name' => 'Computer Essentials & Troubleshooting II',
                'credits' => 3,
                'prerequisites' => 'ITT116',
                'description' => 'Advanced diagnostics, operational procedures, security configurations, and preventive maintenance.'
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
