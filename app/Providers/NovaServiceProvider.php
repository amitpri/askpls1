<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;

use App\Nova\Profile;
use App\Nova\Group;
use App\Nova\Topic;
use App\Nova\Review;
use App\Nova\Account;
use App\Nova\Invite;
use App\Nova\Member;
use App\Nova\Payment;
use App\Nova\Setting;
use App\Nova\Company; 
use App\Nova\Feedback; 
use App\Nova\User;

use Silvanite\NovaToolPermissions\NovaToolPermissions; 

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    protected function resources()
      { 
             Nova::resources([

                Profile::class,
                Group::class,
                Topic::class,
                Review::class, 
                Account::class,
                
       //         Member::class,
       //         Invite::class,
      //          User::class,
       //         Payment::class, 
                Setting::class,
      //          Company::class,

                Feedback::class

                

             ]);
        
     }

    public function boot()
    {
        parent::boot();

   //     Nova::style('askpls',asset('css/askpls.css'));
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
 //       Gate::define('viewNova', function ($user) {
  //          return in_array($user->email, [
  //              //
    //        ]);
    //    });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [

    //        new NovaToolPermissions(), 

        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}