<?php

namespace Database\Seeders;

use App\Models\ProposalCategory;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dummyPassword = bcrypt('password');
        
        User::factory(1)->state([
            'email' => 'reviewer@test.com',
            'password' => $dummyPassword,
            'is_reviewer' => true,
        ])->create();

        User::factory(1)->state([
            'email' => 'user@test.com',
            'password' => $dummyPassword,
        ])->create();

        User::factory(9)->create();

        $this->call([
            IdentityTypeSeeder::class,
            ProposalCategorySeeder::class,
            ProposalSeeder::class,
        ]);
        
    }
}
