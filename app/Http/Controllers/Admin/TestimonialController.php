<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function __construct()
    {
        if (!session()->get('admin_authenticated')) {
            redirect()->route('admin.login')->send();
        }
    }

    public function index()
    {
        $testimonials = Testimonial::orderByDesc('created_at')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_type' => 'nullable|string|max:255',
            'testimonial'   => 'required|string',
            'rating'        => 'required|integer|min:1|max:5',
            'photo'         => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '_' . \Illuminate\Support\Str::slug($request->name) . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('testimonials', $filename, 'public');
            $validated['photo'] = 'testimonials/' . $filename;
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_type' => 'nullable|string|max:255',
            'testimonial'   => 'required|string',
            'rating'        => 'required|integer|min:1|max:5',
            'photo'         => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('photo')) {
            // Hapus foto lama
            if ($testimonial->photo && Storage::disk('public')->exists($testimonial->photo)) {
                Storage::disk('public')->delete($testimonial->photo);
            }
            $photo = $request->file('photo');
            $filename = time() . '_' . \Illuminate\Support\Str::slug($request->name) . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('testimonials', $filename, 'public');
            $validated['photo'] = 'testimonials/' . $filename;
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni berhasil diperbarui!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo && Storage::disk('public')->exists($testimonial->photo)) {
            Storage::disk('public')->delete($testimonial->photo);
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni berhasil dihapus!');
    }

    public function toggle(Testimonial $testimonial)
    {
        $testimonial->update(['is_active' => !$testimonial->is_active]);
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Status testimoni berhasil diubah!');
    }
}
