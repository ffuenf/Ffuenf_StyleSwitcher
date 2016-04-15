<?php
/**
 * Ffuenf_StyleSwitcher extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2016 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_StyleSwitcher_Model_Styleswitcher
{
    const XML_PATH_EXTENSION_STYLES = 'ffuenf_styleswitcher/general/styles';

    /**
     * @param string
     * @return string
     */
    public function getStyleSwitcher()
    {
        if (!Mage::helper('ffuenf_styleswitcher')->isExtensionActive()) {
            return;
        }
        $styles = explode(',', Mage::getStoreConfig(self::XML_PATH_EXTENSION_STYLES));
        $html = '<select name="styleswitcher" id="styleswitcher">';
        $html .= '<option value="">choose style variant</option>';
        foreach ($styles as $style) {
            $html .= '<option value="'.$style.'">'.$style.'</option>';
        }
        $html .= '</select>';
        return $html;
    }
}
