<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public const IMAGE = 'https://jawaaf.com/storage/01M3S8KQ80C1K1SZJPXHB90WNK.jpg';

    public function run(): void
    {
        // NOTE: `content` and `meta_description` are string (VARCHAR 255) columns,
        // so every text below is kept under 255 characters.
        $articles = [
            [
                'title'   => 'Government Unveils New Budget Priorities for the Coming Fiscal Year',
                'slug'    => 'government-unveils-new-budget-priorities',
                'content' => 'The finance ministry has outlined its budget priorities, focusing on infrastructure, agriculture and digital services while promising tighter control over recurring expenditure.',
                'meta'    => 'Finance ministry outlines budget priorities focusing on infrastructure, agriculture and digital services.',
            ],
            [
                'title'   => 'Nepal Stock Exchange Index Climbs as Investor Confidence Returns',
                'slug'    => 'nepse-index-climbs-investor-confidence-returns',
                'content' => 'The NEPSE index closed higher for the fifth straight session as banking and hydropower stocks led the rally, with turnover crossing several billion rupees.',
                'meta'    => 'NEPSE gains for a fifth straight session led by banking and hydropower stocks.',
            ],
            [
                'title'   => 'National Cricket Team Prepares for Upcoming Regional Tournament',
                'slug'    => 'national-cricket-team-prepares-regional-tournament',
                'content' => 'The national cricket squad began a ten-day training camp in Kathmandu, with the coaching staff emphasising fitness, fielding drills and middle-order batting.',
                'meta'    => 'Nepal cricket squad starts a ten-day camp ahead of the regional tournament.',
            ],
            [
                'title'   => 'New Nepali Film Breaks Opening Weekend Records at Box Office',
                'slug'    => 'new-nepali-film-breaks-opening-weekend-records',
                'content' => 'A newly released Nepali drama has recorded the highest opening weekend collection of the year, drawing packed houses across Kathmandu, Pokhara and Biratnagar.',
                'meta'    => 'New Nepali drama posts the biggest opening weekend collection of the year.',
            ],
            [
                'title'   => 'Local Startups Embrace AI to Transform Customer Services',
                'slug'    => 'local-startups-embrace-ai-customer-services',
                'content' => 'Several Kathmandu-based startups are integrating artificial intelligence into chat support and logistics, reporting faster response times and reduced operating costs.',
                'meta'    => 'Nepali startups use AI to speed up customer support and cut costs.',
            ],
            [
                'title'   => 'Health Ministry Launches Nationwide Vaccination Awareness Drive',
                'slug'    => 'health-ministry-launches-vaccination-awareness-drive',
                'content' => 'The Ministry of Health has begun a nationwide campaign to raise awareness about routine childhood vaccination, with special focus on remote hill and Terai districts.',
                'meta'    => 'Health ministry begins a nationwide vaccination awareness campaign.',
            ],
            [
                'title'   => 'SEE Results Published: Pass Rate Shows Steady Improvement',
                'slug'    => 'see-results-published-pass-rate-improves',
                'content' => 'The examination board has published the latest SEE results, showing an improved pass rate, with students encouraged to check grade sheets through the official portal.',
                'meta'    => 'SEE results are out with an improved pass rate; check the official portal.',
            ],
            [
                'title'   => 'Tourist Arrivals Surge as Trekking Season Begins in the Himalayas',
                'slug'    => 'tourist-arrivals-surge-trekking-season-begins',
                'content' => 'Nepal recorded a sharp rise in tourist arrivals this month as the autumn trekking season opens, boosting hotels and guides in Everest, Annapurna and Langtang.',
                'meta'    => 'Tourist arrivals jump as the autumn trekking season starts in Nepal.',
            ],
            [
                'title'   => 'Global Leaders Gather to Discuss Climate Action and Mountain Communities',
                'slug'    => 'global-leaders-discuss-climate-action-mountain-communities',
                'content' => 'World leaders and experts met to discuss climate financing, with Himalayan nations urging stronger support for glacier monitoring and communities facing climate risks.',
                'meta'    => 'Leaders discuss climate financing as Himalayan nations seek more support.',
            ],
            [
                'title'   => 'Opinion: Why Local Governments Need Stronger Digital Infrastructure',
                'slug'    => 'opinion-local-governments-need-digital-infrastructure',
                'content' => 'Digital services at the local level remain uneven. Investing in reliable internet, trained staff and open data would make governance faster, cheaper and more transparent.',
                'meta'    => 'An opinion on why local governments need better digital infrastructure.',
            ],
        ];

        $authorIds = Author::pluck('id')->all();

        foreach ($articles as $i => $a) {
            Article::updateOrCreate(
                ['slug' => $a['slug']],
                [
                    'title'            => $a['title'],
                    'content'          => $a['content'],
                    'image'            => self::IMAGE,
                    'meta_title'       => $a['title'],
                    'meta_description' => $a['meta'],
                    'author_id'        => $authorIds[$i % count($authorIds)] ?? null,
                ]
            );
        }
    }
}
