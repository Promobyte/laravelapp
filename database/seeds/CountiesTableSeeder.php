<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */




    public function run()
    {
        $counties = array(
            'Hedmark',
            'Rogaland',
            'Oppland',
            'Nord-Trøndelag',
            'Østfold',
            'Sør-Trøndelag',
            'Oslo',
            'Akershus',
            'Nordland',
            'Møre og Romsdal',
            'Buskerud',
            'Sogn og Fjordane',
            'Vestfold',
            'Hordaland',
            'Troms',
            'Telemark',
            'Vest-Agder',
            'Aust-Agder',
            'Finnmark'
        );

        foreach($counties as $county)
        {

            DB::table('counties')->insert([
                'name' => $county,
            ]);
        }

        //
    }
}
