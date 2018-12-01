<?php

namespace App\Providers;

use App\Review;
use App\Account;
use App\Feedback;
use App\Policies\ReviewPolicy;
use App\Policies\AccountPolicy;
use App\Policies\FeedbackPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',        
        Review::class => ReviewPolicy::class,
        Account::class => AccountPolicy::class,
        Feedback::class => FeedbackPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
