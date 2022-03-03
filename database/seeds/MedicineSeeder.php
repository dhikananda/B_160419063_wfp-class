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
            'generic_name' => 'Fentanil',
            'formulas' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus.',
            'price' => 10000,
            'description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' =>'fentanil_inj.jpg',
            'category' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Fentanil',
            'formulas' => 'patch 12,5 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'price' => 10500,
            'description' => 'Untuk nyeri kronik pada pasien kanker yang tidak terkendali. Tidak untuk nyeri akut.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' =>'fentanil_patch125.jpg',
            'category' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Fentanil',
            'formulas' => 'patch 25 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'price' => 11000,
            'description' => '',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'fentanil_patch25.jpg',
            'category' => 1
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Asam Mefenamat',
            'formulas' => 'kaps 250 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'price' => 9000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'asamm_kaps250.jpg',
            'category' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Asam Mefenamat',
            'formulas' => 'tab 500 mg',
            'restriction_formula' => '30 tab/bulan.',
            'price' => 10000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'asamm_tab500.jpg',
            'category' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Ibuprofen',
            'formulas' => 'tab 200 mg',
            'restriction_formula' => '30 tab/bulan.',
            'price' => 11000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'ibuprofen_tab200.jpg',
            'category' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Alopurinol',
            'formulas' => 'tab 100 mg',
            'restriction_formula' => '30 tab/bulan.',
            'price' => 8000,
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'alopurinol_tab100.jpg',
            'category' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Alopurinol',
            'formulas' => 'tab 300 mg',
            'restriction_formula' => '30 tab/bulan.',
            'price' => 11000,
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'alopurinol_tab300.jpg',
            'category' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Kolkisin',
            'formulas' => 'tab 500 mcg',
            'restriction_formula' => '30 tab/bulan.',
            'price' => 12000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'kolkisin_tab500.jpg',
            'category' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Amitriptilin',
            'formulas' => 'tab 25 mg',
            'restriction_formula' => '30 tab/bulan.',
            'price' => 10000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'amitriptilin_tab25.jpg',
            'category' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Gabapentin',
            'formulas' => 'kaps 100 mg',
            'restriction_formula' => '60 kaps/bulan.',
            'price' => 10500,
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'gabapentin_kaps100.png',
            'category' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Gabapentin',
            'formulas' => 'kaps 300 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'price' => 12000,
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'gabapentin_kaps300.jpg',
            'category' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Bupivakain',
            'formulas' => 'inj 0,5%',
            'restriction_formula' => '',
            'price' => 12000,
            'description' => '',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'bupivakain_inj05.jpeg',
            'category' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Bupivakain Heavy',
            'formulas' => 'inj 0,5% + glukosa 8%',
            'restriction_formula' => '',
            'price' => 12000,
            'description' => 'Khusus untuk analgesia spinal.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'bupivakainheavy.jpg',
            'category' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Etil Klorida',
            'formulas' => 'spray 100 mL',
            'restriction_formula' => '',
            'price' => 15000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'etilklorida.jpg',
            'category' => 5
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Deksmedetomidin',
            'formulas' => 'inj 100 mcg/mL',
            'restriction_formula' => '',
            'price' => 20000,
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'deksmedetomidin.jpg',
            'category' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Desfluran',
            'formulas' => 'ih',
            'restriction_formula' => '',
            'price' => 13000,
            'description' => '',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'desfluran.png',
            'category' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Halotan',
            'formulas' => 'ih',
            'restriction_formula' => '',
            'price' => 15000,
            'description' => 'Tidak boleh digunakan berulang. Tidak untuk pasien dengan gangguan fungsi hati.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'halotan.jpg',
            'category' => 6
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Atropin',
            'formulas' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'restriction_formula' => '',
            'price' => 15000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'atropin.jpg',
            'category' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Midazolam',
            'formulas' => 'inj 1 mg/mL (i.v.)',
            'restriction_formula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'price' => 12000,
            'description' => 'Tidak boleh digunakan berulang. Tidak untuk pasien dengan gangguan fungsi hati.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'midazolam_inj1.jpg',
            'category' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Midazolam',
            'formulas' => 'inj 5 mg/mL (i.v.)',
            'restriction_formula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'price' => 15000,
            'description' => 'Dapat digunakan untuk sedasi pada pasien ICU dan HCU.',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'midazolam_inj5.jpg',
            'category' => 7
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Deksametason',
            'formulas' => 'inj 5 mg/mL',
            'restriction_formula' => '20 mg/hari.',
            'price' => 14000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'deksametason_inj5.jpg',
            'category' => 8
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Difenhidramin',
            'formulas' => 'inj 10 mg/mL (i.v./i.m.)',
            'restriction_formula' => '',
            'price' => 13000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'difenhidramin.jpg',
            'category' => 8
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Hidrokortison',
            'formulas' => 'inj 100 mg',
            'restriction_formula' => '',
            'price' => 15000,
            'description' => '',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'hidrokortison.jpg',
            'category' => 8
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Atropin',
            'formulas' => 'inj 0,25 mg/mL (i.v.)',
            'restriction_formula' => '',
            'price' => 16000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'atropin_inj025.jpg',
            'category' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Efedrin',
            'formulas' => 'inj 50 mg/mL',
            'restriction_formula' => '',
            'price' => 15500,
            'description' => '',
            'faskes_TK1' => 0,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'efedrin.jpg',
            'category' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Kalsium Glukonat',
            'formulas' => 'inj 10%',
            'restriction_formula' => '',
            'price' => 14000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'kalsiumglukonat.jpg',
            'category' => 9
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Diazepam',
            'formulas' => 'inj 5 mg/mL',
            'restriction_formula' => '10 amp/kasus, kecuali untuk kasus di ICU.',
            'price' => 22000,
            'description' => 'Tidak untuk i.m.',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'diazepam_inj5.jpg',
            'category' => 10
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Diazepam',
            'formulas' => 'enema 5 mg/2,5 mL',
            'restriction_formula' => '2 tube/hari, bila kejang.',
            'price' => 14500,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'diazepam_enema5.jpg',
            'category' => 10
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'Diazepam',
            'formulas' => 'enema 10 mg/2,5 mL',
            'restriction_formula' => '2 tube/hari, bila kejang.',
            'price' => 21000,
            'description' => '',
            'faskes_TK1' => 1,
            'faskes_TK2' => 1,
            'faskes_TK3' => 1,
            'image' => 'diazepam_enema10.jpg',
            'category' => 10
        ]);
    }
}
