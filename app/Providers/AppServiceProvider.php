<?php

namespace App\Providers;

use App\Reponsitory\BillRepositoryInterface;
use App\Reponsitory\CustomerRepositoryInterface;
use App\Reponsitory\EmployeeRepositoryInterface;
use App\Reponsitory\Impl\BillRepository;
use App\Reponsitory\Impl\CustomerRepository;
use App\Reponsitory\Impl\EmployeeRepository;
use App\Reponsitory\Impl\ProductRepository;
use App\Reponsitory\ProductRepositoryInterface;
use App\Service\BillServiceInterface;
use App\Service\CustomerServiceInterface;
use App\Service\EmployeeServiceInterface;
use App\Service\Impl\BillService;
use App\Service\Impl\CustomerService;
use App\Service\Impl\EmployeeService;
use App\Service\Impl\ProductService;
use App\Service\ProductServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(BillRepositoryInterface::class, BillRepository::class);
        $this->app->singleton(BillServiceInterface::class, BillService::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        URL::forceScheme('https');
    }
}
