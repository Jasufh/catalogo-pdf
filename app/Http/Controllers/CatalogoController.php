<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogos = Catalogo::with('productos')->get();

        return view('dashboard', compact('catalogos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $catalogo = Catalogo::find($id);

        return view('catalogo.create', compact('catalogo'));
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required'
        ]);

        $catalogo = new Catalogo();
        $catalogo->nombre = $request->nombre;
        $catalogo->save();

        return redirect()->route('catalogo.create', $catalogo->id);

    }

    public function agregarModelo(Request $request){

        $request->validate([
            "modelo" => 'required'
        ]);


    }

    public function report()
    {
        $pdf = Pdf::loadView('pdf.catalogo');

        return $pdf->stream('catalogo_pdf.pdf');
    }


}
