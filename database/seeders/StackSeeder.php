<?php

namespace Database\Seeders;

use App\Models\Capability;
use App\Models\Stack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stack::factory(5)->create()->each(fn ($stack) => [
            Capability::factory(rand(5,9))->create([
                'stack_id' => $stack->id,
            ])
        ]);
    }
}
