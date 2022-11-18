<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */
namespace Magefan\AutoCurrencySwitcher\Plugin\Directory\Model;

use Magento\Directory\Model\Currency;
use Magefan\AutoCurrencySwitcher\Model\Config;
use Magefan\AutoCurrencySwitcher\Model\Config\Source\Round\Algorithm as RoundAlgorithm;
/**
 * Class CurrencyPlugin
 *
 * @package Magefan\AutoCurrencySwitcher\Plugin\Directory\Model
 */
class CurrencyPlugin
{
    /**
     * @var \Magefan\AutoCurrencySwitcher\Model\Config
     */
    protected $config;

    /**
     * ContexPlugin constructor.
     *
     * @param \Magefan\AutoCurrencySwitcher\Model\Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    /**
     * @param Currency $subject
     * @param callable $proceed
     * @param float $price
     * @param mixed $toCurrency
     * @return float
     */
    public function aroundConvert(Currency $subject, callable $proceed, $price, $toCurrency)
    {
        $result = $proceed($price, $toCurrency);

        if ($this->config->isEnabled()
            && $this->config->isEnabledRoundPrices()
            && $subject->getCode() == $this->config->getBaseCurrency()
        ) {
            if ($result == $price
                && !$this->config->isEnabledRoundBasePrices()
            ) {
                return $result;
            }

            return $this->getRoundPrice($result);
        }

        return $result;
    }

    /**
     * Retrieve rounded price
     *
     * @param  $result
     * @return float|int
     */
    public function getRoundPrice($result)
    {
        $roundAlgorithm = $this->config->getRoundAlgorithm();

        if ($roundAlgorithm == RoundAlgorithm::ROUND) {
            $result = round($result);
        } elseif ($roundAlgorithm == RoundAlgorithm::CEIL) {
            $result = ceil($result);
        } elseif ($roundAlgorithm == RoundAlgorithm::FLOOR) {
            $result = floor($result);
        } elseif ($roundAlgorithm == RoundAlgorithm::ROUND_X) {
            $step = $this->config->getRoundStep();
            if ($step) {
                $result = $step * round($result/$step);
            } else {
                $result = round($result);
            }
        } elseif ($roundAlgorithm == RoundAlgorithm::CEIL_X) {
            $step = $this->config->getCeilStep();
            if ($step) {
                $result = $step * ceil($result/$step);
            } else {
                $result = ceil($result);
            }
        } elseif ($roundAlgorithm == RoundAlgorithm::FLOOR_X) {
            $step = $this->config->getFloorStep();
            if ($step) {
                $result = $step * floor($result/$step);
            } else {
                $result = floor($result);
            }
        } elseif ($roundAlgorithm == RoundAlgorithm::ROUND_99) {
            $result = round($result) - 0.01;
        } elseif ($roundAlgorithm == RoundAlgorithm::CEIL_99) {
            $result = ceil($result) - 0.01;
        } elseif ($roundAlgorithm == RoundAlgorithm::FLOOR_99) {
            $result = floor($result) - 0.01;
        } elseif ($roundAlgorithm == RoundAlgorithm::ROUND_95) {
            $result = round($result) - 0.05;
        } elseif ($roundAlgorithm == RoundAlgorithm::CEIL_95) {
            $result = ceil($result) - 0.05;
        } elseif ($roundAlgorithm == RoundAlgorithm::FLOOR_95) {
            $result = floor($result) - 0.05;
        }

        return $result;
    }
}
