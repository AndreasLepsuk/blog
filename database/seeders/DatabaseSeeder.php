<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::truncate();
//        Post::truncate();
//        Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);
        
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);


//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//          'slug' => 'work'
//      ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-first-post',
//           'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus nibh urna, a vulputate leo consectetur in. Donec nisi felis, tristique commodo erat in, sollicitudin condimentum erat. Vivamus viverra mollis ullamcorper. Pellentesque tristique quam quis nunc pellentesque feugiat. Nullam et pretium tortor, sit amet suscipit metus. Sed auctor tellus ut enim varius feugiat vel et ante. Nam in lacinia est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam ligula dolor, tempus quis accumsan non, mattis vel mi. Mauris efficitur quis ante nec gravida. Maecenas nec lacus urna. Ut maximus ultrices nunc, sed facilisis quam facilisis nec. Donec at elit sollicitudin, sollicitudin mauris pretium, porttitor metus. Morbi ut mauris nisl. Sed vitae justo rhoncus, euismod libero quis, gravida mauris. Vivamus dolor urna, suscipit eu finibus a, mollis ac nulla.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus nibh urna, a vulputate leo consectetur in. Donec nisi felis, tristique commodo erat in, sollicitudin condimentum erat. Vivamus viverra mollis ullamcorper. Pellentesque tristique quam quis nunc pellentesque feugiat. Nullam et pretium tortor, sit amet suscipit metus. Sed auctor tellus ut enim varius feugiat vel et ante. Nam in lacinia est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam ligula dolor, tempus quis accumsan non, mattis vel mi. Mauris efficitur quis ante nec gravida. Maecenas nec lacus urna. Ut maximus ultrices nunc, sed facilisis quam facilisis nec. Donec at elit sollicitudin, sollicitudin mauris pretium, porttitor metus. Morbi ut mauris nisl. Sed vitae justo rhoncus, euismod libero quis, gravida mauris. Vivamus dolor urna, suscipit eu finibus a, mollis ac nulla.</p>'
//        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
