<?php

namespace App\Http\Controllers;

use App\Models\TipoDeDocumento;
use Illuminate\Http\Request;

/**
 * Class TipoDeDocumentoController
 * @package App\Http\Controllers
 */
class TipoDeDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoDeDocumentos = TipoDeDocumento::paginate();

        return view('tipo-de-documento.index', compact('tipoDeDocumentos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoDeDocumentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoDeDocumento = new TipoDeDocumento();
        return view('tipo-de-documento.create', compact('tipoDeDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoDeDocumento::$rules);

        $tipoDeDocumento = TipoDeDocumento::create($request->all());

        return redirect()->route('tipo-de-documentos.index')
            ->with('success', 'TipoDeDocumento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoDeDocumento = TipoDeDocumento::find($id);

        return view('tipo-de-documento.show', compact('tipoDeDocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoDeDocumento = TipoDeDocumento::find($id);

        return view('tipo-de-documento.edit', compact('tipoDeDocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoDeDocumento $tipoDeDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoDeDocumento $tipoDeDocumento)
    {
        request()->validate(TipoDeDocumento::$rules);

        $tipoDeDocumento->update($request->all());

        return redirect()->route('tipo-de-documentos.index')
            ->with('success', 'TipoDeDocumento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoDeDocumento = TipoDeDocumento::find($id)->delete();

        return redirect()->route('tipo-de-documentos.index')
            ->with('success', 'TipoDeDocumento deleted successfully');
    }
}
