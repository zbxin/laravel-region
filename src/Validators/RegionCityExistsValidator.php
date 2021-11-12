<?php

namespace Zbxin\Region\Validators;

use Zbxin\Region\Region;

class RegionCityExistsValidator
{

    /**
     * @param string $attribute
     * @param $value
     * @param array $parameters
     * @param \Illuminate\Validation\Validator $validator
     * @return bool
     */
    public function validator($attribute, $value, $parameters, $validator)
    {
        return !empty($value) ? Region::whereId($value)->whereLevel(Region::LEVEL_CITY)->exists() : true;
    }
}
