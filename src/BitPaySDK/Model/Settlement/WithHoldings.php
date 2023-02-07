<?php

declare(strict_types=1);

/**
 * @author BitPay Integrations <integrations@bitpay.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace BitPaySDK\Model\Settlement;

/**
 * Class WithHoldings
 *
 * @see <a href="https://bitpay.com/api/#rest-api-resources-settlements">Settlements</a>
 * @package BitPaySDK\Model\Settlement
 */
class WithHoldings
{
    protected ?float $amount = null;
    protected ?string $code = null;
    protected ?string $description = null;
    protected ?string $notes = null;
    protected ?string $label = null;
    protected ?string $bankCountry = null;

    /**
     * WithHoldings constructor.
     */
    public function __construct()
    {
    }

    /**
     * Gets amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Sets amount.
     *
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Gets code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets code.
     *
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets description.
     *
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Gets notes.
     *
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Sets notes.
     *
     * @param string $notes
     */
    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }

    /**
     * Gets label.
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Sets label.
     *
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Gets bank country.
     *
     * @return string|null
     */
    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }

    /**
     * Sets bank country.
     *
     * @param string $bankCountry
     */
    public function setBankCountry(string $bankCountry): void
    {
        $this->bankCountry = $bankCountry;
    }

    /**
     * Return an array with class values.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'amount' => $this->getAmount(),
            'code' => $this->getCode(),
            'description' => $this->getDescription(),
            'notes' => $this->getNotes(),
            'label' => $this->getLabel(),
            'bankCountry' => $this->getBankCountry(),
        ];
    }
}
