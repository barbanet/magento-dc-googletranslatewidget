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

class Dc_GoogleTranslateWidget_Model_System_Config_Source_Language
{

    /**
     * Translations between the languages listed in the following table are supported
     * https://developers.google.com/translate/v2/using_rest?hl=es
     */
    public function toOptionArray()
    {
        $options = array(
                    array(
                        'value' => 'af',
                        'label' => Mage::helper('googletranslatewidget')->__('Afrikaans')
                    ),
                    array(
                        'value' => 'sq',
                        'label' => Mage::helper('googletranslatewidget')->__('Albanian')
                    ),
                    array(
                        'value' => 'ar',
                        'label' => Mage::helper('googletranslatewidget')->__('Arabic')
                    ),
                    array(
                        'value' => 'az',
                        'label' => Mage::helper('googletranslatewidget')->__('Azerbaijani')
                    ),
                    array(
                        'value' => 'eu',
                        'label' => Mage::helper('googletranslatewidget')->__('Basque')
                    ),
                    array(
                        'value' => 'bn',
                        'label' => Mage::helper('googletranslatewidget')->__('Bengali')
                    ),
                    array(
                        'value' => 'be',
                        'label' => Mage::helper('googletranslatewidget')->__('Belarusian')
                    ),
                    array(
                        'value' => 'bg',
                        'label' => Mage::helper('googletranslatewidget')->__('Bulgarian')
                    ),
                    array(
                        'value' => 'ca',
                        'label' => Mage::helper('googletranslatewidget')->__('Catalan')
                    ),
                    array(
                        'value' => 'zh-CN',
                        'label' => Mage::helper('googletranslatewidget')->__('Chinese (Simplified)')
                    ),
                    array(
                        'value' => 'zh-TW',
                        'label' => Mage::helper('googletranslatewidget')->__('Chinese (Traditional)')
                    ),
                    array(
                        'value' => 'hr',
                        'label' => Mage::helper('googletranslatewidget')->__('Croatian')
                    ),
                    array(
                        'value' => 'cs',
                        'label' => Mage::helper('googletranslatewidget')->__('Czech')
                    ),
                    array(
                        'value' => 'da',
                        'label' => Mage::helper('googletranslatewidget')->__('Danish')
                    ),
                    array(
                        'value' => 'nl',
                        'label' => Mage::helper('googletranslatewidget')->__('Dutch')
                    ),
                    array(
                        'value' => 'en',
                        'label' => Mage::helper('googletranslatewidget')->__('English')
                    ),
                    array(
                        'value' => 'eo',
                        'label' => Mage::helper('googletranslatewidget')->__('Esperanto')
                    ),
                    array(
                        'value' => 'et',
                        'label' => Mage::helper('googletranslatewidget')->__('Estonian')
                    ),
                    array(
                        'value' => 'tl',
                        'label' => Mage::helper('googletranslatewidget')->__('Filipino')
                    ),
                    array(
                        'value' => 'fi',
                        'label' => Mage::helper('googletranslatewidget')->__('Finnish')
                    ),
                    array(
                        'value' => 'fr',
                        'label' => Mage::helper('googletranslatewidget')->__('French')
                    ),
                    array(
                        'value' => 'gl',
                        'label' => Mage::helper('googletranslatewidget')->__('Galician')
                    ),
                    array(
                        'value' => 'ka',
                        'label' => Mage::helper('googletranslatewidget')->__('Georgian')
                    ),
                    array(
                        'value' => 'de',
                        'label' => Mage::helper('googletranslatewidget')->__('German')
                    ),
                    array(
                        'value' => 'el',
                        'label' => Mage::helper('googletranslatewidget')->__('Greek')
                    ),
                    array(
                        'value' => 'gu',
                        'label' => Mage::helper('googletranslatewidget')->__('Gujarati')
                    ),
                    array(
                        'value' => 'ht',
                        'label' => Mage::helper('googletranslatewidget')->__('Haitian Creole')
                    ),
                    array(
                        'value' => 'iw',
                        'label' => Mage::helper('googletranslatewidget')->__('Hebrew')
                    ),
                    array(
                        'value' => 'hi',
                        'label' => Mage::helper('googletranslatewidget')->__('Hindi')
                    ),
                    array(
                        'value' => 'hu',
                        'label' => Mage::helper('googletranslatewidget')->__('Hungarian')
                    ),
                    array(
                        'value' => 'is',
                        'label' => Mage::helper('googletranslatewidget')->__('Icelandic')
                    ),
                    array(
                        'value' => 'id',
                        'label' => Mage::helper('googletranslatewidget')->__('Indonesian')
                    ),
                    array(
                        'value' => 'ga',
                        'label' => Mage::helper('googletranslatewidget')->__('Irish')
                    ),
                    array(
                        'value' => 'it',
                        'label' => Mage::helper('googletranslatewidget')->__('Italian')
                    ),
                    array(
                        'value' => 'ja',
                        'label' => Mage::helper('googletranslatewidget')->__('Japanese')
                    ),
                    array(
                        'value' => 'kn',
                        'label' => Mage::helper('googletranslatewidget')->__('Kannada')
                    ),
                    array(
                        'value' => 'ko',
                        'label' => Mage::helper('googletranslatewidget')->__('Korean')
                    ),
                    array(
                        'value' => 'la',
                        'label' => Mage::helper('googletranslatewidget')->__('Latin')
                    ),
                    array(
                        'value' => 'lv',
                        'label' => Mage::helper('googletranslatewidget')->__('Latvian')
                    ),
                    array(
                        'value' => 'lt',
                        'label' => Mage::helper('googletranslatewidget')->__('Lithuanian')
                    ),
                    array(
                        'value' => 'mk',
                        'label' => Mage::helper('googletranslatewidget')->__('Macedonian')
                    ),
                    array(
                        'value' => 'ms',
                        'label' => Mage::helper('googletranslatewidget')->__('Malay')
                    ),
                    array(
                        'value' => 'mt',
                        'label' => Mage::helper('googletranslatewidget')->__('Maltese')
                    ),
                    array(
                        'value' => 'no',
                        'label' => Mage::helper('googletranslatewidget')->__('Norweigan')
                    ),
                    array(
                        'value' => 'fa',
                        'label' => Mage::helper('googletranslatewidget')->__('Persian')
                    ),
                    array(
                        'value' => 'pl',
                        'label' => Mage::helper('googletranslatewidget')->__('Polish')
                    ),
                    array(
                        'value' => 'pt',
                        'label' => Mage::helper('googletranslatewidget')->__('Portuguese')
                    ),
                    array(
                        'value' => 'ro',
                        'label' => Mage::helper('googletranslatewidget')->__('Romanian')
                    ),
                    array(
                        'value' => 'ru',
                        'label' => Mage::helper('googletranslatewidget')->__('Russian')
                    ),
                    array(
                        'value' => 'sr',
                        'label' => Mage::helper('googletranslatewidget')->__('Serbian')
                    ),
                    array(
                        'value' => 'sk',
                        'label' => Mage::helper('googletranslatewidget')->__('Slovak')
                    ),
                    array(
                        'value' => 'sl',
                        'label' => Mage::helper('googletranslatewidget')->__('Slovenian')
                    ),
                    array(
                        'value' => 'es',
                        'label' => Mage::helper('googletranslatewidget')->__('Spanish')
                    ),
                    array(
                        'value' => 'sw',
                        'label' => Mage::helper('googletranslatewidget')->__('Swahili')
                    ),
                    array(
                        'value' => 'sv',
                        'label' => Mage::helper('googletranslatewidget')->__('Swedish')
                    ),
                    array(
                        'value' => 'ta',
                        'label' => Mage::helper('googletranslatewidget')->__('Tamil')
                    ),
                    array(
                        'value' => 'te',
                        'label' => Mage::helper('googletranslatewidget')->__('Telugu')
                    ),
                    array(
                        'value' => 'th',
                        'label' => Mage::helper('googletranslatewidget')->__('Thai')
                    ),
                    array(
                        'value' => 'tr',
                        'label' => Mage::helper('googletranslatewidget')->__('Turkish')
                    ),
                    array(
                        'value' => 'uk',
                        'label' => Mage::helper('googletranslatewidget')->__('Ukrainian')
                    ),
                    array(
                        'value' => 'ur',
                        'label' => Mage::helper('googletranslatewidget')->__('Urdu')
                    ),
                    array(
                        'value' => 'vi',
                        'label' => Mage::helper('googletranslatewidget')->__('Vietnamese')
                    ),
                    array(
                        'value' => 'cy',
                        'label' => Mage::helper('googletranslatewidget')->__('Welsh')
                    ),
                    array(
                        'value' => 'yi',
                        'label' => Mage::helper('googletranslatewidget')->__('Yiddish')
                    )
        );
        return $options;
    }

}
