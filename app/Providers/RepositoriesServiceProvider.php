<?php


namespace App\Providers;


use App\Models\Repositories\ProductosInterface;
use App\Models\Repositories\ProductosRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app->bind(ProductosInterface::class, ProductosRepository::class);
    }
}
