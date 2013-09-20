<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package inserTagNavLevel
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace PhilippKaiblinger;


/**
 * Class InsertTagNavLevel
 *
 * Insert Tag {{parentNavTitel::var}}
 * @copyright  Philipp Kaiblinger 2013
 * @author     Philipp Kaiblinger <philipp.kaiblinger@kaipo.at>
 * @package    inserTagNavLevel
 */
class InsertTagParentLevelTitel extends \Frontend
{
 	 public function generateInsertTag($strTag)
	 {
	 	$arrSplit = explode('::', $strTag);
 		if ($arrSplit[0] == 'parentLevelTitel')
        {
            global $objPage;
            $trail = $objPage->trail;
            $objNavLevel = \PageModel::findPublishedById($trail[(isset($arrSplit[1]) && $arrSplit[1] != '' ? $arrSplit[1] : 1)]);

            return '<a href="'.$this->generateFrontendUrl($objNavLevel->row()).'" title="'.$objNavLevel->title.'">'.$objNavLevel->title.'</a>';
        }
        return false;
	 }
}
