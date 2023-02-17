<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Outlet;
use App\Models\Paket;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $member    = Member::all();
        $outlet    = Outlet::all();
        $user      = User::all();
        $transaksi = Transaksi::all();
        return view('transaksi.index',compact('transaksi','member','outlet','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          //
          $member    = Member::all();
          $paket    = Paket::all()->where('outlets_id', Auth()->user()->outlet_id);
          $outlet    = Outlet::all();
          $user      = User::all();
          $transaksi = Transaksi::all();
          return view('transaksi.create',compact('transaksi','member','outlet','user','paket'));
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
        $request->validate([
            'outlet_id'           => 'required',
            'kode_invoice'        => 'required',
            'member_id'           => 'required',
            'tgl'                 => 'required',
            'batas_waktu'         => 'required',
            'tgl_bayar'           => 'required',
            'biaya_tambahan'      => 'required',
            'diskon'              => 'required',
            'pajak'               => 'required',
            'status'              => 'required',
            'dibayar'             => 'required',
            'user_id'             => 'required',
        ]);
        Transaksi::create([
            'outlet_id'           => $request->outlet_id,
            'kode_invoice'        => $request->kode_invoice,
            'member_id'           => $request->member_id,
            'tgl'                 => $request->tgl,
            'batas_waktu'         => $request->batas_waktu,
            'tgl_bayar'           => $request->tgl_bayar,
            'biaya_tambahan'      => $request->biaya_tambahan,
            'diskon'              => $request->diskon,
            'pajak'               => $request->pajak,
            'status'              => $request->status,
            'dibayar'             => $request->dibayar,
            'user_id'             => $request->user_id,
        ]);
        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
        $member    = Member::all();
        $outlet    = Outlet::all();
        $user      = User::all();
        $transaksi = Transaksi::find($transaksi->id);
        return view('transaksi.show',compact('transaksi','member','outlet','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
        $member    = Member::all();
        $outlet    = Outlet::all();
        $user      = User::all();
        $transaksi = Transaksi::find($transaksi->id);
        return view('transaksi.edit',compact('transaksi','member','outlet','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
        $request->validate([
            'outlet_id'           => 'required',
            'kode_invoice'        => 'required',
            'member_id'           => 'required',
            'tgl'                 => 'required',
            'batas_waktu'         => 'required',
            'tgl_bayar'           => 'required',
            'biaya_tambahan'      => 'required',
            'diskon'              => 'required',
            'pajak'               => 'required',
            'status'              => 'required',
            'dibayar'             => 'required',
            'user_id'             => 'required',
            ]);
            $transaksi = Transaksi::find($transaksi->id);
            $transaksi->   outlet_id            =  $request->outlet_id;
            $transaksi->   kode_invoice         =  $request->kode_invoice;
            $transaksi->   member_id            =  $request->member_id;
            $transaksi->   tgl                  =  $request->tgl;
            $transaksi->   batas_waktu          =  $request->batas_waktu;
            $transaksi->   tgl_bayar            =  $request->tgl_bayar;
            $transaksi->   biaya_tambahan       =  $request->biaya_tambahan;
            $transaksi->   diskon               =  $request->diskon;
            $transaksi->   pajak                =  $request->pajak;
            $transaksi->   status               =  $request->status;
            $transaksi->   dibayar              =  $request->biaya_tambahan;
            $transaksi->   user_id              =  $request->user_id;
            $transaksi->update();
            return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
        $transaksi = Transaksi::find($transaksi->id);
        $transaksi->delete();
        return redirect('/transaksi');
    }
}