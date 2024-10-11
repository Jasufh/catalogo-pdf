<?php

namespace App\Livewire;

use App\Models\Catalogo;
use App\Models\Producto;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;


class CatalogoAdd extends Component
{
    public $modelo = "";  // Campo para buscar productos
    public $catalogo;     // El catálogo actual
    public $productos = [];  // Lista de productos asociados al catálogo

    public function mount()
    {
        if ($this->catalogo) {
            $this->productos = $this->catalogo->productos()->get();
        }
    }

    public function save()
    {
        $producto = Producto::where('modelo', $this->modelo)->first();

        if (!$producto) {
            session()->flash('error', 'Producto no encontrado.');
            return;
        }

        if ($this->catalogo->productos()->where('producto_id', $producto->id)->exists()) {
            session()->flash('error', 'El producto ya está agregado al catálogo.');
            return;
        }

        if ($this->catalogo) {
            $this->catalogo->productos()->attach($producto->id);
        }

        $this->productos = $this->catalogo->productos()->get();

        $this->modelo = "";

        // Mensaje de éxito
        session()->flash('status', 'Producto agregado al catálogo exitosamente.');
    }

    public function report()
    {
        // Pasamos el catálogo y los productos a la vista PDF
        $pdf = Pdf::loadView('pdf.catalogo', [
            'catalogo' => $this->catalogo,
            'productos' => $this->catalogo->productos()->get()  // Pasamos los productos del catálogo
        ]);

        // Descargar o visualizar el PDF
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'catalogo_pdf.pdf'
        );
    }

    public function render()
    {
        // Renderizar la vista con la lista actualizada de productos
        return view('livewire.catalogo-add', [
            'productos' => $this->productos
        ]);
    }
}
