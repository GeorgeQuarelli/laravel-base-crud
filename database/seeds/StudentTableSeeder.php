<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_student = new Student();
            $new_student->name = $faker->name;
            $new_student->lastname = $faker->lastname;
            $new_student->matricola = $faker->randomNumber(6);
            $new_student->email = $faker->email;
            $new_student->save();
        }

    }
}
