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
            'tel-jp' => '0612345678',
        ];

        $this->testInputs = [
            'name' => [
                '' => false,
            ],
            'tel-jp' => [
                '' => true,
                '09012345678' => true,
                '090123456789' => false,
                '090123456' => false,
                '０9012345678' => false,
            ],
        ];
    }
}
