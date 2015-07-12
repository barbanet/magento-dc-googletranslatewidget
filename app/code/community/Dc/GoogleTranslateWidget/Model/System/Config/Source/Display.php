<?php
/**
 * Dc_GoogleTranslateWidget
 * 
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Dc
 * @package    Dc_GoogleTranslateWidget
 * @copyright  Copyright (c) 2013-2015 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Dc_GoogleTranslateWidget_Model_System_Config_Source_Display
{

    const SIMPLE     = 1;
    const HORIZONTAL = 2;
    const VERTICAL   = 3;

    /**
     * Display formats.
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = array(
                    array(
                        'value' => self::SIMPLE,
                        'label' => Mage::helper('googletranslatewidget')->__('Simple')
                    ),
                    array(
                        'value' => self::HORIZONTAL,
                        'label' => Mage::helper('googletranslatewidget')->__('Horizontal')
                    ),
                    array(
                        'value' => self::VERTICAL,
                        'label' => Mage::helper('googletranslatewidget')->__('Vertical')
                    )
        );
        return $options;
    }

}
