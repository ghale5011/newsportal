<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Seeds the `article_category` pivot table as a many-to-many relation:
 *  - each article belongs to several categories
 *  - each category contains several articles
 *
 * Mapped by slug, so it doesn't depend on auto-increment IDs.
 * Safe to re-run: the pivot table is cleared first.
 */
class ArticleCategorySeeder extends Seeder
{
    public function run(): void
    {
        // article slug => [category slugs]
        $map = [
            'government-unveils-new-budget-priorities'                      => ['politics', 'business', 'opinion'],
            'nepse-index-climbs-investor-confidence-returns'                => ['business', 'politics'],
            'national-cricket-team-prepares-regional-tournament'            => ['sports', 'entertainment'],
            'new-nepali-film-breaks-opening-weekend-records'                => ['entertainment', 'business'],
            'local-startups-embrace-ai-customer-services'                   => ['technology', 'business', 'education'],
            'health-ministry-launches-vaccination-awareness-drive'          => ['health', 'education', 'politics', 'sports'],
            'see-results-published-pass-rate-improves'                      => ['education', 'politics'],
            'tourist-arrivals-surge-trekking-season-begins'                 => ['tourism', 'business', 'world'],
            'global-leaders-discuss-climate-action-mountain-communities'    => ['world', 'politics', 'health', 'tourism'],
            'opinion-local-governments-need-digital-infrastructure'         => ['opinion', 'technology', 'politics'],
        ];

        $articles   = DB::table('articles')->pluck('id', 'slug');
        $categories = DB::table('categories')->pluck('id', 'slug');

        $rows = [];
        foreach ($map as $articleSlug => $categorySlugs) {
            foreach ($categorySlugs as $categorySlug) {
                if (! isset($articles[$articleSlug], $categories[$categorySlug])) {
                    continue;
                }

                $rows[] = [
                    'article_id'  => $articles[$articleSlug],
                    'category_id' => $categories[$categorySlug],
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ];
            }
        }

        DB::table('article_category')->truncate();
        DB::table('article_category')->insert($rows);
    }
}

