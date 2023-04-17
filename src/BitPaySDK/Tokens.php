<?php

namespace BitPaySDK;

use BitPaySDK\Model\Facade;
use Exception;

/**
 * Class Tokens
 * @package Bitpay
 */
class Tokens
{
    /**
     * @var string|null
     */
    protected ?string $merchant;

    /**
     * @var string|null
     */
    protected ?string $payout;

    /**
     * @var string|null
     */
    protected ?string $pos;

    /**
     * Tokens constructor.
     * @param string|null $merchant
     * @param string|null $payout
     * @param string|null $pos
     */
    public function __construct(?string $merchant = null, ?string $payout = null, ?string $pos = null)
    {
        $this->merchant = $merchant;
        $this->payout = $payout;
        $this->pos = $pos;
    }

    public static function loadFromArray(array $tokens): Tokens
    {
        $instance = new self();

        foreach ($tokens as $facade => $token) {
            $instance->{$facade} = $token;
        }

        return $instance;
    }

    /**
     * @param $facade
     * @return string|null
     * @throws Exception
     */
    public function getTokenByFacade($facade): ?string
    {
        $token = null;
        switch ($facade) {
            case Facade::Merchant:
                $token = $this->merchant;
                break;
            case Facade::Payout:
                $token = $this->payout;
                break;
            case Facade::Pos:
                $token = $this->pos;
                break;
        }

        if ($token) {
            return $token;
        }

        throw new Exception("given facade does not exist or no token defined for the given facade");
    }

    /**
     * @param string $merchant
     */
    public function setMerchantToken(string $merchant)
    {
        $this->merchant = $merchant;
    }

    /**
     * @return string|null
     */
    public function getPayoutToken(): ?string
    {
        return $this->payout;
    }

    /**
     * @param string $payout
     */
    public function setPayoutToken(string $payout): void
    {
        $this->payout = $payout;
    }
}
