<?php

namespace App\Http\Controllers\Cliente;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Barryvdh\DomPDF\Facade\Pdf;

class ClienteController extends Controller
{
    public function index() {

        $clientes = Cliente::get();

        return Inertia::render('Cliente/Index', [
            'clientes' => $clientes
        ]);
    }

    public function create() {

        return Inertia::render('Cliente/Create');
    }

    public function store(Request $request) {

        $request->validate([
            'nombres' => 'required'
        ]);

        $cliente = Cliente::create($request->all());
        
        return redirect()->route('cliente.index')->with('success', 'Se ha creado un cliente.');
    }

    public function exportarPdf() {

        $clientes = Cliente::all();

        $pdf = Pdf::loadView('pdf.cliente', compact('clientes'));

        return $pdf->download('clientes.pdf');
    }
    
}
