<?php
namespace Outhebox\NovaFieldsAgent;

use Laravel\Nova\Http\Requests\NovaRequest;

trait HasNovaFieldsAgent
{
    /**
     * Fill the given fields for the model.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param \Illuminate\Database\Eloquent\Model     $model
     * @param \Illuminate\Support\Collection          $fields
     *
     * @return array
     */
    protected static function fillFields(NovaRequest $request, $model, $fields)
    {
        return parent::fillFields($request, $model, $fields);
    }
}
