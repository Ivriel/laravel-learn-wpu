<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Ivriel Gunawan',
            'email' => 'gunawanivriel@gmail.com',
            'password' => bcrypt('12345'),
        ]);

           User::create([
            'name' => 'F0rgotten',
            'email' => 'forgotten@gmail.com',
            'password' => bcrypt('54321'),
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => '
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus dolorem? Accusantium hic vitae porro fugiat eum facilis. Illo, beatae ab? At quis laboriosam voluptas quae magnam velit fugiat reprehenderit qui, aperiam libero dicta nesciunt eum deserunt cupiditate dolores ratione voluptate. Rem quisquam officia quasi odio beatae, facilis eos impedit quod dolorem laborum. Aliquam ab voluptatem deleniti illum velit, cumque vel magnam, voluptatum qui tenetur labore maiores nemo repellat distinctio enim nihil. Molestiae, provident. Tempora consectetur quas, tenetur hic praesentium error laudantium corrupti maxime culpa, optio numquam sed excepturi ipsa rerum tempore accusantium dicta iste voluptatem. Odit soluta nihil qui.',
            'body' => '
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus dolorem? Accusantium hic vitae porro fugiat eum facilis. Illo, beatae ab? At quis laboriosam voluptas quae magnam velit fugiat reprehenderit qui, aperiam libero dicta nesciunt eum deserunt cupiditate dolores ratione voluptate. Rem quisquam officia quasi odio beatae, facilis eos impedit quod dolorem laborum. Aliquam ab voluptatem deleniti illum velit, cumque vel magnam, voluptatum qui tenetur labore maiores nemo repellat distinctio enim nihil. Molestiae, provident. Tempora consectetur quas, tenetur hic praesentium error laudantium corrupti maxime culpa, optio numquam sed excepturi ipsa rerum tempore accusantium dicta iste voluptatem. Odit soluta nihil qui. didsndknds dsdjnsjd sd oasas',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => '
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus dolorem? Accusantium hic vitae porro fugiat eum facilis. Illo, beatae ab? At quis laboriosam voluptas quae magnam velit fugiat reprehenderit qui, aperiam libero dicta nesciunt eum deserunt cupiditate dolores ratione voluptate. Rem quisquam officia quasi odio beatae, facilis eos impedit quod dolorem laborum. Aliquam ab voluptatem deleniti illum velit, cumque vel magnam, voluptatum qui tenetur labore maiores nemo repellat distinctio enim nihil. Molestiae, provident. Tempora consectetur quas, tenetur hic praesentium error laudantium corrupti maxime culpa, optio numquam sed excepturi ipsa rerum tempore accusantium dicta iste voluptatem. Odit soluta nihil qui.',
            'body' => '
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus dolorem? Accusantium hic vitae porro fugiat eum facilis. Illo, beatae ab? At quis laboriosam voluptas quae magnam velit fugiat reprehenderit qui, aperiam libero dicta nesciunt eum deserunt cupiditate dolores ratione voluptate. Rem quisquam officia quasi odio beatae, facilis eos impedit quod dolorem laborum. Aliquam ab voluptatem deleniti illum velit, cumque vel magnam, voluptatum qui tenetur labore maiores nemo repellat distinctio enim nihil. Molestiae, provident. Tempora consectetur quas, tenetur hic praesentium error laudantium corrupti maxime culpa, optio numquam sed excepturi ipsa rerum tempore accusantium dicta iste voluptatem. Odit soluta nihil qui. didsndknds dsdjnsjd sd oasas',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => '
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus dolorem? Accusantium hic vitae porro fugiat eum facilis. Illo, beatae ab? At quis laboriosam voluptas quae magnam velit fugiat reprehenderit qui, aperiam libero dicta nesciunt eum deserunt cupiditate dolores ratione voluptate. Rem quisquam officia quasi odio beatae, facilis eos impedit quod dolorem laborum. Aliquam ab voluptatem deleniti illum velit, cumque vel magnam, voluptatum qui tenetur labore maiores nemo repellat distinctio enim nihil. Molestiae, provident. Tempora consectetur quas, tenetur hic praesentium error laudantium corrupti maxime culpa, optio numquam sed excepturi ipsa rerum tempore accusantium dicta iste voluptatem. Odit soluta nihil qui.',
            'body' => '
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus dolorem? Accusantium hic vitae porro fugiat eum facilis. Illo, beatae ab? At quis laboriosam voluptas quae magnam velit fugiat reprehenderit qui, aperiam libero dicta nesciunt eum deserunt cupiditate dolores ratione voluptate. Rem quisquam officia quasi odio beatae, facilis eos impedit quod dolorem laborum. Aliquam ab voluptatem deleniti illum velit, cumque vel magnam, voluptatum qui tenetur labore maiores nemo repellat distinctio enim nihil. Molestiae, provident. Tempora consectetur quas, tenetur hic praesentium error laudantium corrupti maxime culpa, optio numquam sed excepturi ipsa rerum tempore accusantium dicta iste voluptatem. Odit soluta nihil qui. didsndknds dsdjnsjd sd oasas',
            'category_id' => 2,
            'user_id' => 1,
        ]);

          Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => '
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus dolorem? Accusantium hic vitae porro fugiat eum facilis. Illo, beatae ab? At quis laboriosam voluptas quae magnam velit fugiat reprehenderit qui, aperiam libero dicta nesciunt eum deserunt cupiditate dolores ratione voluptate. Rem quisquam officia quasi odio beatae, facilis eos impedit quod dolorem laborum. Aliquam ab voluptatem deleniti illum velit, cumque vel magnam, voluptatum qui tenetur labore maiores nemo repellat distinctio enim nihil. Molestiae, provident. Tempora consectetur quas, tenetur hic praesentium error laudantium corrupti maxime culpa, optio numquam sed excepturi ipsa rerum tempore accusantium dicta iste voluptatem. Odit soluta nihil qui.',
            'body' => '
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus dolorem? Accusantium hic vitae porro fugiat eum facilis. Illo, beatae ab? At quis laboriosam voluptas quae magnam velit fugiat reprehenderit qui, aperiam libero dicta nesciunt eum deserunt cupiditate dolores ratione voluptate. Rem quisquam officia quasi odio beatae, facilis eos impedit quod dolorem laborum. Aliquam ab voluptatem deleniti illum velit, cumque vel magnam, voluptatum qui tenetur labore maiores nemo repellat distinctio enim nihil. Molestiae, provident. Tempora consectetur quas, tenetur hic praesentium error laudantium corrupti maxime culpa, optio numquam sed excepturi ipsa rerum tempore accusantium dicta iste voluptatem. Odit soluta nihil qui. didsndknds dsdjnsjd sd oasas',
            'category_id' => 2,
            'user_id' => 2,
        ]);

    }
}
