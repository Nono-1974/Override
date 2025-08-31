<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ContentHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\FileLayout;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Router\Route;
use Joomla\Component\Contact\Site\Helper\RouteHelper;

/** @var \Joomla\Component\Contact\Site\View\Contact\HtmlView $this */
$tparams = $this->item->params;
$canDo   = ContentHelper::getActions('com_contact', 'category', $this->item->catid);
$canEdit = $canDo->get('core.edit') || ($canDo->get('core.edit.own') && $this->item->created_by === $this->getCurrentUser()->id);
$htag    = $tparams->get('show_page_heading') ? 'h2' : 'h1';
$htag2   = ($tparams->get('show_page_heading') && $tparams->get('show_name')) ? 'h3' : 'h2';
$icon    = $this->params->get('contact_icons') == 0;
?>



        <?php echo $this->loadTemplate('form'); ?>

        <?php echo $this->item->event->afterDisplayContent; ?>

