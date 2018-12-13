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
use App\Nova\Actions\TestAction;

use Outhebox\NovaHiddenField\HiddenField;

use OwenMelbz\RadioField\RadioButton;

class Topic extends Resource
{ 

    public static $group = '2.Reviews';
    
    public static $model = 'App\Topic';
 
    public static $title = 'topic_name';

    public static $search = [
        
        'id', 'topic_name' , 'type'
    ];
  
    public function fields(Request $request)
    {
 

        return [
            ID::make()->sortable()->hideFromIndex(),

    //        Text::make('User Id')
    //                ->withMeta(['value' => $loggedinid, 'extraAttributes' => [
    //                      'readonly' => true,
    //                ]  ])->hideFromDetail(),

            HiddenField::make('User', 'user_id')->current_user_id()->hideFromIndex()->hideFromDetail(),

            Text::make('Topic Name')->sortable()->rules('required', 'max:255'), 

            RadioButton::make('Type')
            ->options([
                'Private' => 'Private',
                'Public' => 'Public',
            ])
            ->default('Private')->sortable() // optional
            ->skipTransformation(),

            HiddenField::make( 'url')->default('https://askpls.com/topics/' . str_random(10))->hideFromIndex()->hideFromDetail(),
  
            Text::make('Public URL' ,function(){

                if ( $this->type == 'Public'){

                    return $this->url;
                }

            }),

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

            new EmailTopicGroup,
       //     new TestAction,
        ];
    }
}
