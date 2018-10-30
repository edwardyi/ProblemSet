<?php

class NumericFloatFunctionTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->number = new ProblemSets\NumericFloatFunction();
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function test_invalid_argument()
    {
        $num = 'otherType';
        $formatedNumber = $this->number->format($num);       
    }
    
    public function test_return_result()
    {
        $nums = [
            [9527,'9,527'],
            [3345678,'3,345,678'],
            [-123.45,'-123.45'],
            [-567.8,'-567.8'],
            [0, 0],
            [1234, '1,234']
        ];
        foreach($nums as $num)
        {
            $this->assertEquals($num[1], $this->number->format($num[0]));
        }
    }
    
    
}