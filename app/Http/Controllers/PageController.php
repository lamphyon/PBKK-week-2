<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { return view('home'); }

    public function about() { return view('about'); }

    public function agent($tema = null) {
        if ($tema === null) {
            return view('agentdefault', [
                'tema' => 'General Assistant Agent'
            ]);
        }

        return view('agent', compact('tema'));
    }

    public function mahasiswaDetail($nrp) { return view('mahasiswa', compact('nrp')); }
}