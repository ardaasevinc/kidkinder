<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{

    public function aboutus()
    {
        return view('backend.b-aboutus');
    }

    public function create()
    {
        return view('backend.b-aboutus');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'baslik1' => 'required|string|max:255',
            'baslik2' => 'required|string|max:255',
            'aciklama' => 'required|string',
            'goruntul1' => 'nullable|image',
            'goruntul2' => 'nullable|image',
            'buton_metni' => 'required|string|max:255',
            'tarih' => 'required|date',
            'kisa_metin1' => 'required|string|max:255',
            'kisa_metin2' => 'required|string|max:255',
            'kisa_metin3' => 'required|string|max:255',
        ]);

        // Görselleri kaydetme
        if ($request->hasFile('goruntul1')) {
            $data['goruntul1'] = $request->file('goruntul1')->store('uploads', 'public');
        }

        if ($request->hasFile('goruntul2')) {
            $data['goruntul2'] = $request->file('goruntul2')->store('uploads', 'public');
        }

        Aboutus::create($data);

        return redirect()->back()->with('success', 'Form başarıyla gönderildi!');
    }


}
