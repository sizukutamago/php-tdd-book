<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/05/25
 * Time: 15:29
 */

class FibonacciTest extends \PHPUnit\Framework\TestCase
{
    public function fib(int $n): int
    {
        if ($n === 0) return 0;
        if ($n === 1) return 1;
        return $this->fib($n - 1) + $this->fib($n - 2);
    }

    /** @test */
    public function testFibonacci()
    {
        $cases = [
            0 => 0,
            1 => 1,
            2 => 1,
            3 => 2
        ];

        for ($i = 0; $i < count($cases); ++$i) {
            $this->assertEquals($cases[$i], $this->fib($i));
        }
    }
}
