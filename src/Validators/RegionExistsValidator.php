<?php

namespace Zbxin\Region\Validators;

use Zbxin\Region\Region;

class RegionExistsValidator
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
        return !empty($value) ? Region::whereId($value)->exists() : true;
    }
}
