<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function storia()
    {
        return view('navbar-pages.storia');
    }

    public function direttivo()
    {
        $members = [
            [
                'role' => 'Presidente',
                'name' => 'Claudio Bruno',
                'mail' => 'claudio.bruno@vbcvallestura.it',
                'img' => 'BrunoClaudio.png',
            ],
            [
                'role' => 'Vice Presidente',
                'name' => 'Carola Filiputti',
                'mail' => 'carola.filiputti@vbcvallestura.it',
                'img' => 'FiliputtiCarola.png',
            ],
            [
                'role' => 'Segretario',
                'name' => 'Valter Bruno',
                'mail' => 'valter.bruno@vbcvallestura.it',
                'img' => 'BrunoValter.png',
            ],
            [
                'role' => 'Consigliere',
                'name' => 'Anita Pepino',
                'mail' => 'anita.pepino@vbcvallestura.it',
                'img' => 'PepinoAnita.png',
            ],
            [
                'role' => 'Consigliere',
                'name' => 'Mario Brocchiero',
                'mail' => '#',
                'img' => 'BrocchieroMario.png',
            ],
            [
                'role' => 'Consigliere',
                'name' => 'Francesco Bruno',
                'mail' => 'francesco.bruno@vbcvallestura.it',
                'img' => 'BrunoFrancesco.png',
            ],
            [
                'role' => 'Consigliere',
                'name' => 'Cristian Faggio',
                'mail' => 'cristian.faggio@vbcvallestura.it',
                'img' => 'FaggioCristian.png',
            ],
        ];

        return view('navbar-pages.direttivo', compact('members'));
    }

    public function staff_tecnico()
    {
        return view('navbar-pages.staff_tecnico');
    }

    public function squadre()
    {
        return view('navbar-pages.squadre');
    }
}
