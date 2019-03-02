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

namespace Elatebrain\FBComments\Model\Config\Source;


/**
 *
 */
class ColorScheme implements \Magento\Framework\Option\ArrayInterface
{

    /**
     *
     */
    public const LIGHT = "light";
    /**
     *
     */
    public const DARK = "dark";

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::LIGHT, 'label' => __('Light')],
            ['value' => self::DARK, 'label' => __('Dark')]
        ];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [self::LIGHT => __('Light'), self::DARK => __('Dark')];
    }
}