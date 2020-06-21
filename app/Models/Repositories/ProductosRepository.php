<?php


namespace App\Models\Repositories;

use App\Models\Entities\Productos;


class ProductosRepository implements ProductosInterface
{
    public function getAll()
    {
        return Productos::get();
    }
}
