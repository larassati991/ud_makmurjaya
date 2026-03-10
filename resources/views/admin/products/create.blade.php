@extends('admin.layout')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Tambah Produk Baru</h2>
    </div>

    @if ($errors->any())
        <div class="alert alert-error">
            <strong>Terjadi kesalahan:</strong>
            <ul style="margin: 10px 0; margin-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="max-width: 600px;">
            <div class="form-group">
                <label for="category_id">Kategori <span style="color: red;">*</span></label>
                <select id="category_id" name="category_id" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Nama Produk <span style="color: red;">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Contoh: Daging Sapi Premium" required>
                @error('name')
                    <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Deskripsi Produk</label>
                <textarea id="description" name="description" placeholder="Jelaskan detail produk, manfaat, cara penyajian, dll.">{{ old('description') }}</textarea>
                @error('description')
                    <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label for="price">Harga (Rp) <span style="color: red;">*</span></label>
                    <input type="number" id="price" name="price" value="{{ old('price') }}" min="0" step="1000" placeholder="0" required>
                    @error('price')
                        <span style="color: red; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="weight">Berat (kg)</label>
                    <input type="number" id="weight" name="weight" value="{{ old('weight') }}" min="0" step="0.1" placeholder="0.5">
                    @error('weight')
                        <span style="color: red; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="image">Gambar Produk</label>
                <input type="file" id="image" name="image" accept="image/*">
                <small style="color: #666; display: block; margin-top: 5px;">Format: JPG, PNG, GIF (Maksimal 2MB)</small>
                @error('image')
                    <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
                <img id="preview" class="image-preview" style="display: none;">
            </div>

            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    <span>Produk Aktif (Tampil di website)</span>
                </label>
            </div>

            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-success">💾 Simpan Produk</button>
                <a href="{{ route('admin.products.index') }}" class="btn" style="background: #6c757d; color: white;">Batal</a>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('preview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
