<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompagnySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert([
            [
                'nom' => 'GeofIndustry',
                'adresse' => '45, avenue de Fre, 1180, Uccle',
                'tel' => '02/ 254 36 98',
                'email' => 'geof@info.com',
                'contactnom' => 'Mme Vanden Stoke',
                'contactprenom' => 'Viviane',
                'url' => 'https://cdn.pixabay.com/photo/2019/12/04/10/22/male-4672332_960_720.jpg'

            ],
            [
                'nom' => 'BanzaiIndustry',
                'adresse' => '45, avenue de la toison d\'or, 1000, Bruxelle',
                'tel' => '02/ 145 36 74',
                'email' => 'banzai@info.com',
                'contactnom' => 'Mr Pirlo',
                'contactprenom' => 'Michel',
                'url' => 'https://cdn.pixabay.com/photo/2019/07/15/06/27/factory-4338627_960_720.jpg'

            ],
            [
                'nom' => 'MaxiToys',
                'adresse' => '178, avenue de la paix, 6547, Anvers',
                'tel' => '09/ 458 36 98',
                'email' => 'toys@info.com',
                'contactnom' => 'Mr Dewever',
                'contactprenom' => 'Bart',
                'url' => 'https://cdn.pixabay.com/photo/2018/08/17/18/34/refinery-3613522_960_720.jpg'

            ],
            [
                'nom' => 'FaceFesse',
                'adresse' => '9, avenue Manguot, 4789, sexeVille',
                'tel' => '98/ 325 87 00',
                'email' => 'FaceFesse@info.com',
                'contactnom' => 'Zukerberg',
                'contactprenom' => 'Marco',
                'url' => 'https://cdn.pixabay.com/photo/2020/11/12/16/58/worker-5736096_960_720.jpg'

            ],
        ]);
    }
}
