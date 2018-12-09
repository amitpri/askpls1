<?php

namespace App\Providers;

use App\Review;
use App\Account;
use App\Feedback;
use App\GroupProfile;
use App\DataImport;
use App\Topic;
use App\TopicLog;
use App\TopicMail;

use App\Policies\ReviewPolicy;
use App\Policies\AccountPolicy;
use App\Policies\FeedbackPolicy;
use App\Policies\GroupProfilePolicy;
use App\Policies\DataImportPolicy;
use App\Policies\TopicPolicy;
use App\Policies\TopicLogPolicy;
use App\Policies\TopicMailPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
 
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',        
        Review::class => ReviewPolicy::class,
        Account::class => AccountPolicy::class,
        Feedback::class => FeedbackPolicy::class,
        GroupProfile::class => GroupProfilePolicy::class,
        DataImport::class => DataImportPolicy::class,
        TopicLog::class => TopicLogPolicy::class,
        TopicMail::class => TopicMailPolicy::class,
    ];

 
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
