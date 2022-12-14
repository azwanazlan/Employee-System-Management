<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\ms_MY\Address;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'address'=>$this->faker->sentence(10),
            'date-of-birth' =>$this->faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y/m/d'),
            'hired-date'=>$this->faker->dateTimeBetween('1990-01-01', 'now')->format('Y/m/d'),
            'position'=>$this->faker->randomElement(['QA', 'finance' , 'Dev' , 'HR' , 'Admin']),
            'department'=>$this->faker->randomElement(['Development', 'Engineering' , 'Consultant'])
           // 'imageURL'=>$this->faker->imageUrl(640, 480, 'employees', true)
        ];



    }
}
