<?php
/**
* J51_ImageHover
* Version		: 1.0
* Created by	: Joomla51
* Email			: info@joomla51.com
* URL			: www.joomla51.com
* License GPLv2.0 - http://www.gnu.org/licenses/gpl-2.0.html
*/

defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$helper = new modJ51ImageHover();

// Define variables
$imagehover_images    = $params->get('imagehover_images');
$j51_imghvr           = $params->get('j51_imghvr', 'imghvr-fade-in-up');
$j51_image_width      = $params->get('j51_image_width', '25%');
$j51_image_width_tabl = $params->get('j51_image_width_tabl', '33.333%');
$j51_image_width_tabp = $params->get('j51_image_width_tabp', '33.333%');
$j51_image_width_mobl = $params->get('j51_image_width_mobl', '50%');
$j51_image_width_mobp = $params->get('j51_image_width_mobp', '100%');
$j51_image_margin_x   = $params->get('j51_image_margin_x', '10');
$j51_image_margin_y   = $params->get('j51_image_margin_y', '10');
$j51_image_padding_x  = $params->get('j51_image_padding_x', '20');
$j51_image_padding_y  = $params->get('j51_image_padding_y', '20');
$j51_overlay_color    = $params->get('j51_overlay_color', '#135796');
$j51_title_color      = $params->get('j51_title_color', '#ffffff');
$j51_text_color       = $params->get('j51_text_color', '#ffffff');
$j51_text_align       = $params->get('j51_text_align', 'center');
$j51_text_vert_align  = $params->get('j51_text_vert_align', 'center');
$j51_moduleid         = $module->id;
$j51_title            = $params->get('j51_title');
$j51_image            = $params->get('j51_image');
$j51_image_alt         = $params->get('j51_image_alt');
$j51_target_url       = $params->get('j51_target_url');

require(JModuleHelper::getLayoutPath('mod_j51imagehover'));
