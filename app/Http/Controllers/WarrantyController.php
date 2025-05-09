<?php

namespace App\Http\Controllers;

use App\Models\WarrantyClaim;
use Illuminate\Http\Request;
use App\Notifications\WarrantyNotification;
use App\Models\Order;
use App\Models\User;


class WarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function claim(Request $request, Order $order) {
        if ($order->completed_at->diffInDays() > 7) {
            abort(400, 'Masa garansi sudah habis');
        }

        $claim = $order->warrantyClaim()->create([
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Klaim diterima');
    }

    public function processClaim($claimId) {
        $claim = WarrantyClaim::find($claimId);
        $originalTukang = $claim->order->originalTukang;
        
        // Notifikasi ke tukang asli
        $originalTukang->notify(new WarrantyNotification($claim));
    }
    

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Order $order)
    {
        $claim = $order->warrantyClaim()->create([
            'issue_description' => $request->input('issue'),
            'status' => 'pending'
        ]);
    
        // Kirim notifikasi ke admin
        $admin = User::where('role', 'admin')->first();
        $admin->notify(new WarrantyNotification($claim));
    
        // Jika perlu kirim ke tukang juga:
        $order->tukang->notify(new WarrantyNotification($claim));
    
        return redirect()->back()->with('success', 'Klaim garansi diajukan');
    }

    /**
     * Display the specified resource.
     */
    public function show(WarrantyClaim $warrantyClaim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WarrantyClaim $warrantyClaim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WarrantyClaim $warrantyClaim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WarrantyClaim $warrantyClaim)
    {
        //
    }
}
