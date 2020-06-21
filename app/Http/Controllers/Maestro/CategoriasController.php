<?php

namespace App\Http\Controllers\Maestro;

use App\Http\Controllers\Controller;
use App\Models\Services\ProductosService;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    protected $productos_service;

    public function __construct(ProductosService $service)
    {
        $this->productos_service = $service;
    }

    public function getProductos(Request $request)
    {
        return $this->productos_service->getAll();
    }
}
