<?php

namespace App\Http\Controllers;

use App\Models\FormaDePago;
use Illuminate\Http\Request;

/**
 * Class FormaDePagoController
 * @package App\Http\Controllers
 */
class FormaDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaDePagos = FormaDePago::paginate();

        return view('forma-de-pago.index', compact('formaDePagos'))
            ->with('i', (request()->input('page', 1) - 1) * $formaDePagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formaDePago = new FormaDePago();
        return view('forma-de-pago.create', compact('formaDePago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FormaDePago::$rules);

        $formaDePago = FormaDePago::create($request->all());

        return redirect()->route('forma-de-pagos.index')
            ->with('success', 'FormaDePago created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formaDePago = FormaDePago::find($id);

        return view('forma-de-pago.show', compact('formaDePago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formaDePago = FormaDePago::find($id);

        return view('forma-de-pago.edit', compact('formaDePago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FormaDePago $formaDePago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormaDePago $formaDePago)
    {
        request()->validate(FormaDePago::$rules);

        $formaDePago->update($request->all());

        return redirect()->route('forma-de-pagos.index')
            ->with('success', 'FormaDePago updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $formaDePago = FormaDePago::find($id)->delete();

        return redirect()->route('forma-de-pagos.index')
            ->with('success', 'FormaDePago deleted successfully');
    }
}
