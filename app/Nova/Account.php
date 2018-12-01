<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;

use Laravel\Nova\Resource as NovaResource;
use Laravel\Nova\Http\Requests\NovaRequest;

class Account extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */

    public static $group = "3.Admin";

    public static $model = 'App\\Account';

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

    public static function searchable()
    {
        return false;
    }

    public static function indexQuery(NovaRequest $request, $query)
    {

        return $query->where('id', $request->user()->id);

    }

    
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable()->hideFromIndex(),
            
            new Panel('Personal Details', $this->personalFields()),  

            Image::make('Photo')->hideFromIndex(),

            new Panel('Address Information', $this->addressFields()),
        ];
    }

    protected function personalFields()
    {
        return [ 

            Text::make('Name') 
                ->rules('required', 'max:255'),

            Text::make('Email') 
                ->rules('required', 'email', 'max:254')
                ->withMeta(['extraAttributes' => [
                          'readonly' => true
                    ]])
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Number::make('phone'),

            Number::make('phone2')->hideFromIndex(),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:6')
                ->updateRules('nullable', 'string', 'min:6'),          
        ];
    }

    protected function addressFields()
    {
        return [
            Place::make('Address', 'address_line_1')->hideFromIndex(),
            Text::make('Address Line 2')->hideFromIndex(),
            Text::make('City')->hideFromIndex(),
            Text::make('State')->hideFromIndex(),
            Text::make('Postal Code')->hideFromIndex(),
            Country::make('Country')->hideFromIndex(),
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
