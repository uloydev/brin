<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IdentityType;

class IdentityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $identityTypes = [
            'ktp',
            'sim',
            'kartu pelajar'
        ];
        foreach ($identityTypes as $type) {
            IdentityType::create(['name' => $type]);
        }
    }
}
