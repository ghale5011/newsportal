<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public const IMAGE = 'https://www.codeit.com.np/storage/01KKTTSY50WXVXMB3AWJTFJSPA.avif';

    public function run(): void
    {
        $names = [
            'Suman Ghale',
            'Sita Sharma',
            'Bikash Thapa',
            'Anita Gurung',
            'Sujan Karki',
            'Prabina Shrestha',
            'Dipak Rai',
            'Manisha Basnet',
            'Kiran Poudel',
            'Nabin Maharjan',
        ];

        foreach ($names as $name) {
            Author::updateOrCreate(
                ['name' => $name],
                ['image' => self::IMAGE]
            );
        }
    }
}
