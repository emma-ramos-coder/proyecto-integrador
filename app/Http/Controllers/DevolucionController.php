<?php

namespace App\Http\Controllers;

use App\Models\DetalleFactura;
use App\Models\Devolucion;
use Illuminate\Http\Request;

/**
 * Class DevolucionController
 * @package App\Http\Controllers
 */
class DevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devolucions = Devolucion::paginate();

        return view('devolucion.index', compact('devolucions'))
            ->with('i', (request()->input('page', 1) - 1) * $devolucions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devolucion = new Devolucion();
        $detalle_facturas = DetalleFactura::pluck('id','id');
        return view('devolucion.create', compact('devolucion','detalle_facturas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Devolucion::$rules);

        $devolucion = Devolucion::create($request->all());

        return redirect()->route('devolucions.index')
            ->with('success', 'Devolucion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $devolucion = Devolucion::find($id);

        return view('devolucion.show', compact('devolucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $devolucion = Devolucion::find($id);
        $detalle_facturas = DetalleFactura::pluck('id','id');
        return view('devolucion.edit', compact('devolucion','detalle_facturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Devolucion $devolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devolucion $devolucion)
    {
        request()->validate(Devolucion::$rules);

        $devolucion->update($request->all());

        return redirect()->route('devolucions.index')
            ->with('success', 'Devolucion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $devolucion = Devolucion::find($id)->delete();

        return redirect()->route('devolucions.index')
            ->with('success', 'Devolucion deleted successfully');
    }
}
