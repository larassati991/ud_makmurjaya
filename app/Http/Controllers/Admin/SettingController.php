<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        if (!session()->get('admin_authenticated')) {
            redirect()->route('admin.login')->send();
        }
    }

    public function index()
    {
        $settings = Setting::orderBy('key')->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);

        foreach ($data as $key => $value) {
            if ($key === 'maps_embed') {
                $value = trim((string) $value);
                $decoded = html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');

                // Prefer iframe src="..." if present.
                if (preg_match('/src\s*=\s*["\']([^"\']+)["\']/i', $decoded, $matches)) {
                    $value = $matches[1];
                } elseif (preg_match('/https?:\/\/[^\s"\']+/i', $decoded, $matches)) {
                    // Fallback: pick first URL from malformed text.
                    $value = $matches[0];
                } else {
                    $value = '';
                }
            }

            Setting::set($key, $value ?? '');
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Pengaturan berhasil disimpan!');
    }
}
