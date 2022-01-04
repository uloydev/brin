<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proposal;
use App\Models\ProposalCategory;
use App\Models\User;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ProposalCategory::all();

        foreach ($categories as $category ) {
            Proposal::factory(rand(5, 15))->state([
                'proposal_category_id' => $category->id,
                'user_id' => User::inRandomOrder()->first()->id,
            ])->create();
        }
    }
}
