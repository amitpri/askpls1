<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;

use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest; 

use App\Nova\Metrics\GroupCount; 

use Laravel\Nova\Fields\BelongsToMany;

use Outhebox\NovaHiddenField\HiddenField;

class Group extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */

    public static $group = '1.Review Setup';

    public static $model = 'App\Group';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            HiddenField::make('User', 'user_id')->current_user_id(),

            Text::make('Title')->rules('required', 'max:255'),

            Trix::make('Body'),
 
            BelongsToMany::make('Profiles'),

            BelongsToMany::make('Topics')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [ 
            
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}