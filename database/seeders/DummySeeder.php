<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x < 1000; $x++) {
            DB::table('dummy')->insert([
                'rendering_engine' => 'Gecko',
                'browser' => 'Firefox 1.0',
                'platform' => 'Win 98+ / OSX.2+',
                'engine_version' => '1.7',
                'css_grade' => 'A',
            ]);
            DB::table('dummy')->insert([
                'rendering_engine' => 'KHTML',
                'browser' => 'Konqureror 3.1',
                'platform' => 'KDE 3.1',
                'engine_version' => '3.1',
                'css_grade' => 'C',
            ]);
            DB::table('dummy')->insert([
                'rendering_engine' => 'Misc',
                'browser' => 'NetFront 3.1',
                'platform' => 'Embedded devices',
                'engine_version' => '-',
                'css_grade' => 'C',
            ]);
            DB::table('dummy')->insert([
                'rendering_engine' => 'Webkit',
                'browser' => 'Safari 1.2',
                'platform' => 'OSX.3',
                'engine_version' => '125.5',
                'css_grade' => 'A',
            ]);
            DB::table('dummy')->insert([
                'rendering_engine' => 'Trident',
                'browser' => 'Internet Explorer 5.5',
                'platform' => 'Win 95+',
                'engine_version' => '5.5',
                'css_grade' => 'A',
            ]);
        }
    }
}
