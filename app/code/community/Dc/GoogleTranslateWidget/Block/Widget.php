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

class Dc_GoogleTranslateWidget_Block_Widget extends Mage_Core_Block_Template
{

    /**
     * Checks if module is enable.
     *
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/enabled');
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/code');
    }

    /**
     * @return bool|string
     */
    public function getDisplay()
    {
        $_display = Mage::app()->getStore()->getConfig('googletranslatewidget/settings/display');
        if ($_display != Dc_GoogleTranslateWidget_Model_System_Config_Source_Display::VERTICAL) {
            switch($_display) {
                case Dc_GoogleTranslateWidget_Model_System_Config_Source_Display::SIMPLE:
                    return ',layout: google.translate.TranslateElement.InlineLayout.SIMPLE';
                break;
                case Dc_GoogleTranslateWidget_Model_System_Config_Source_Display::HORIZONTAL:
                    return ',layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL';
                break;
            }   
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getPageLanguage()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/page_language');
    }

    /**
     * @return mixed
     */
    public function getSpecificLanguages()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/specific_languages');
    }

    /**
     * @return mixed
     */
    public function getLanguages()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/languages');
    }

    /**
     * @return mixed
     */
    public function isMultilanguage()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/page_multilanguage');
    }

    /**
     * @return mixed
     */
    public function useGA()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/use_ga');
    }

    /**
     * @return mixed
     */
    public function getGACode()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/ga_code');
    }

}
