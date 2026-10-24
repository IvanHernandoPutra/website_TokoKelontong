<x-mail::message>
# Pesan baru dari website

**Nama:** {{ $message->name }}
**Email:** {{ $message->email }}
@if($message->country)**Kota:** {{ $message->country }}@endif

Pesan:

{{ $message->message }}

<x-mail::button :url="config('toko.wa_number') ? 'https://wa.me/' . config('toko.wa_number') : url('/') }}">
Balas via WhatsApp
</x-mail::button>

Dicatat otomatis dari form kontak tokokelontongku.com.
</x-mail::message>
