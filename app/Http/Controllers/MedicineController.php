<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query raw (jika ada filter dalam query)
        $listdata = DB::select(DB::raw('select * from medicines'));
        // dd($listdata);

        // mengambil semua data dari tabel tanpa menggunakan filter
        // $listdata = DB::table('medicines')->get();

        // Eloquent
        // $listdata = Medicine::all();

        // medicine.index = medicine->nama folder, index->nama file
        // return view('medicine.index', compact('listdata'));

        // grid
        $listdatagrid = DB::select(DB::raw('select cm.name, m.generic_name, m.formulas, m.price, m.image from medicines as m inner join categoriesmedicines as cm on m.category = cm.id where m.category = 1'));
        return view('medicine.index_grid', compact('listdatagrid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
