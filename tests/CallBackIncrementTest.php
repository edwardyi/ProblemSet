<?php
use ProblemSets\CallBack;
class CallBackIncrementTest extends \PHPUnit\Framework\TestCase
{
   public function setUp()
   {
       $this->callBack = new CallBack();
   }
   public function test_callback_increment()
   {
       
        $objs = [
            [3, 4],
            [0, 1]
        ];
        foreach($objs as $obj) {
            
            $input = $obj[0];
            $expected = $obj[1];
            $callback = function() use ($input) {return $input+1;};
            $this->assertEquals($expected, $this->callBack->action(1, $callback));   
        }
   }
}