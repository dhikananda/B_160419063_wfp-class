<?php

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'generic_name' => 'Diazepam',
            'formulas' => 'enema 10 mg/2,5 mL',
            'restriction_formula' => '2 tube/hari, bila kejang.',
            'description' => '-',
            'faskes_TK1' => 'v',
            'faskes_TK2' => 'v',
            'faskes_TK3' => 'v',
            'category' => 10
        ]);
    }
}
