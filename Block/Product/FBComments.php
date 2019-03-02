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

namespace Elatebrain\FBComments\Block\Product;
/**
 *
 */
class FBComments extends \Elatebrain\FBComments\Block\Init
{
    /**
     *
     */
    public function setTabTitle()
    {
        $title = __('Facebook Comments');
        if(($tabTitle = $this->_helper->getTabTitle()) != null){
            $title = $tabTitle;
        }
        $this->setTitle($title);
    }

    /**
     * @return mixed
     */
    public function getBoxWidth()
    {
        return $this->_helper->getBoxWidth();
    }

    /**
     * @return mixed
     */
    public function getNumberComments()
    {
        return $this->_helper->getCommentsPerPage();
    }

    /**
     * @return mixed
     */
    public function getSortBy()
    {
        return $this->_helper->getSortBy();
    }

    /**
     * @return mixed
     */
    public function getColorScheme()
    {
        return $this->_helper->getColorScheme();
    }
}