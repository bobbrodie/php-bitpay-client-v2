<?php

declare(strict_types=1);

/*
 * @author BitPay Integrations <integrations@bitpay.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace BitPaySDK\Model\Invoice;

/**
 * Class SupportedTransactionCurrencies. The currencies that may be used to pay this invoice.
 *
 * @see <a href="https://bitpay.com/api/#rest-api-resources-invoices-resource">REST API Invoices</a>
 *
 * @package BitPaySDK\Model\Invoice
 */
class SupportedTransactionCurrencies
{
    protected SupportedTransactionCurrency $btc;
    protected SupportedTransactionCurrency $bch;
    protected SupportedTransactionCurrency $eth;
    protected SupportedTransactionCurrency $usdc;
    protected SupportedTransactionCurrency $gusd;
    protected SupportedTransactionCurrency $pax;
    protected SupportedTransactionCurrency $xrp;
    protected SupportedTransactionCurrency $busd;
    protected SupportedTransactionCurrency $doge;
    protected SupportedTransactionCurrency $ltc;
    protected SupportedTransactionCurrency $wbtc;

    /**
     * SupportedTransactionCurrencies constructor.
     */
    public function __construct()
    {
        $this->btc = new SupportedTransactionCurrency();
        $this->bch = new SupportedTransactionCurrency();
        $this->eth = new SupportedTransactionCurrency();
        $this->usdc = new SupportedTransactionCurrency();
        $this->gusd = new SupportedTransactionCurrency();
        $this->pax = new SupportedTransactionCurrency();
        $this->xrp = new SupportedTransactionCurrency();
        $this->busd = new SupportedTransactionCurrency();
        $this->doge = new SupportedTransactionCurrency();
        $this->ltc = new SupportedTransactionCurrency();
        $this->wbtc = new SupportedTransactionCurrency();
    }

    /**
     * Gets BTC.
     *
     * @return SupportedTransactionCurrency
     */
    public function getBTC(): SupportedTransactionCurrency
    {
        return $this->btc;
    }

    /**
     * Sets BTC.
     *
     * @param SupportedTransactionCurrency $btc
     */
    public function setBTC(SupportedTransactionCurrency $btc): void
    {
        $this->btc = $btc;
    }

    /**
     * Gets BCH.
     *
     * @return SupportedTransactionCurrency
     */
    public function getBCH(): SupportedTransactionCurrency
    {
        return $this->bch;
    }

    /**
     * Sets BCH.
     *
     * @param SupportedTransactionCurrency $bch
     */
    public function setBCH(SupportedTransactionCurrency $bch): void
    {
        $this->bch = $bch;
    }

    /**
     * Gets ETH.
     *
     * @return SupportedTransactionCurrency
     */
    public function getETH(): SupportedTransactionCurrency
    {
        return $this->eth;
    }

    /**
     * Sets ETH.
     *
     * @param SupportedTransactionCurrency $eth
     */
    public function setETH(SupportedTransactionCurrency $eth): void
    {
        $this->eth = $eth;
    }

    /**
     * Gets USDC.
     *
     * @return SupportedTransactionCurrency
     */
    public function getUSDC(): SupportedTransactionCurrency
    {
        return $this->usdc;
    }

    /**
     * Sets USDC.
     *
     * @param SupportedTransactionCurrency $usdc
     */
    public function setUSDC(SupportedTransactionCurrency $usdc): void
    {
        $this->usdc = $usdc;
    }

    /**
     * Gets GUSD.
     *
     * @return SupportedTransactionCurrency
     */
    public function getGUSD(): SupportedTransactionCurrency
    {
        return $this->gusd;
    }

    /**
     * Sets GUSD.
     *
     * @param SupportedTransactionCurrency $gusd
     */
    public function setGUSD(SupportedTransactionCurrency $gusd): void
    {
        $this->gusd = $gusd;
    }

    /**
     * Gets PAX.
     *
     * @return SupportedTransactionCurrency
     */
    public function getPAX(): SupportedTransactionCurrency
    {
        return $this->pax;
    }

    /**
     * Sets PAX.
     *
     * @param SupportedTransactionCurrency $pax
     */
    public function setPAX(SupportedTransactionCurrency $pax): void
    {
        $this->pax = $pax;
    }

    /**
     * Gets XRP.
     *
     * @return SupportedTransactionCurrency
     */
    public function getXRP(): SupportedTransactionCurrency
    {
        return $this->xrp;
    }

    /**
     * Sets XRP.
     *
     * @param SupportedTransactionCurrency $xrp
     */
    public function setXRP(SupportedTransactionCurrency $xrp): void
    {
        $this->xrp = $xrp;
    }

    /**
     * Gets BUSD.
     *
     * @return SupportedTransactionCurrency
     */
    public function getBUSD(): SupportedTransactionCurrency
    {
        return $this->busd;
    }

    /**
     * Sets BUSD.
     *
     * @param SupportedTransactionCurrency $busd
     */
    public function setBUSD(SupportedTransactionCurrency $busd): void
    {
        $this->busd = $busd;
    }

    /**
     * Gets DOGE.
     *
     * @return SupportedTransactionCurrency
     */
    public function getDOGE(): SupportedTransactionCurrency
    {
        return $this->doge;
    }

    /**
     * Sets DOGE.
     *
     * @param SupportedTransactionCurrency $doge
     */
    public function setDOGE(SupportedTransactionCurrency $doge): void
    {
        $this->doge = $doge;
    }

    /**
     * Gets LTC.
     *
     * @return SupportedTransactionCurrency
     */
    public function getLTC(): SupportedTransactionCurrency
    {
        return $this->ltc;
    }

    /**
     * Sets LTC.
     *
     * @param SupportedTransactionCurrency $ltc
     */
    public function setLTC(SupportedTransactionCurrency $ltc): void
    {
        $this->ltc = $ltc;
    }

    /**
     * Gets WBTC.
     *
     * @return SupportedTransactionCurrency
     */
    public function getWBTC(): SupportedTransactionCurrency
    {
        return $this->wbtc;
    }

    /**
     * Sets WBTC.
     *
     * @param SupportedTransactionCurrency $wbtc
     */
    public function setWBTC(SupportedTransactionCurrency $wbtc): void
    {
        $this->wbtc = $wbtc;
    }

    /**
     * Return array with details for currencies.
     *
     * @return array
     */
    public function toArray(): array
    {
        $elements = [
            'btc'  => $this->getBTC()->toArray(),
            'bch'  => $this->getBCH()->toArray(),
            'eth'  => $this->getETH()->toArray(),
            'usdc' => $this->getUSDC()->toArray(),
            'gusd' => $this->getGUSD()->toArray(),
            'pax'  => $this->getPAX()->toArray(),
            'xrp'  => $this->getXRP()->toArray(),
            'busd' => $this->getBUSD()->toArray(),
            'doge' => $this->getDOGE()->toArray(),
            'ltc' => $this->getLTC()->toArray(),
            'wbtc' => $this->getWBTC()->toArray(),
        ];

        foreach ($elements as $key => $value) {
            if (empty($value)) {
                unset($elements[$key]);
            }
        }

        return $elements;
    }
}
