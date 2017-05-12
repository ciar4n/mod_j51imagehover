<?php
/**
 * @package    J51_ImageHover
 * @copyright  Copyright (C) 2009 - 2017 Joomla51. All rights reserved.
 * @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

$doc = JFactory::getDocument();

// Load CSS/JS
JHtml::_('stylesheet', 'mod_j51imagehover/imagehover.min.css', array(), true);

// Styling from module parameters
$j51_css = '
.j51imagehover' . $j51_moduleid . ' {
	margin: -' . ($j51_image_margin_y / 2) . 'px -' . ($j51_image_margin_x / 2) . 'px;
}
.j51imagehover' . $j51_moduleid . ' .j51imghvr-item {
	display: inline-block;
	max-width:' . $j51_image_width . ';
	padding:' . ($j51_image_margin_y / 2) . 'px ' . ($j51_image_margin_x / 2) . 'px;
	box-sizing: border-box;
}
.j51imagehover' . $j51_moduleid . ' figcaption {
	display: flex;
    flex-direction: column;
    justify-content: ' . $j51_text_vert_align . ';
	padding:' . $j51_image_padding_y . 'px ' . $j51_image_padding_x . 'px;
	text-align: ' . $j51_text_align . ';
}
.j51imagehover' . $j51_moduleid . ' h3 {
	color: ' . $j51_title_color . ' !important;
}
.j51imagehover' . $j51_moduleid . ' [class^="imghvr-"], .j51imagehover' . $j51_moduleid . ' [class*=" imghvr-"] {
	background-color: ' . $helper->adjustBrightness($j51_overlay_color, 25) . ';
}
.j51imagehover' . $j51_moduleid . ' [class^="imghvr-"]::before, .j51imagehover' . $j51_moduleid . ' [class*=" imghvr-"]::before,
.j51imagehover' . $j51_moduleid . ' [class^="imghvr-"]::after, .j51imagehover' . $j51_moduleid . ' [class*=" imghvr-"]::after,
.j51imagehover' . $j51_moduleid . ' [class^="imghvr-"] figcaption, .j51imagehover' . $j51_moduleid . ' [class*=" imghvr-"] figcaption {
	background-color: ' . $j51_overlay_color . ';
}
@media only screen and (min-width: 960px) and (max-width: 1280px) {
	.j51imagehover' . $j51_moduleid . ' .j51imghvr-item {max-width:' . $j51_image_width_tabl . ';}
}
@media only screen and (min-width: 768px) and (max-width: 959px) {
	.j51imagehover' . $j51_moduleid . ' .j51imghvr-item {max-width:' . $j51_image_width_tabp . ';}
}
@media only screen and ( max-width: 767px ) {
	.j51imagehover' . $j51_moduleid . ' .j51imghvr-item {max-width:' . $j51_image_width_mobl . ';}
}
@media only screen and (max-width: 440px) {
.	j51imagehover' . $j51_moduleid . ' .j51imghvr-item {max-width:' . $j51_image_width_mobp . ';}
}
';
// Put styling in header
$doc->addStyleDeclaration($j51_css);
?>

<div class="j51imagehover j51imagehover<?php echo $j51_moduleid; ?>">
	<?php foreach ($imagehover_images as $item) : ?><div class="j51imghvr-item">
		<figure class="<?php echo $item->j51_imghvr; ?>">
			<img src="<?php echo $item->j51_image; ?>" alt="<?php echo $item->j51_title; ?>" 
				<?php if (empty($item->j51_title) || empty($item->j51_text) || empty($item->image_url)) : ?>
					style="
						-webkit-transform: none;
						-ms-transform: none;
						transform: none;
						"
				<?php endif; ?>
				>
			<?php if (!empty($item->j51_title) || !empty($item->j51_text)) : ?>
				<figcaption>
					<h3 style="color:<?php echo $j51_title_color; ?>;"> <?php echo $item->j51_title; ?></h3>
					<?php if ($item->j51_text != '') : ?>
						<p class="description" style="color:<?php echo $j51_text_color; ?>;"><?php echo $item->j51_text; ?></p>
					<?php endif; ?>
				</figcaption>
			<?php else : ?>
				<?php if (!empty($item->image_url)) : ?>
					<figcaption>
						<i class="icon-link" aria-hidden="true"></i>
					</figcaption>
				<?php endif; ?>
			<?php endif; ?>
			<?php if (!empty($item->j51_target_url)) : ?>
				<a href="<?php echo $item->j51_target_url; ?>" target="<?php echo $item->j51_target_url; ?>"></a>
			<?php endif; ?>
		</figure>
	</div><?php endforeach; ?>
</div>
