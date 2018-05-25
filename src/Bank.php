<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/05/24
 * Time: 18:56
 */

namespace Sizukutamago\Tdd;




class Bank
{
    /**
     * @var array
     */
    private $rates;

    public function reduce(Expression $source, String $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate)
    {
        $this->rates[(new Pair($from, $to))->hashCode()] = $rate;
    }

    public function rate(String $from, String $to): int
    {
        if ($from === $to) return 1;
        return $this->rates[(new Pair($from, $to))->hashCode()];
    }
}
