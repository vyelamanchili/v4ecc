<?php

defined('_JEXEC') or die('Restricted access');

/**
 * @package             Joomla
 * @subpackage          CoalaWeb Social Links Component
 * @author              Steven Palmer
 * @author url          https://coalaweb.com
 * @author email        support@coalaweb.com
 * @license             GNU/GPL, see /assets/en-GB.license.txt
 * @copyright           Copyright (c) 2017 Steven Palmer All rights reserved.
 *
 * CoalaWeb Social Links is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/gpl.html/>.
 */

/**
 *  component helper.
 */
class CoalawebsociallinksHelper {

    /**
     * 
     * @param type $vName
     */
    public static function addSubmenu($vName = 'controlpanel') {
        JHtmlSidebar::addEntry(
                JText::_('COM_CWSOCIALLINKS_TITLE_CPANEL'), 'index.php?option=com_coalawebsociallinks&view=controlpanel', $vName == 'controlpanel');
        JHtmlSidebar::addEntry(
                JText::_('COM_CWSOCIALLINKS_TITLE_COUNTS'), 'index.php?option=com_coalawebsociallinks&view=counts', $vName == 'counts');
    }
    
    /**
     * Check page social counts based on URL
     * 
     * @access public
     * 
     * @param type $url
     * 
     * @return type associate array
     */
    public static function getPageCount($url) {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select($db->quoteName(array('facebook_total', 'google', 'linkedin', 'pinterest', 'reddit', 'stumbleupon')));
        $query->from($db->quoteName('#__cwsocial_count'));
        $query->where('url = ' . $db->quote($url));
        $db->setQuery($query);
        $current = $db->loadAssoc();

        return $current;
    }

    public static function textClean($text, $stripHtml = true, $limit)
    {

        // Now decoded the text
        $decoded = html_entity_decode($text);

        // Remove any HTML based on module settings
        $notags = $stripHtml ? strip_tags($decoded) : $decoded;

        // Remove brackets such as plugin code
        $nobrackets = preg_replace("/\{[^}]+\}/", " ", $notags);

        //Now reduce the text length if needed
        $chars = strlen($notags);
        if ($chars <= $limit) {
            $description = $nobrackets;
        } else {
            $description = JString::substr($nobrackets, 0, $limit) . "...";
        }

        // One last little clean up
        $cleanText = preg_replace("/\s+/", " ", $description);

        // Lastly repair any HTML that got cut off if Tidy is installed
        if (extension_loaded('tidy') && !$stripHtml) {
            $tidy = new Tidy();
            $config = array(
                'output-xml' => true,
                'input-xml' => true,
                'clean' => false
            );
            $tidy->parseString($cleanText, $config, 'utf8');
            $tidy->cleanRepair();
            $cleanText = $tidy;
        }

        return $cleanText;
    }

    /**
     * Clean and minimize code
     *
     * @param type $code
     * @return string
     */
    public static function cleanCode($code) {

        // Remove comments.
        $pass1 = preg_replace('~//<!\[CDATA\[\s*|\s*//\]\]>~', '', $code);
        $pass2 = preg_replace('/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\)\/\/[^"\'].*))/', '', $pass1);

        // Minimize.
        $pass3 = str_replace(array("\r\n", "\r", "\n", "\t"), '', $pass2);
        $pass4 = preg_replace('/ +/', ' ', $pass3); // Replace multiple spaces with single space.
        $codeClean = trim($pass4);  // Trim the string of leading and trailing space.

        return $codeClean;
    }

}