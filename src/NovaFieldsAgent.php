<?php

namespace Outhebox\NovaFieldsAgent;

use Laravel\Nova\Fields\Field;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Traits\Macroable;

class NovaFieldsAgent
{
    use Macroable;


    /**
     * Hide field if the device is Mobile.
     *
     * @param \Laravel\Nova\Fields\Field $field
     *
     * @return \Laravel\Nova\Fields\Field
     */
    public static function HideFromIndexOnMobile(Field $field) {

        if(Agent::isMobile()) {
            return $field->hideFromIndex();
        }

        return $field;
    }

    /**
     * Hide field if the device is Tablet.
     *
     * @param \Laravel\Nova\Fields\Field $field
     *
     * @return \Laravel\Nova\Fields\Field
     */
    public static function HideFromIndexOnTablet(Field $field) {

        if(Agent::isTablet()) {
            return $field->hideFromIndex();
        }

        return $field;
    }

    /**
     * Hide field if the device is Mobile.
     *
     * @param \Laravel\Nova\Fields\Field $field
     *
     * @return \Laravel\Nova\Fields\Field
     */
    public static function hideFromDetailOnMobile(Field $field) {

        if(Agent::isMobile()) {
            return $field->hideFromDetail();
        }

        return $field;
    }

    /**
     * Hide field if the device is Tablet.
     *
     * @param \Laravel\Nova\Fields\Field $field
     *
     * @return \Laravel\Nova\Fields\Field
     */
    public static function hideFromDetailOnTablet(Field $field) {

        if(Agent::isTablet()) {
            return $field->hideFromDetail();
        }

        return $field;
    }
}
