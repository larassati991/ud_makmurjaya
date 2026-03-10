@extends('admin.layout')
@section('title', 'Edit Kategori')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Edit Kategori: {{ $category->name }}</h2>
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
    <form action="{{ route('admin.categories.update', $category) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div style="max-width: 600px;">
            <div class="form-group">
                <label for="name">Nama Kategori <span style="color: red;">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                @error('name')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" name="description">{{ old('description', $category->description) }}</textarea>
                @error('description')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Gambar Kategori</label>
                @if ($category->image)
                <div style="margin-bottom: 10px;">
                    <p style="margin: 0; color: #666; font-size: 13px;">Gambar saat ini:</p>
                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="image-preview">
                </div>
                @endif
                <input type="file" id="image" name="image" accept="image/*">
                <small style="color: #666; display: block; margin-top: 5px;">Format: JPG, PNG, GIF (Max 2MB)</small>
                @error('image')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
                <img id="preview" class="image-preview" style="display: none;">
            </div>
            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $category->is_active) ? 'checked' : '' }}>
                    <span>Kategori Aktif (Tampil di website)</span>
                </label>
            </div>
            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="{{ route('admin.categories.index') }}" class="btn" style="background: #6c757d; color: white;">Batal</a>
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
