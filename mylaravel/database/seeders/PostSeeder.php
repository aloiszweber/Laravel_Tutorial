<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::insert(
            [
            [
                'title' => 'mytitle',
                'paragraph' => 'myparagraph',
                'sentence' => 'sentence',
                'words' => 'words',
            ],

            [
                'title' => 'sdhgklsdh',
                'paragraph' => 'myparagradjhvph',
                'sentence' => 'sentendmlskvce',
                'words' => 'wordmlsdks',
            ],

            [
                'title' => 'sdhgklsdh',
                'paragraph' => 'myparagradjhvph',
                'sentence' => 'sentendmlskvce',
                'words' => 'wordmlsdks',
            ],

            [
                'title' => 'mytitlsdmkvle',
                'paragraph' => 'mymljkvsdparagraph',
                'sentence' => 'sentence',
                'words' => 'words',
            ]
            ]
        );
    }
}