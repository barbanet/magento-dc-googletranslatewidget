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

class Dc_GoogleTranslateWidget_Model_System_Config_Source_Language
{

    /**
     * @var array
     */
    protected $_languages = array();

    /**
     * Translations between the languages listed in the following table are supported
     * https://developers.google.com/translate/v2/using_rest?hl=es
     *
     * @return array
     */
    public function getLanguages()
    {
        if (!count($this->_languages) > 0) {
            $this->_languages['af'] = Mage::helper('googletranslatewidget')->__('Afrikaans');
            $this->_languages['sq'] = Mage::helper('googletranslatewidget')->__('Albanian');
            $this->_languages['ar'] = Mage::helper('googletranslatewidget')->__('Arabic');
            $this->_languages['az'] = Mage::helper('googletranslatewidget')->__('Azerbaijani');
            $this->_languages['eu'] = Mage::helper('googletranslatewidget')->__('Basque');
            $this->_languages['bn'] = Mage::helper('googletranslatewidget')->__('Bengali');
            $this->_languages['be'] = Mage::helper('googletranslatewidget')->__('Belarusian');
            $this->_languages['bg'] = Mage::helper('googletranslatewidget')->__('Bulgarian');
            $this->_languages['ca'] = Mage::helper('googletranslatewidget')->__('Catalan');
            $this->_languages['zh-CN'] = Mage::helper('googletranslatewidget')->__('Chinese (Simplified)');
            $this->_languages['zh-TW'] = Mage::helper('googletranslatewidget')->__('Chinese (Traditional)');
            $this->_languages['hr'] = Mage::helper('googletranslatewidget')->__('Croatian');
            $this->_languages['cs'] = Mage::helper('googletranslatewidget')->__('Czech');
            $this->_languages['da'] = Mage::helper('googletranslatewidget')->__('Danish');
            $this->_languages['nl'] = Mage::helper('googletranslatewidget')->__('Dutch');
            $this->_languages['en'] = Mage::helper('googletranslatewidget')->__('English');
            $this->_languages['eo'] = Mage::helper('googletranslatewidget')->__('Esperanto');
            $this->_languages['et'] = Mage::helper('googletranslatewidget')->__('Estonian');
            $this->_languages['tl'] = Mage::helper('googletranslatewidget')->__('Filipino');
            $this->_languages['fi'] = Mage::helper('googletranslatewidget')->__('Finnish');
            $this->_languages['fr'] = Mage::helper('googletranslatewidget')->__('French');
            $this->_languages['gl'] = Mage::helper('googletranslatewidget')->__('Galician');
            $this->_languages['ka'] = Mage::helper('googletranslatewidget')->__('Georgian');
            $this->_languages['de'] = Mage::helper('googletranslatewidget')->__('German');
            $this->_languages['el'] = Mage::helper('googletranslatewidget')->__('Greek');
            $this->_languages['gu'] = Mage::helper('googletranslatewidget')->__('Gujarati');
            $this->_languages['ht'] = Mage::helper('googletranslatewidget')->__('Haitian Creole');
            $this->_languages['iw'] = Mage::helper('googletranslatewidget')->__('Hebrew');
            $this->_languages['hi'] = Mage::helper('googletranslatewidget')->__('Hindi');
            $this->_languages['hu'] = Mage::helper('googletranslatewidget')->__('Hungarian');
            $this->_languages['is'] = Mage::helper('googletranslatewidget')->__('Icelandic');
            $this->_languages['id'] = Mage::helper('googletranslatewidget')->__('Indonesian');
            $this->_languages['ga'] = Mage::helper('googletranslatewidget')->__('Irish');
            $this->_languages['it'] = Mage::helper('googletranslatewidget')->__('Italian');
            $this->_languages['ja'] = Mage::helper('googletranslatewidget')->__('Japanese');
            $this->_languages['kn'] = Mage::helper('googletranslatewidget')->__('Kannada');
            $this->_languages['ko'] = Mage::helper('googletranslatewidget')->__('Korean');
            $this->_languages['la'] = Mage::helper('googletranslatewidget')->__('Latin');
            $this->_languages['lv'] = Mage::helper('googletranslatewidget')->__('Latvian');
            $this->_languages['lt'] = Mage::helper('googletranslatewidget')->__('Lithuanian');
            $this->_languages['mk'] = Mage::helper('googletranslatewidget')->__('Macedonian');
            $this->_languages['ms'] = Mage::helper('googletranslatewidget')->__('Malay');
            $this->_languages['mt'] = Mage::helper('googletranslatewidget')->__('Maltese');
            $this->_languages['no'] = Mage::helper('googletranslatewidget')->__('Norweigan');
            $this->_languages['fa'] = Mage::helper('googletranslatewidget')->__('Persian');
            $this->_languages['pl'] = Mage::helper('googletranslatewidget')->__('Polish');
            $this->_languages['pt'] = Mage::helper('googletranslatewidget')->__('Portuguese');
            $this->_languages['ro'] = Mage::helper('googletranslatewidget')->__('Romanian');
            $this->_languages['ru'] = Mage::helper('googletranslatewidget')->__('Russian');
            $this->_languages['sr'] = Mage::helper('googletranslatewidget')->__('Serbian');
            $this->_languages['sk'] = Mage::helper('googletranslatewidget')->__('Slovak');
            $this->_languages['sl'] = Mage::helper('googletranslatewidget')->__('Slovenian');
            $this->_languages['es'] = Mage::helper('googletranslatewidget')->__('Spanish');
            $this->_languages['sw'] = Mage::helper('googletranslatewidget')->__('Swahili');
            $this->_languages['sv'] = Mage::helper('googletranslatewidget')->__('Swedish');
            $this->_languages['ta'] = Mage::helper('googletranslatewidget')->__('Tamil');
            $this->_languages['te'] = Mage::helper('googletranslatewidget')->__('Telugu');
            $this->_languages['th'] = Mage::helper('googletranslatewidget')->__('Thai');
            $this->_languages['tr'] = Mage::helper('googletranslatewidget')->__('Turkish');
            $this->_languages['uk'] = Mage::helper('googletranslatewidget')->__('Ukrainian');
            $this->_languages['ur'] = Mage::helper('googletranslatewidget')->__('Urdu');
            $this->_languages['vi'] = Mage::helper('googletranslatewidget')->__('Vietnamese');
            $this->_languages['cy'] = Mage::helper('googletranslatewidget')->__('Welsh');
            $this->_languages['yi'] = Mage::helper('googletranslatewidget')->__('Yiddish');
        }
        asort($this->_languages, SORT_STRING | SORT_FLAG_CASE);
        return $this->_languages;
    }

    /**
     * Array with the available languages.
     *
     * @return array
     */
    public function toOptionArray()
    {
        foreach ($this->getLanguages() as $code => $label) {
            $options[] = array(
                        'value' => $code,
                        'label' => $label
                    ); 
        }
        return $options;
    }

}
