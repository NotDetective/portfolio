<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Experience;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'user@app.com',
        ]);

        Experience::factory()->create([
           'start_date' => Carbon::now()->subDay( rand(20,70) ),
           'end_date' => null
        ]);

        $this->call([
            StackSeeder::class,
            ExperienceSeeder::class,
            ProjectSeeder::class,
        ]);
    }

}
