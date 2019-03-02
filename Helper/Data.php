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

namespace Elatebrain\FBComments\Helper;


/**
 *
 */
class Data extends \Elatebrain\Core\Helper\AbstractData
{
    /**
     * @param null $storeId
     * @return bool|mixed
     */
    public function isEnabled($storeId = null)
    {
        if($this->getFacebookAppId() == null){
            return false;
        }
        return $this->getConfig("ebfbcomments/general/enabled", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getFacebookAppId($storeId = null)
    {
        return $this->getConfig("ebfbcomments/general/fb_app_id", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getTabTitle($storeId = null)
    {
        return $this->getConfig("ebfbcomments/general/tab_title", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getCommentsPerPage($storeId = null)
    {
        return $this->getConfig("ebfbcomments/general/comments_per_page", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getBoxWidth($storeId = null)
    {
        return $this->getConfig("ebfbcomments/display/box_width", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getColorScheme($storeId = null)
    {
        return $this->getConfig("ebfbcomments/display/color_scheme", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getSortBy($storeId = null)
    {
        return $this->getConfig("ebfbcomments/display/default_order", $storeId);
    }
}