<?php

namespace App\Http\Controllers;

use App\Models\Services\ProductosService;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    protected $productos_service;

    public function __construct(ProductosService $productos)
    {
        $this->productos_service = $productos;
    }

    public function getAll(Request $request)
    {
        return $this->productos_service->getAll();
    }

}
