<?php

namespace Zbxin\Region;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class RegionServiceProvider extends ServiceProvider
{
  protected $defer = true;

  protected $validators = [
    'region_exists',
    'region_level',
    'region_province',
    'region_province_exists',
    'region_city',
    'region_city_exists',
    'region_county',
    'region_county_exists'
  ];

  /**
   * @return \Illuminate\Validation\Factory
   */

  protected function validator()
  {
    return $this->app['validator'];
  }

  public function boot()
  {
    foreach ($this->validators as $validator) {
      $this->validator()->extend($validator, 'Zbxin\Region\Validators\\' . Str::studly($validator) . 'Validator@validator');
    }
  }
}
