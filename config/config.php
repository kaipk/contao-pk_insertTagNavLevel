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
 * HOOKS
 */

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('InsertTagParentLevelTitel', 'generateInsertTag');