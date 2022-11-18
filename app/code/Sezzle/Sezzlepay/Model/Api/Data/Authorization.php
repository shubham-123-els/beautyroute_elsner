<?php
/*
 * @category    Sezzle
 * @package     Sezzle_Sezzlepay
 * @copyright   Copyright (c) Sezzle (https://www.sezzle.com/)
 */

namespace Sezzle\Sezzlepay\Model\Api\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use Sezzle\Sezzlepay\Api\Data\AmountInterface;
use Sezzle\Sezzlepay\Api\Data\AuthorizationInterface;

class Authorization extends AbstractExtensibleObject implements AuthorizationInterface
{

    /**
     * @inheritDoc
     */
    public function getUuid()
    {
        return $this->_get(self::UUID);
    }

    /**
     * @inheritDoc
     */
    public function setUuid($uuid)
    {
        $this->setData(self::UUID, $uuid);
    }

    /**
     * @inheritDoc
     */
    public function getLinks()
    {
        return $this->_get(self::LINKS);
    }

    /**
     * @inheritDoc
     */
    public function setLinks(array $links = null)
    {
        $this->setData(self::LINKS, $links);
    }

    /**
     * @inheritDoc
     */
    public function getAuthorizationAmount()
    {
        return $this->_get(self::AUTHORIZATION_AMOUNT);
    }

    /**
     * @inheritDoc
     */
    public function setAuthorizationAmount(AmountInterface $authorizationAmount = null)
    {
        $this->setData(self::AUTHORIZATION_AMOUNT, $authorizationAmount);
    }

    /**
     * @inheritDoc
     */
    public function getApproved()
    {
        return $this->_get(self::APPROVED);
    }

    /**
     * @inheritDoc
     */
    public function setApproved($approved)
    {
        $this->setData(self::APPROVED, $approved);
    }

    /**
     * @inheritDoc
     */
    public function getExpiration()
    {
        return $this->_get(self::EXPIRATION);
    }

    /**
     * @inheritDoc
     */
    public function setExpiration($expiration)
    {
        $this->setData(self::EXPIRATION, $expiration);
    }

    /**
     * @inheritDoc
     */
    public function getReleases()
    {
        return $this->_get(self::RELEASES);
    }

    /**
     * @inheritDoc
     */
    public function setReleases(array $releases = null)
    {
        $this->setData(self::RELEASES, $releases);
    }

    /**
     * @inheritDoc
     */
    public function getCaptures()
    {
        return $this->_get(self::CAPTURES);
    }

    /**
     * @inheritDoc
     */
    public function setCaptures(array $captures = null)
    {
        $this->setData(self::CAPTURES, $captures);
    }

    /**
     * @inheritDoc
     */
    public function getRefunds()
    {
        return $this->_get(self::REFUNDS);
    }

    /**
     * @inheritDoc
     */
    public function setRefunds(array $refunds = null)
    {
        $this->setData(self::REFUNDS, $refunds);
    }
}
