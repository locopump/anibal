<?php


namespace App\Models\Services;


use App\Models\Repositories\ProductosInterface;
use Illuminate\Database\QueryException;

class ProductosService
{
    protected $productos_repo;

    public function __construct(ProductosInterface $productos)
    {
        $this->productos_repo = $productos;
    }

    public function getAll()
    {
        $code = 400;
        $headers = ['Content-Type' => 'application/json; charset=UTF-8'];

        try {
            $prod = $this->productos_repo->getAll();

            $code = 200;
            $response = [
                'success' => true,
                'data' => $prod,
                'message' => 'List successful',
                'code' => $code,
            ];
        } catch (QueryException $e) {
            $response = [
                'success' => false,
                'error' => [
                    'type' => 'Query',
                ],
                'message' => 'Error en la consulta, contactese con sistemas!',
                'code' => $code,
            ];
        }

        return response()->json($response, $code, $headers);
    }
}
