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
public function run()
    {
        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();
        }

        // User::create([
            //     'name' => 'Rian Mupti Jauhari',
            //     'email' => 'rianmupti@gmail.com',
            //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Yusup Maulana',
        //     'email' => 'yusupmaulana@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        
        // Post::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate?',
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis exercitationem in corporis porro voluptatem, animi, molestias, accusantium facere fugiat officia asperiores ratione sint modi aliquid. Ipsa quasi, aliquid, consequuntur quia rerum eos similique odio deleniti est quisquam quam optio architecto aliquam natus tenetur! Quae perspiciatis repellendus non, odit dolor harum mollitia repellat. Sit numquam quam ipsam placeat fugiat? Nemo dignissimos nobis repudiandae tempore mollitia! Magnam a commodi non accusamus, possimus neque ipsa perferendis impedit tempora, omnis obcaecati nobis similique. Reprehenderit expedita temporibus magnam vel maxime voluptates quis aut soluta, ex impedit recusandae, ad optio, a debitis? Doloremque, ipsa esse! Tenetur eligendi aperiam sequi voluptatem labore blanditiis culpa dolorum assumenda illum praesentium quasi, possimus totam consequatur, ad, tempora debitis sit provident corrupti ab perspiciatis accusamus commodi! Nam, minima! Iusto nostrum expedita sunt iste pariatur doloribus molestiae facere quod optio dicta error ab labore, neque dolorem enim esse! Asperiores nesciunt consequuntur error aut veniam quidem omnis ad natus quis odio officia repellendus eaque porro, vitae inventore itaque, magni ut nihil. Asperiores sapiente error commodi accusantium aliquam, deleniti, qui in, unde culpa illo architecto? Itaque voluptates, voluptas architecto fugit omnis dolores. Doloremque, consectetur accusantium. Nobis, molestias unde! Enim recusandae hic vitae quis similique.',
            //     'category_id' => 1,
            //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis exercitationem in corporis porro voluptatem, animi, molestias, accusantium facere fugiat officia asperiores ratione sint modi aliquid. Ipsa quasi, aliquid, consequuntur quia rerum eos similique odio deleniti est quisquam quam optio architecto aliquam natus tenetur! Quae perspiciatis repellendus non, odit dolor harum mollitia repellat. Sit numquam quam ipsam placeat fugiat? Nemo dignissimos nobis repudiandae tempore mollitia! Magnam a commodi non accusamus, possimus neque ipsa perferendis impedit tempora, omnis obcaecati nobis similique. Reprehenderit expedita temporibus magnam vel maxime voluptates quis aut soluta, ex impedit recusandae, ad optio, a debitis? Doloremque, ipsa esse! Tenetur eligendi aperiam sequi voluptatem labore blanditiis culpa dolorum assumenda illum praesentium quasi, possimus totam consequatur, ad, tempora debitis sit provident corrupti ab perspiciatis accusamus commodi! Nam, minima! Iusto nostrum expedita sunt iste pariatur doloribus molestiae facere quod optio dicta error ab labore, neque dolorem enim esse! Asperiores nesciunt consequuntur error aut veniam quidem omnis ad natus quis odio officia repellendus eaque porro, vitae inventore itaque, magni ut nihil. Asperiores sapiente error commodi accusantium aliquam, deleniti, qui in, unde culpa illo architecto? Itaque voluptates, voluptas architecto fugit omnis dolores. Doloremque, consectetur accusantium. Nobis, molestias unde! Enim recusandae hic vitae quis similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis exercitationem in corporis porro voluptatem, animi, molestias, accusantium facere fugiat officia asperiores ratione sint modi aliquid. Ipsa quasi, aliquid, consequuntur quia rerum eos similique odio deleniti est quisquam quam optio architecto aliquam natus tenetur! Quae perspiciatis repellendus non, odit dolor harum mollitia repellat. Sit numquam quam ipsam placeat fugiat? Nemo dignissimos nobis repudiandae tempore mollitia! Magnam a commodi non accusamus, possimus neque ipsa perferendis impedit tempora, omnis obcaecati nobis similique. Reprehenderit expedita temporibus magnam vel maxime voluptates quis aut soluta, ex impedit recusandae, ad optio, a debitis? Doloremque, ipsa esse! Tenetur eligendi aperiam sequi voluptatem labore blanditiis culpa dolorum assumenda illum praesentium quasi, possimus totam consequatur, ad, tempora debitis sit provident corrupti ab perspiciatis accusamus commodi! Nam, minima! Iusto nostrum expedita sunt iste pariatur doloribus molestiae facere quod optio dicta error ab labore, neque dolorem enim esse! Asperiores nesciunt consequuntur error aut veniam quidem omnis ad natus quis odio officia repellendus eaque porro, vitae inventore itaque, magni ut nihil. Asperiores sapiente error commodi accusantium aliquam, deleniti, qui in, unde culpa illo architecto? Itaque voluptates, voluptas architecto fugit omnis dolores. Doloremque, consectetur accusantium. Nobis, molestias unde! Enim recusandae hic vitae quis similique.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis exercitationem in corporis porro voluptatem, animi, molestias, accusantium facere fugiat officia asperiores ratione sint modi aliquid. Ipsa quasi, aliquid, consequuntur quia rerum eos similique odio deleniti est quisquam quam optio architecto aliquam natus tenetur! Quae perspiciatis repellendus non, odit dolor harum mollitia repellat. Sit numquam quam ipsam placeat fugiat? Nemo dignissimos nobis repudiandae tempore mollitia! Magnam a commodi non accusamus, possimus neque ipsa perferendis impedit tempora, omnis obcaecati nobis similique. Reprehenderit expedita temporibus magnam vel maxime voluptates quis aut soluta, ex impedit recusandae, ad optio, a debitis? Doloremque, ipsa esse! Tenetur eligendi aperiam sequi voluptatem labore blanditiis culpa dolorum assumenda illum praesentium quasi, possimus totam consequatur, ad, tempora debitis sit provident corrupti ab perspiciatis accusamus commodi! Nam, minima! Iusto nostrum expedita sunt iste pariatur doloribus molestiae facere quod optio dicta error ab labore, neque dolorem enim esse! Asperiores nesciunt consequuntur error aut veniam quidem omnis ad natus quis odio officia repellendus eaque porro, vitae inventore itaque, magni ut nihil. Asperiores sapiente error commodi accusantium aliquam, deleniti, qui in, unde culpa illo architecto? Itaque voluptates, voluptas architecto fugit omnis dolores. Doloremque, consectetur accusantium. Nobis, molestias unde! Enim recusandae hic vitae quis similique.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

}