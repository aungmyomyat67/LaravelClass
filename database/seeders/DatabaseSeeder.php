<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

<<<<<<< Updated upstream
use App\Models\Movie;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(10)->create();
        
        
         
         Movie::factory(10)->create();
        
        
         Customer::factory(10)->create();
    }
}


=======
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create()->each(function ($user) {

          

            $user->posts()->createMany(Post::factory(2)->make()->toArray());

            foreach ($user->posts as $post) {
                $post->comments()->createMany(
                    Comment::factory(2)->make(['user_id' => $user->id])->toArray()
                );
            }

            $randomPosts = Post::inRandomOrder()->take(2)->pluck('id');
            $user->likedPosts()->attach($randomPosts);
        });
    }
}
>>>>>>> Stashed changes
