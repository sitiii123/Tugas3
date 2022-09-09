<?php

namespace App\Http\Controllers;

class ProdukController extends Controller
{
    function index()
    {
        return view('produk.index');
    }
    function create()
    {
        return view('produk.create');
    }
    function store()
    {
        return view('produk.store');
    }
    function show()
    {
        return view('produk.show');
    }
    function edit()
    {
        return view('produk.edit');
    }
    function update()
    {
        return view('produk.update');
    }
    function destroy()
    {
        return view('produk.destroy');
    }
}
