<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    // public function run()
    // {
    //     $this->call([
    //         CategoriesSeeder::class,
    //         // seeder lainnya jika ada
    //     ]);
    // }
    // public function run()
    // {


        // User::create([
        //     'name' => 'khalif',
        //     'email' => 'khalifsiregar123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(7)->create();

        // Category::create([
        //     'name' => 'Palestine',
        //     'slug' => 'palestine'
        // ]);

        // Category::create([
        //     'name'=> 'Animals',
        //     'slug' => 'animals'
        // ]);

        // Category::create([
        //     'name'=> 'Donations',
        //     'slug' => 'donations'
        // ]);

        // Category::create([
        //     'name'=> 'Religion',
        //     'slug' => 'religion'
        // ]);

        // Category::create([
        //     'name'=> 'Humanity',
        //     'slug' => 'humanity'
        // ]);

        // Post::factory(35)->create();

        // Post::create([
        //     'title' => 'Bantu Hewan yang terancam punah',
        //     'slug' => 'bantu-hewan-yang-terancam-punah',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores suscipit, a,  neque ipsa inve',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores suscipit, a, vero doloribus laudantium sunt voluptas eos quo omnis deserunt vitae. Incidunt sequi cupiditate ipsam amet id odit, laudantium sunt illum quis excepturi quae, voluptas itaque velit. Provident, nulla quos expedita inventore earum voluptatibus illum, soluta natus numquam quasi maiores officia omnis neque totam suscipit quis dolore voluptatum optio magnam repudiandae, odio repellendus. Vel sequi, sit laudantium cupiditate cumque totam voluptatibus maiores nemo culpa molestiae perspiciatis tenetur voluptate laborum. Deleniti at ea sed labore quasi molestias rerum, voluptatem sit ex ratione facilis debitis voluptate magni et fuga temporibus, tenetur excepturi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nisi voluptatem obcaecati, accusantium itaque eos nemo incidunt eum neque atque laudantium unde commodi ducimus provident magni possimus, rem repudiandae debitis, quo temporibus eveniet. Commodi dolorum corporis autem sit cum quasi quae explicabo reiciendis consequuntur in, provident eum molestias earum perspiciatis debitis cupiditate quis quos nostrum culpa. Delectus saepe reprehenderit consequuntur fugiat dolorum beatae, neque facere iusto amet omnis maxime quia excepturi nemo inventore officiis quas provident! Adipisci fugit dolorum voluptates! Reiciendis architecto cumque officiis nam blanditiis nostrum, molestiae velit voluptates minima consectetur temporibus nobis. Repudiandae eveniet, dolorem tempore porro optio omnis explicabo, neque ipsa inventore ex aut, fugiat quam ea sit hic quis natus impedit eos iste illum accusantium quasi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis odio iste, ratione unde laborum at. Placeat quam cupiditate consectetur ut illum magni dolore provident incidunt quasi maiores. Officiis vel dolorem, eligendi cum nulla nesciunt molestiae soluta nihil ut temporibus suscipit molestias! Omnis aspernatur quasi nobis quia, beatae rerum tenetur itaque!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto nihil nobis voluptatem ea architecto! Odio minima officiis ratione sapiente optio quo porro suscipit accusantium et cum neque dignissimos officia, ea architecto sunt, laudantium laborum tempora sequi explicabo a dolores dolore nobis vero. Beatae, voluptatibus ducimus ad exercitationem rerum vitae eligendi sit sequi dolore molestiae excepturi consequuntur earum officia quos minus veniam animi quidem voluptas dicta inventore omnis deleniti qui esse.</p>',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Free Palestine',
        //     'slug' => 'free-palestine',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores suscipit, a,  neque ipsa inve',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores suscipit, a, vero doloribus laudantium sunt voluptas eos quo omnis deserunt vitae. Incidunt sequi cupiditate ipsam amet id odit, laudantium sunt illum quis excepturi quae, voluptas itaque velit. Provident, nulla quos expedita inventore earum voluptatibus illum, soluta natus numquam quasi maiores officia omnis neque totam suscipit quis dolore voluptatum optio magnam repudiandae, odio repellendus. Vel sequi, sit laudantium cupiditate cumque totam voluptatibus maiores nemo culpa molestiae perspiciatis tenetur voluptate laborum. Deleniti at ea sed labore quasi molestias rerum, voluptatem sit ex ratione facilis debitis voluptate magni et fuga temporibus, tenetur excepturi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nisi voluptatem obcaecati, accusantium itaque eos nemo incidunt eum neque atque laudantium unde commodi ducimus provident magni possimus, rem repudiandae debitis, quo temporibus eveniet. Commodi dolorum corporis autem sit cum quasi quae explicabo reiciendis consequuntur in, provident eum molestias earum perspiciatis debitis cupiditate quis quos nostrum culpa. Delectus saepe reprehenderit consequuntur fugiat dolorum beatae, neque facere iusto amet omnis maxime quia excepturi nemo inventore officiis quas provident! Adipisci fugit dolorum voluptates! Reiciendis architecto cumque officiis nam blanditiis nostrum, molestiae velit voluptates minima consectetur temporibus nobis. Repudiandae eveniet, dolorem tempore porro optio omnis explicabo, neque ipsa inventore ex aut, fugiat quam ea sit hic quis natus impedit eos iste illum accusantium quasi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis odio iste, ratione unde laborum at. Placeat quam cupiditate consectetur ut illum magni dolore provident incidunt quasi maiores. Officiis vel dolorem, eligendi cum nulla nesciunt molestiae soluta nihil ut temporibus suscipit molestias! Omnis aspernatur quasi nobis quia, beatae rerum tenetur itaque!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto nihil nobis voluptatem ea architecto! Odio minima officiis ratione sapiente optio quo porro suscipit accusantium et cum neque dignissimos officia, ea architecto sunt, laudantium laborum tempora sequi explicabo a dolores dolore nobis vero. Beatae, voluptatibus ducimus ad exercitationem rerum vitae eligendi sit sequi dolore molestiae excepturi consequuntur earum officia quos minus veniam animi quidem voluptas dicta inventore omnis deleniti qui esse.</p>',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);
    }
// }
