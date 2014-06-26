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
 * @copyright  Copyright (c) 2014 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version    1.0.0
 */

class Dc_GoogleTranslateWidget_Block_Widget extends Mage_Core_Block_Template
{

    public function __construct()
    {
        parent::__construct();
    }

    public function isEnabled()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/enabled');
    }
    
    public function getCode()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/code');
    }
    
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
    
    public function getPageLanguage()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/page_language');
    }
    
    public function getSpecificLanguages()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/specific_languages');
    }
    
    public function getLanguages()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/languages');
    }
    
    public function isMultilanguage()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/page_multilanguage');
    }
    
    public function useGA()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/use_ga');
    }
    
    public function getGACode()
    {
        return Mage::app()->getStore()->getConfig('googletranslatewidget/settings/ga_code');
    }

}
