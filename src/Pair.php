<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/05/25
 * Time: 12:11
 */

namespace Sizukutamago\Tdd;


class Pair
{
    /** @var string */
    private $from;

    /** @var string */
    private $to;

    public function __construct(String $from, String $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals($object): bool
    {
        /** @var Pair $pair */
        $pair = $object;
        return ($this->from === $pair->from && $this->to === $pair->to);
    }

    public function hashCode(): int
    {
        return 0;
    }
}
