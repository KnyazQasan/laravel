<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "team_member_name" => "Filankes",
            "team_member_duty" => "job",
            "team_member_about" => "Lorem ipsum dolor sit",

        ];
    }
}
