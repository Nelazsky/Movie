<?php

use App\Student;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->generateStudents();
    }

    /**
     *
     */
    private function generateStudents()
    {
        $factory = Factory::create();
        $data = [];

        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'name' => $factory->name,
                'birthday' => Carbon::create(199 . rand(0, 9), rand(1, 12), rand(1, 28)),
                'gender' => (rand(0, 1)) ? 'm' : 'w',
            ];
        }

        Student::insert($data);




        \App\GroupStudent::insert($data);
    }

}
