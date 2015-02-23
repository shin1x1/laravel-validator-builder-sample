<?php
namespace App\Validator;

use Shin1x1\ValidatorBuilder\ValidatorBuilder;
use Validator;

/**
 * Class SampleValidatorBuilder
 * @package App\Validator
 */
class SampleValidatorBuilder implements ValidatorBuilder
{
    /**
     * @param array $inputs
     * @return \Illuminate\Validation\Validator
     */
    public function create(array $inputs)
    {
        return Validator::make(
            $inputs,
            [
                'name' => 'required',
                'tel-jp' => 'regex:/\A[0-9]{10,11}\z/',
            ]
        );
    }
}