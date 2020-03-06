<?php

use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Test User',
            'email' => 'user@example.com'
        ]);
        
        // create 50 random test users
            factory(User::class, 10)->create();
        
    }
}
