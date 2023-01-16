<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
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
        User::factory(10)->create();
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'category-1'
        ]);

        Category::create([
            'name' => 'Bussiness',
            'slug' => 'category-2'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'category-3'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        // User::create([
        //     'name' => 'Jane Doe',
        //     'email' => 'jane@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        // Post::create([
        //     'title' => 'My Life post',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'my-life-post',
        //     'excerpt' => 'Quis velit tempor adipisicing quis Lorem deserunt voluptate est veniam. Esse mollit sint deserunt elit officia et ad eu cillum est culpa culpa velit occaecat. Pariatur in nostrud anim ad sint deserunt nostrud tempor et aute consectetur mollit.',
        //     'body' => '<p>Nostrud velit laboris ex sint ullamco nostrud nulla excepteur eu laborum pariatur minim. Culpa tempor ea reprehenderit sunt do esse id exercitation culpa eu officia non. Reprehenderit ex aliqua excepteur pariatur commodo aliquip sint minim aliquip culpa do ullamco commodo.</p><p>Ipsum consequat excepteur Lorem sint. Fugiat consequat commodo irure sunt. Do eu irure culpa sunt qui. Sit ipsum culpa veniam laboris dolor reprehenderit. Duis minim nulla occaecat esse dolor. Commodo id in esse minim proident sit. Veniam consectetur cillum id exercitation enim duis reprehenderit id.</p>'
        // ]);

        // Post::create([
        //     'title' => 'My first post',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Quis velit tempor adipisicing quis Lorem deserunt voluptate est veniam. Esse mollit sint deserunt elit officia et ad eu cillum est culpa culpa velit occaecat. Pariatur in nostrud anim ad sint deserunt nostrud tempor et aute consectetur mollit.',
        //     'body' => '<p>Nostrud velit laboris ex sint ullamco nostrud nulla excepteur eu laborum pariatur minim. Culpa tempor ea reprehenderit sunt do esse id exercitation culpa eu officia non. Reprehenderit ex aliqua excepteur pariatur commodo aliquip sint minim aliquip culpa do ullamco commodo.</p><p>Ipsum consequat excepteur Lorem sint. Fugiat consequat commodo irure sunt. Do eu irure culpa sunt qui. Sit ipsum culpa veniam laboris dolor reprehenderit. Duis minim nulla occaecat esse dolor. Commodo id in esse minim proident sit. Veniam consectetur cillum id exercitation enim duis reprehenderit id.</p>'
        // ]);

        // Post::create([
        //     'title' => 'International Bussiness Management',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'international-bussiness-management',
        //     'excerpt' => 'Quis velit tempor adipisicing quis Lorem deserunt voluptate est veniam. Esse mollit sint deserunt elit officia et ad eu cillum est culpa culpa velit occaecat. Pariatur in nostrud anim ad sint deserunt nostrud tempor et aute consectetur mollit.',
        //     'body' => '<p>Nostrud velit laboris ex sint ullamco nostrud nulla excepteur eu laborum pariatur minim. Culpa tempor ea reprehenderit sunt do esse id exercitation culpa eu officia non. Reprehenderit ex aliqua excepteur pariatur commodo aliquip sint minim aliquip culpa do ullamco commodo.</p><p>Ipsum consequat excepteur Lorem sint. Fugiat consequat commodo irure sunt. Do eu irure culpa sunt qui. Sit ipsum culpa veniam laboris dolor reprehenderit. Duis minim nulla occaecat esse dolor. Commodo id in esse minim proident sit. Veniam consectetur cillum id exercitation enim duis reprehenderit id.</p>'
        // ]);
    }
}
