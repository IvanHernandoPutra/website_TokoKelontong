<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'country' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        $contactMessage = ContactMessage::create($validated);

        // Notifikasi ke inbox toko; form tetap sukses walau mailer belum dikonfigurasi.
        try {
            Mail::to(config('toko.email'))->send(new ContactMessageReceived($contactMessage));
        } catch (\Throwable $e) {
            report($e);
        }

        return back()->with('success', 'Pesan terkirim! Kami akan membalas secepatnya.');
    }
}
