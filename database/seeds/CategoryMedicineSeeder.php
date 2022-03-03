<?php

use Illuminate\Database\Seeder;

class CategoryMedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoriesmedicines')->insert([
            'name' => 'Analgesik Narkotik',
            'description' => 'Analgesik, Antipiretik, Antiinflamasi Non Steroid, Antipirai'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Analgesik Non Narkotik',
            'description' => 'Analgesik, Antipiretik, Antiinflamasi Non Steroid, Antipirai'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Antipirai',
            'description' => 'Analgesik, Antipiretik, Antiinflamasi Non Steroid, Antipirai'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Nyeri Neuropatik',
            'description' => 'Analgesik, Antipiretik, Antiinflamasi Non Steroid, Antipirai'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Anastetik Lokal',
            'description' => 'Anastetik'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Anastetik Umum dan Oksigen',
            'description' => 'Anastetik'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Obat untuk Prosedur Pre Operatif',
            'description' => 'Anastetik'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Antialergi dan Obat untuk Anafilaksis',
            'description' => 'Antialergi dan Obat untuk Anafilaksis'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Khusus',
            'description' => 'Antidot dan Obat Lain untuk Keracunan'
        ]);
        DB::table('categoriesmedicines')->insert([
            'name' => 'Antiepilepsi - Antikonvulsi',
            'description' => 'Antiepilepsi - Antikonvulsi'
        ]);
    }
}
