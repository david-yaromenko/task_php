<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployeeModel;
use App\Models\JobTitle;

class JobTitleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobTitle::create(['job_title' => 'Головний спеціаліст']);
        JobTitle::create(['job_title' => 'Молодший спеціаліст']);
        JobTitle::create(['job_title' => 'Старший інспектор']);
        JobTitle::create(['job_title' => 'Молодший Інспектор']);
    }
}
