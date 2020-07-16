<?php

use App\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisons = [
            'Senior staff',
            'Junior staff',
            'CEO',
            'Founder',
            'Receptionist',
        ];

        foreach($divisons as $divison) {
            Division::create([
                'name' => $divison
            ]);
        }
    }
}
