@extends('admin.layout')

@section('title', 'Edit Testimoni')

@section('content')
<div class="card">
    <div class="card-header" style="display:flex;justify-content:space-between;align-items:center">
        <h2>✏️ Edit Testimoni</h2>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    @if($errors->any())
        <div style="background:#f8d7da;color:#721c24;padding:12px 16px;border-radius:6px;margin-bottom:16px;border:1px solid #f5c6cb;">
            <ul style="margin:0;padding-left:18px">
                @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="form-grid">
            <div class="form-group">
                <label>Nama <span style="color:red">*</span></label>
                <input type="text" name="name" value="{{ old('name', $testimonial->name) }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama Bisnis <span style="color:red">*</span></label>
                <input type="text" name="business_name" value="{{ old('business_name', $testimonial->business_name) }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tipe Bisnis</label>
                <input type="text" name="business_type" value="{{ old('business_type', $testimonial->business_type) }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Rating <span style="color:red">*</span></label>
                <select name="rating" class="form-control" required>
                    @for($i=5;$i>=1;$i--)
                        <option value="{{ $i }}" {{ old('rating',$testimonial->rating)==$i?'selected':'' }}>{{ $i }} Bintang {{ str_repeat('★',$i) }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Testimoni <span style="color:red">*</span></label>
            <textarea name="testimonial" class="form-control" rows="4" required>{{ old('testimonial', $testimonial->testimonial) }}</textarea>
        </div>

        <div class="form-group">
            <label>Foto</label>
            @if($testimonial->photo)
                <div style="margin-bottom:10px">
                    <img src="{{ asset('storage/' . $testimonial->photo) }}" style="width:80px;height:80px;border-radius:50%;object-fit:cover;border:2px solid #ddd">
                    <span style="color:#666;font-size:13px;display:block;margin-top:4px">Foto saat ini. Upload baru untuk mengganti.</span>
                </div>
            @endif
            <input type="file" name="photo" class="form-control" accept="image/*">
            <small style="color:#888">Format: JPG, PNG, GIF. Kosongkan jika tidak ingin mengganti.</small>
        </div>

        <div class="form-group">
            <label class="checkbox-label">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
                <span>Tampilkan di website</span>
            </label>
        </div>

        <div style="display:flex;gap:12px;margin-top:8px">
            <button type="submit" class="btn btn-primary">💾 Simpan Perubahan</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<style>
.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 20px; }
.form-control { width: 100%; padding: 9px 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; }
.form-control:focus { outline: none; border-color: #6B3434; box-shadow: 0 0 0 3px rgba(107,52,52,0.1); }
</style>
@endsection
