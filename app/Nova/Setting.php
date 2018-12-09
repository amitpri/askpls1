<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
 
 
use Laravel\Nova\Fields\Number;

use Laravel\Nova\Fields\Select;

use Outhebox\NovaHiddenField\HiddenField;
use Laravel\Nova\Resource as NovaResource;
use Laravel\Nova\Http\Requests\NovaRequest;

class Setting extends Resource
{

    public static $group = "3.Admin";

    public static $model = 'App\\Setting';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [

        'id', 'name', 'email', 
    ];


  

    
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable()->hideFromIndex(),

            HiddenField::make('User', 'user_id')->current_user_id()->hideFromIndex(),

            Select::make('Key')->options([
                '1' => 'Recieves Marketing Mail',
                'M' => 'Profile Searchable', 
            ])->sortable()
                ->rules('required', 'max:255'),

            Text::make('Value')
                ->sortable()
                ->rules('required', 'max:255'),

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
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            
        ];
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
