<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_SeoDashboard
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\SeoDashboard\Model\ResourceModel\Issue;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mageplaza\SeoDashboard\Model\Issue;
use Mageplaza\SeoDashboard\Model\ResourceModel\Issue as IssueResourceModel;

/**
 * Class Collection
 * @package Mageplaza\SeoDashboard\Model\ResourceModel\Issue
 */
class Collection extends AbstractCollection
{
    /**
     * @type string
     */
    protected $_idFieldName = 'issue_id';

    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init(Issue::class, IssueResourceModel::class);
    }
}
