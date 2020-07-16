<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            'General Management',
            'Marketing Department',
            'Operations Department',
            'Finance Department',
            'Sales Department',
            'Human Resource Department',
            'Purchase Department'
        ];

        foreach($departments as $department) {
            Department::create([
                'name' => $department
            ]);
        }
        
    }
}
