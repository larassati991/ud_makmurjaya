@extends('admin.layout')

@section('title', 'Pengaturan Website')

@section('content')
<div class="card">
    <div class="card-header" style="display:flex;justify-content:space-between;align-items:center">
        <h2>⚙️ Pengaturan Website</h2>
    </div>

    @if(session('success'))
        <div style="background:#d4edda;color:#155724;padding:12px 16px;border-radius:6px;margin-bottom:20px;border:1px solid #c3e6cb;">
            ✅ {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.settings.update') }}">
        @csrf
        @method('PUT')

        {{-- PERUSAHAAN --}}
        <h3 style="font-size:16px;font-weight:700;color:#6B3434;border-bottom:2px solid #6B3434;padding-bottom:8px;margin:24px 0 16px">🏢 Informasi Perusahaan</h3>
        <div class="form-grid">
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" name="company_name" value="{{ $settings['company_name'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Tagline</label>
                <input type="text" name="company_tagline" value="{{ $settings['company_tagline'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ $settings['email'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="address" value="{{ $settings['address'] ?? '' }}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label>Deskripsi Perusahaan</label>
            <textarea name="company_description" class="form-control" rows="3">{{ $settings['company_description'] ?? '' }}</textarea>
        </div>

        {{-- KONTAK --}}
        <h3 style="font-size:16px;font-weight:700;color:#6B3434;border-bottom:2px solid #6B3434;padding-bottom:8px;margin:24px 0 16px">📞 Nomor Kontak & WhatsApp</h3>
        <div class="form-group">
            <label>Nomor WhatsApp Utama <small style="color:#888">(format: +62 852-2546-1504)</small></label>
            <input type="text" name="whatsapp_number" value="{{ $settings['whatsapp_number'] ?? '' }}" class="form-control" placeholder="+62 852-2546-1504">
        </div>
        <div class="form-grid" style="grid-template-columns:2fr 1fr">
            <div class="form-group">
                <label>Nomor 1</label>
                <input type="text" name="phone_1" value="{{ $settings['phone_1'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Label Nomor 1</label>
                <input type="text" name="phone_1_label" value="{{ $settings['phone_1_label'] ?? '' }}" class="form-control" placeholder="Informasi Pricelist & Order">
            </div>
        </div>
        <div class="form-grid" style="grid-template-columns:2fr 1fr">
            <div class="form-group">
                <label>Nomor 2</label>
                <input type="text" name="phone_2" value="{{ $settings['phone_2'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Label Nomor 2</label>
                <input type="text" name="phone_2_label" value="{{ $settings['phone_2_label'] ?? '' }}" class="form-control" placeholder="Info Kerjasama">
            </div>
        </div>
        <div class="form-grid" style="grid-template-columns:2fr 1fr">
            <div class="form-group">
                <label>Nomor 3</label>
                <input type="text" name="phone_3" value="{{ $settings['phone_3'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Label Nomor 3</label>
                <input type="text" name="phone_3_label" value="{{ $settings['phone_3_label'] ?? '' }}" class="form-control" placeholder="Info Pengaduan">
            </div>
        </div>

        {{-- JAM OPERASIONAL --}}
        <h3 style="font-size:16px;font-weight:700;color:#6B3434;border-bottom:2px solid #6B3434;padding-bottom:8px;margin:24px 0 16px">🕐 Jam Operasional</h3>
        <div class="form-grid">
            <div class="form-group">
                <label>Senin – Jumat</label>
                <input type="text" name="operational_weekday" value="{{ $settings['operational_weekday'] ?? '' }}" class="form-control" placeholder="08.00 - 17.00 WIB">
            </div>
            <div class="form-group">
                <label>Sabtu</label>
                <input type="text" name="operational_saturday" value="{{ $settings['operational_saturday'] ?? '' }}" class="form-control" placeholder="08.00 - 16.00 WIB">
            </div>
            <div class="form-group">
                <label>Minggu & Hari Libur</label>
                <input type="text" name="operational_sunday" value="{{ $settings['operational_sunday'] ?? '' }}" class="form-control" placeholder="Tutup">
            </div>
        </div>

        {{-- MITRA --}}
        <h3 style="font-size:16px;font-weight:700;color:#6B3434;border-bottom:2px solid #6B3434;padding-bottom:8px;margin:24px 0 16px">🤝 Jumlah Mitra Aktif</h3>
        <div class="form-grid" style="grid-template-columns:repeat(3,1fr)">
            <div class="form-group">
                <label>Total Mitra</label>
                <input type="number" name="total_partners" value="{{ $settings['total_partners'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Toko Ritel</label>
                <input type="number" name="partner_toko_ritel" value="{{ $settings['partner_toko_ritel'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Reseller</label>
                <input type="number" name="partner_reseller" value="{{ $settings['partner_reseller'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Restoran & Cafe</label>
                <input type="number" name="partner_restaurant" value="{{ $settings['partner_restaurant'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Central Kitchen</label>
                <input type="number" name="partner_central_kitchen" value="{{ $settings['partner_central_kitchen'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Catering</label>
                <input type="number" name="partner_catering" value="{{ $settings['partner_catering'] ?? '' }}" class="form-control">
            </div>
            <div class="form-group">
                <label>SPPG</label>
                <input type="number" name="partner_sppg" value="{{ $settings['partner_sppg'] ?? '' }}" class="form-control">
            </div>
        </div>

        {{-- KONTEN HALAMAN --}}
        <h3 style="font-size:16px;font-weight:700;color:#6B3434;border-bottom:2px solid #6B3434;padding-bottom:8px;margin:24px 0 16px">📝 Konten Halaman</h3>
        <div class="form-group">
            <label>Judul Halaman Tentang Kami</label>
            <input type="text" name="about_title" value="{{ $settings['about_title'] ?? '' }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Isi Halaman Tentang Kami</label>
            <textarea name="about_content" class="form-control" rows="4">{{ $settings['about_content'] ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Prakata (tampil di homepage)</label>
            <textarea name="prakata_content" class="form-control" rows="4">{{ $settings['prakata_content'] ?? '' }}</textarea>
        </div>

        {{-- MEDIA SOSIAL --}}
        <h3 style="font-size:16px;font-weight:700;color:#6B3434;border-bottom:2px solid #6B3434;padding-bottom:8px;margin:24px 0 16px">📱 Media Sosial</h3>
        <div class="form-grid">
            <div class="form-group">
                <label>Instagram</label>
                <input type="url" name="instagram" value="{{ $settings['instagram'] ?? '' }}" class="form-control" placeholder="https://instagram.com/...">
            </div>
            <div class="form-group">
                <label>Facebook</label>
                <input type="url" name="facebook" value="{{ $settings['facebook'] ?? '' }}" class="form-control" placeholder="https://facebook.com/...">
            </div>
            <div class="form-group">
                <label>TikTok</label>
                <input type="url" name="tiktok" value="{{ $settings['tiktok'] ?? '' }}" class="form-control" placeholder="https://tiktok.com/@...">
            </div>
            <div class="form-group">
                <label>YouTube</label>
                <input type="url" name="youtube" value="{{ $settings['youtube'] ?? '' }}" class="form-control" placeholder="https://youtube.com/@...">
            </div>
        </div>
        <div class="form-group">
            <label>Google Maps Embed <small style="color:#888">(paste kode iframe lengkap atau URL yang bisa di-embed)</small></label>
            <textarea name="maps_embed" class="form-control" rows="3" placeholder="<iframe src=\"https://www.google.com/maps/embed?...\"></iframe>">{{ $settings['maps_embed'] ?? '' }}</textarea>
            <small style="color:#9a3412; margin-top: 6px; display:block;">Catatan: link share singkat seperti `https://maps.app.goo.gl/...` sering tidak bisa ditampilkan di iframe. Gunakan menu Google Maps: Share → Embed a map.</small>
        </div>

        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #eee;display:flex;gap:12px">
            <button type="submit" class="btn btn-primary">💾 Simpan Semua Pengaturan</button>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<style>
.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 20px; }
.form-control { width: 100%; padding: 9px 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; }
.form-control:focus { outline: none; border-color: #6B3434; box-shadow: 0 0 0 3px rgba(107,52,52,0.1); }
textarea.form-control { resize: vertical; }
</style>
@endsection
