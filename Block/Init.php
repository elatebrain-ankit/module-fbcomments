<?php
/**
 * ElateBrain
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the elatebrain.com license which is available at https://www.elatebrain.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer version in the future.
 * If you wish to customize this extension for your needs, please refer to https://magento.com for more information.
 *
 * @category    Elatebrain
 * @package     Elatebrain_FBComments
 * @version     1.0.1
 * @copyright   Copyright (c) 2019 Elatebrain (https://www.elatebrain.com/)
 * @license     https://www.elatebrain.com/LICENSE.txt
 */

namespace Elatebrain\FBComments\Block;


/**
 *
 */
class Init extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Elatebrain\FBComments\Helper\Data
     */
    protected $_helper;

    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $_url;

    /**
     * Init constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Review\Model\ResourceModel\Review\CollectionFactory $collectionFactory
     * @param \Elatebrain\FBComments\Helper\Data $helper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Review\Model\ResourceModel\Review\CollectionFactory $collectionFactory,
        \Elatebrain\FBComments\Helper\Data $helper,
        \Magento\Framework\UrlInterface $url,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        $this->_reviewsColFactory = $collectionFactory;
        $this->_helper = $helper;
        $this->_url = $url;
        parent::__construct($context, $data);

        $this->setTabTitle();
    }

    /**
     * @return mixed
     */
    public function getFBAppId()
    {
        return $this->_helper->getFacebookAppId();
    }

    /**
     * @return bool|string
     */
    protected function _toHtml()
    {
        if(!$this->_helper->isEnabled()){
            return false;
        }
        return parent::_toHtml();
    }

    /**
     * @return string
     */
    public function getCurrentUrl()
    {
        return $this->_url->getCurrentUrl();
    }
}