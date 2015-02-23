<?php
namespace App\Test;

use App\Validator\SampleValidatorBuilder;
use Shin1x1\ValidatorBuilder\ValidatorBuilderTestTrait;
use TestCase;

/**
 * Class SampleValidatorBuilderTest
 * @package App\Validator
 */
class SampleValidatorBuilderTest extends TestCase
{
    use ValidatorBuilderTestTrait;

    /**
     * setUp
     */
    public function setUp()
    {
        parent::setUp();
        $this->builder = new SampleValidatorBuilder();

        $this->okInputs = [
            'name' => 'abc',
        ];

        $this->testInputs = [
            'name' => [
                '' => false,
            ],
        ];
    }
}
