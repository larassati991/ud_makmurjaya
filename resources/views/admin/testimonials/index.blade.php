@extends('admin.layout')

@section('title', 'Testimoni')

@section('content')
<div class="card">
    <div class="card-header" style="display:flex;justify-content:space-between;align-items:center">
        <h2>💬 Testimoni</h2>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">+ Tambah Testimoni</a>
    </div>

    @if(session('success'))
        <div style="background:#d4edda;color:#155724;padding:12px 16px;border-radius:6px;margin-bottom:16px;border:1px solid #c3e6cb;">
            ✅ {{ session('success') }}
        </div>
    @endif

    @if($testimonials->isEmpty())
        <div style="text-align:center;padding:60px 20px;color:#888">
            <div style="font-size:48px;margin-bottom:16px">💬</div>
            <p>Belum ada testimoni. <a href="{{ route('admin.testimonials.create') }}" style="color:#6B3434">Tambah sekarang</a></p>
        </div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama / Bisnis</th>
                    <th>Testimoni</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $t)
                <tr>
                    <td>
                        @if($t->photo)
                            <img src="{{ asset('storage/' . $t->photo) }}" style="width:50px;height:50px;border-radius:50%;object-fit:cover">
                        @else
                            <div style="width:50px;height:50px;border-radius:50%;background:#6B3434;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:18px">
                                {{ substr($t->name, 0, 1) }}
                            </div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $t->name }}</strong><br>
                        <span style="color:#666;font-size:13px">{{ $t->business_name }}</span><br>
                        @if($t->business_type)
                            <span style="color:#888;font-size:12px">{{ $t->business_type }}</span>
                        @endif
                    </td>
                    <td style="max-width:300px">
                        <span style="font-size:13px;color:#555">{{ Str::limit($t->testimonial, 100) }}</span>
                    </td>
                    <td>
                        <span style="color:#f59e0b;font-size:16px">
                            @for($i = 1; $i <= 5; $i++)
                                {{ $i <= $t->rating ? '★' : '☆' }}
                            @endfor
                        </span>
                    </td>
                    <td>
                        @if($t->is_active)
                            <span style="background:#d4edda;color:#155724;padding:3px 10px;border-radius:12px;font-size:12px;font-weight:600">Aktif</span>
                        @else
                            <span style="background:#f8d7da;color:#721c24;padding:3px 10px;border-radius:12px;font-size:12px;font-weight:600">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <div style="display:flex;gap:6px;flex-wrap:wrap">
                            {{-- Toggle --}}
                            <form method="POST" action="{{ route('admin.testimonials.toggle', $t) }}">
                                @csrf
                                <button type="submit" class="btn btn-secondary" style="padding:4px 10px;font-size:12px">
                                    {{ $t->is_active ? '🔴 Nonaktif' : '🟢 Aktif' }}
                                </button>
                            </form>
                            {{-- Edit --}}
                            <a href="{{ route('admin.testimonials.edit', $t) }}" class="btn btn-secondary" style="padding:4px 10px;font-size:12px">✏️ Edit</a>
                            {{-- Hapus --}}
                            <form method="POST" action="{{ route('admin.testimonials.destroy', $t) }}" onsubmit="return confirm('Hapus testimoni dari {{ $t->name }}?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding:4px 10px;font-size:12px">🗑️ Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
