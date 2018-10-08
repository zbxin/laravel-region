<?php

namespace ZhiEq\Region\Validators;

use ZhiEq\Region\Region;

class RegionProvinceValidator
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
        return !empty($value) ? Region::whereId($value)->whereLevel(Region::LEVEL_PROVINCE)->exists() : true;
    }
}
