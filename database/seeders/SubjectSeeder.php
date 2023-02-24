<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\UserSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $subject=Subject::create([
        //     'name' => 'laravel-vue',
        // ]);
        // UserSubject::create([
        //     'subject_id' => $subject->id,
        //     'user_id' => 1,
        // ]);
        $subject1=Subject::create([
            'name' => 'spring-angular',
        ]);
        UserSubject::create([
            'subject_id' => $subject1->id,
            'user_id' => 1,
        ]);
        $subject2=Subject::create([
            'name' => 'node-react',
        ]);
        UserSubject::create([
            'subject_id' => $subject2->id,
            'user_id' => 1,
        ]);
    }
}
