<?php

namespace App\Http\Controllers;

use App\Models\Detail_transaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
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
    public function store(Request $request, $transaksi)
    {
        //
        $request->validate([
            'id_paket'  => 'required',
            'qty'       => 'required'
        ],
        [
            'id_paket.required' => 'Pilih Paket',
            'qty.required'      => 'Isi Qty'
        ]);

        $detail_transaksi = new Detail_transaksi;
        $detail_transaksi->transaksi_id  = $transaksi;
        $detail_transaksi->paket_id      = $request->id_paket;
        $detail_transaksi->qty           = $request->qty;
        $detail_transaksi->save();

        return redirect()->route('transaksi.proses', $transaksi);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_transaksi  $detail_transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_transaksi $detail_transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_transaksi  $detail_transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_transaksi $detail_transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail_transaksi  $detail_transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_transaksi $detail_transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_transaksi  $detail_transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_transaksi $detail_transaksi)
    {
        //
    }
}
