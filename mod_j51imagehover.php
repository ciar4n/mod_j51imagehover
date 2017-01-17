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
$baseurl              = JUri::base();
$imagehover_images    = $params->get('imagehover_images');
$j51_imghvr           = $params->get('j51_imghvr');
$j51_num_images       = $params->get('j51_num_images'); 
$j51_randomize        = $params->get('j51_randomize');
$j51_image_width      = $params->get('j51_image_width');
$j51_image_width_tabl = $params->get('j51_image_width_tabl');
$j51_image_width_tabp = $params->get('j51_image_width_tabp');
$j51_image_width_mobl = $params->get('j51_image_width_mobl');
$j51_image_width_mobp = $params->get('j51_image_width_mobp');
$j51_image_margin_x   = $params->get('j51_image_margin_x');
$j51_image_margin_y   = $params->get('j51_image_margin_y');
$j51_image_padding_x  = $params->get('j51_image_padding_x');
$j51_image_padding_y  = $params->get('j51_image_padding_y');
$j51_overlay_color    = $params->get('j51_overlay_color');
$j51_title_color      = $params->get('j51_title_color');
$j51_text_color       = $params->get('j51_text_color');
$j51_text_align       = $params->get('j51_text_align');
$j51_text_vert_align  = $params->get('j51_text_vert_align');
$j51_bg_color         = $params->get('j51_bg_color');
$j51_border_color     = $params->get('j51_border_color');
$j51_animate_class    = $params->get('j51_animate_class');
$j51_moduleid         = $module->id;
$j51_title            = $params->get('j51_title');
$j51_image            = $params->get('j51_image');
$j51_target_url       = $params->get('j51_target_url');

require(JModuleHelper::getLayoutPath('mod_j51imagehover'));
