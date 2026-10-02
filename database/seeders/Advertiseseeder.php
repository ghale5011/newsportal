<?php

namespace Database\Seeders;

use App\Models\Advertise;
use Illuminate\Database\Seeder;

class AdvertiseSeeder extends Seeder
{
    public const BANNER = 'https://jawaaf.com/storage/01M3S8KQ80C1K1SZJPXHB90WNK.jpg';

    public function run(): void
    {
        // Column names (incl. the `compant_name` spelling) match your migration.
        $ads = [
            ['Himalayan Bank Ltd.',     '9801000001', 'https://example.com/himalayan-bank'],
            ['Ncell Axiata',            '9801000002', 'https://example.com/ncell'],
            ['Nepal Airlines',          '9801000003', 'https://example.com/nepal-airlines'],
            ['Daraz Nepal',             '9801000004', 'https://example.com/daraz'],
            ['Everest Trekking Co.',    '9801000005', 'https://example.com/everest-trekking'],
            ['Kathmandu University',    '9801000006', 'https://example.com/ku'],
            ['Himalayan Java Coffee',   '9801000007', 'https://example.com/himalayan-java'],
            ['Sipradi Trading',         '9801000008', 'https://example.com/sipradi'],
            ['eSewa Digital Wallet',    '9801000009', 'https://example.com/esewa'],
            ['Bhatbhateni Supermarket', '9801000010', 'https://example.com/bhatbhateni'],
        ];

        foreach ($ads as $i => [$company, $contact, $link]) {
            Advertise::updateOrCreate(
                ['compant_name' => $company],
                [
                    'contact_no'    => $contact,
                    'banner'        => self::BANNER,
                    'expire_date'   => now()->addDays(30 * ($i + 1))->toDateString(),
                    'redirect_link' => $link,
                ]
            );
        }
    }
}
