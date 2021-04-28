<?php

namespace App\Providers;

use App\Http\Services\CustomerService;
use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\CustomerRepository;
use App\Http\Services\Impl\CustomerServiceImpl;
use App\Http\Repositories\Impl\CustomerRepositoryImpl;
use App\Http\Repositories\Impl\Payments\CreditCardPayment;
use App\Http\Repositories\Impl\Payments\PaypalPayment;
use App\Http\Repositories\PaymentRepository;
use App\Http\Services\Impl\PaymentServiceImpl;
use App\Http\Services\PaymentService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CustomerRepository::class,
            CustomerRepositoryImpl::class,
            PaypalPayment::class,
            CreditCardPayment::class,
            PaymentRepository::class
        );
        $this->app->singleton(
            CustomerService::class,
            CustomerServiceImpl::class,
            PaymentService::class,
            PaymentServiceImpl::class,
        );

        $this->app->singleton(
            PaypalPayment::class,
            CreditCardPayment::class,
            PaymentRepository::class
        );

        $this->app->singleton(
            PaymentService::class,
            PaymentServiceImpl::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
