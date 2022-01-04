<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProposalCategory;

class ProposalCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proposalCategories = [
            'teknologi',
            'lingkungan',
            'sosial budaya',
        ];
        foreach ($proposalCategories as $category) {
            ProposalCategory::create(['name' => $category]);
        }
    }
}
