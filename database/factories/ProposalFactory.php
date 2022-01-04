<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProposalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'instance' => $this->faker->word(),
            'title' => 'Proposal' . $this->faker->sentence(),
            'proposal_category_id' => 1,
            'user_id' => 1,
            'research_date' => $this->faker->date(),
            'file' => 'file_dummy',
        ];
    }
}
