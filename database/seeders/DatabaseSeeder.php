<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CatBreedSeeder::class,
            DogBreedSeeder::class,
            HamsterBreedSeeder::class,
            ParkietBreedSeeder::class,
            
            UserStatusSeeder::class,
            PetStatusSeeder::class,
            UserRolesSeeder::class,
            UserSeeder::class,
            PetsSeeder::class,
            SittersSeeder::class,
            
            SitterRequestStatusSeeder::class,
            SitterRequestsSeeder::class,
            //SitterReviewSeeder::class,
        ]);
    }
}
