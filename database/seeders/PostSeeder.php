<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert(
             [
                [
                    'title' => 'My First Post',
                    'slug' => 'my-first-post',
                    'img_path' => 'img/img3.jpg',
                    'excerpt' => 'Lorem ipsum dolor, sit amet',
                    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ratione distinctio, quibusdam itaque beatae repellat repellendus reiciendis id vitae odit explicabo perferendis fugit tempora dignissimos eos minus sequi. Tempora in earum, illo quod architecto minima vero omnis debitis. Eligendi dicta distinctio blanditiis quasi ea natus tempora harum quidem sequi et?',
                    'published_at' => '2023-04-10',
                    'user_id' => 1,
                    'category_id' => 1,
                    'created_at' => now()
                ],
                [
                    'title' => 'My Second Post',
                    'slug' => 'my-second-post',
                    'img_path' => 'img/img4.jpg',
                    'excerpt' => 'Aliquid ratione distinctio',
                    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ratione distinctio, quibusdam itaque beatae repellat repellendus reiciendis id vitae odit explicabo perferendis fugit tempora dignissimos eos minus sequi. Tempora in earum, illo quod architecto minima vero omnis debitis. Eligendi dicta distinctio blanditiis',
                    'published_at' => '2023-04-11',
                    'user_id' => 1,
                    'category_id' => 2,
                    'created_at' => now()
                ],
                [
                    'title' => 'My Third Post',
                    'slug' => 'my-third-post',
                    'img_path' => 'img/img6.jpg',
                    'excerpt' => 'Tempora in earum',
                    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ratione distinctio, quibusdam itaque beatae repellat repellendus reiciendis id vitae odit explicabo perferendis fugit tempora dignissimos eos minus sequi. Tempora in earum, illo quod architecto minima vero omnis debitis.',
                    'published_at' => '2023-04-12',
                    'user_id' => 1,
                    'category_id' => 3,
                    'created_at' => now()
                ],
                [
                    'title' => 'My Forth Post',
                    'slug' => 'my-forth-post',
                    'img_path' => 'img/img8.jpg',
                    'excerpt' => 'Seeding in earum',
                    'body' => 'Lorem ipsum dolor, adipisicing elit. Aliquid ratione distinctio, quibusdam itaque beatae repellat repellendus reiciendis id vitae odit explicabo perferendis fugit tempora dignissimos eos minus sequi. Tempora in earum, illo quod architecto minima vero omnis debitis.',
                    'published_at' => '2023-04-13',
                    'user_id' => 2,
                    'category_id' => 3,
                    'created_at' => now()
                ],
                [
                    'title' => 'My Fifth Post',
                    'slug' => 'my-fifth-post',
                    'img_path' => 'img/img10.jpg',
                    'excerpt' => 'quibusdam itaque beatae repellat',
                    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ratione distinctio, quibusdam itaque beatae repellat repellendus reiciendis id vitae odit explicabo perferendis fugit tempora dignissimos eos minus sequi. Tempora in earum, illo quod architecto minima vero omnis debitis. Eligendi dicta distinctio blanditiis quasi ea natus tempora harum quidem sequi et?',
                    'published_at' => '2023-04-14',
                    'user_id' => 2,
                    'category_id' => 1,
                    'created_at' => now()
                ],
                [
                    'title' => 'My Sixth Post',
                    'slug' => 'my-sixth-post',
                    'img_path' => 'img/img11.jpg',
                    'excerpt' => 'repellendus reiciendis id vitae',
                    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ratione distinctio, quibusdam itaque beatae repellat repellendus reiciendis id vitae odit explicabo perferendis fugit tempora dignissimos eos minus sequi. Tempora in earum, illo quod architecto minima vero omnis debitis. Eligendi dicta distinctio blanditiis',
                    'published_at' => '2023-04-15',
                    'user_id' => 3,
                    'category_id' => 2,
                    'created_at' => now()
                ],
                [
                    'title' => 'My Seventh Post',
                    'slug' => 'my-seventh-post',
                    'img_path' => 'img/img12.jpg',
                    'excerpt' => 'adipisicing',
                    'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ratione distinctio, quibusdam itaque beatae repellat repellendus reiciendis id vitae odit explicabo perferendis fugit tempora dignissimos eos minus sequi. Tempora in earum, illo quod architecto minima vero omnis debitis.',
                    'published_at' => '2023-04-16',
                    'user_id' => 3,
                    'category_id' => 3,
                    'created_at' => now()
                ],
                [
                    'title' => 'My Eighth Post',
                    'slug' => 'my-eighth-post',
                    'img_path' => 'img/img13.jpg',
                    'excerpt' => 'ratione distinctio',
                    'body' => 'Lorem ipsum dolor, adipisicing elit. Aliquid ratione distinctio, quibusdam itaque beatae repellat repellendus reiciendis id vitae odit explicabo perferendis fugit tempora dignissimos eos minus sequi. Tempora in earum, illo quod architecto minima vero omnis debitis.',
                    'published_at' => '2023-04-17',
                    'user_id' => 2,
                    'category_id' => 3,
                    'created_at' => now()
                ]
            ]
        );
    }
}
