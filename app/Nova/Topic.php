<?php

namespace App\Nova;
 
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

use Laravel\Nova\Fields\Select;

use Laravel\Nova\Fields\BelongsToMany;

use Laravel\Nova\Fields\HasMany;

use App\Nova\Actions\EmailTopicGroup;

use Outhebox\NovaHiddenField\HiddenField;

class Topic extends Resource
{ 

    public static $group = '1.Review Setup';
    
    public static $model = 'App\Topic';
 
    public static $title = 'topic_name';

    public static $search = [
        
        'id', 'topic_name' , 'type'
    ];
 
    public function fields(Request $request)
    {
 

        return [
            ID::make()->sortable(),

    //        Text::make('User Id')
    //                ->withMeta(['value' => $loggedinid, 'extraAttributes' => [
    //                      'readonly' => true,
    //                ]  ])->hideFromDetail(),

            HiddenField::make('User', 'user_id')->current_user_id(),

            Text::make('Topic Name')->sortable()->rules('required', 'max:255'),

            Select::make('Type')->options([
                'Private' => 'Private',
                'Public' => 'Public', 
            ])->sortable()->rules('required', 'max:255'),
  
            Trix::make('Details')->alwaysShow()->rules('required', 'max:4000'),

            

            BelongsToMany::make('Group'),

            HasMany::make('Review')
        ];
    }

 
    public function cards(Request $request)
    {
        return [];
    }

 
    public function filters(Request $request)
    {
        return [];
    }

 
    public function lenses(Request $request)
    {
        return [];
    }

 
    public function actions(Request $request)
    {
        return [

            new EmailTopicGroup
        ];
    }
}
