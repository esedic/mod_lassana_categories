<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lassana_categories
 *
 * @copyright   Copyright (C) 2016 Spletodrom. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="category-module uk-list-icon-angle-right">
<?php require JModuleHelper::getLayoutPath('mod_lassana_categories', $params->get('layout', 'default') . '_items'); ?>
</ul>
