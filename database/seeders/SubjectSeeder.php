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
        $subject=Subject::create([
            'name' => 'laravel-vue',
        ]);
        UserSubject::create([
            'subject_id' => $subject->id,
            'user_id' => 1,
        ]);
    }
}
