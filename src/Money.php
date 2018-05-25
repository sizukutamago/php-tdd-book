<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/05/24
 * Time: 13:48
 */

namespace Sizukutamago\Tdd;


class Money implements Expression
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    public function __construct(int $amount, ?string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function toString(): string
    {
        return $this->amount . ' ' . $this->currency;
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount && $this->currency() === $money->currency();
    }

    public function plus(Expression $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }

    public function reduce(Bank $bank, String $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }
}
