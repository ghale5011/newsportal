<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['title' => 'Politics',      'slug' => 'politics',      'desc' => 'Latest political news, government decisions and party updates from Nepal.'],
            ['title' => 'Business',      'slug' => 'business',      'desc' => 'Economy, markets, banking and trade news from Nepal and beyond.'],
            ['title' => 'Sports',        'slug' => 'sports',        'desc' => 'Cricket, football and every major sports update from Nepal and the world.'],
            ['title' => 'Entertainment', 'slug' => 'entertainment', 'desc' => 'Movies, music, celebrities and the Nepali entertainment industry.'],
            ['title' => 'Technology',    'slug' => 'technology',    'desc' => 'Gadgets, startups, AI and the digital world.'],
            ['title' => 'Health',        'slug' => 'health',        'desc' => 'Health news, wellness tips and medical research updates.'],
            ['title' => 'Education',     'slug' => 'education',     'desc' => 'Exam results, admissions, scholarships and education policy news.'],
            ['title' => 'Tourism',       'slug' => 'tourism',       'desc' => 'Travel destinations, trekking, hospitality and tourism news in Nepal.'],
            ['title' => 'World',         'slug' => 'world',         'desc' => 'International news and global events that matter.'],
            ['title' => 'Opinion',       'slug' => 'opinion',       'desc' => 'Editorials, columns and expert opinions on current affairs.'],
        ];

        foreach ($categories as $c) {
            Category::updateOrCreate(
                ['slug' => $c['slug']],
                [
                    'title'            => $c['title'],
                    'meta_title'       => $c['title'] . ' News | Jawaaf',
                    'meta_description' => $c['desc'],
                ]
            );
        }
    }
}
