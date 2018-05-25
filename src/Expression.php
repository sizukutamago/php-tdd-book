<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/05/24
 * Time: 18:55
 */

namespace Sizukutamago\Tdd;


interface Expression
{
    public function reduce(Bank $bank, String $to): Money;

    public function plus(Expression $addend): Expression;

    public function times(int $multipliter): Expression;
}