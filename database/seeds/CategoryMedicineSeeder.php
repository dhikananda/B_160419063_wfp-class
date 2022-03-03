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
            'name' => 'Antiepilepsi - Antikonvulsi',
            'description' => 'Antiepilepsi - Antikonvulsi'
        ]);
    }
}
