<?php
/**
* J51_ImageHover
* Version		: 1.0
* Created by	: Joomla51
* Email			: info@joomla51.com
* URL			: www.joomla51.com
* License GPLv2.0 - http://www.gnu.org/licenses/gpl-2.0.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$baseurl = JURI::base();
$imagehover_images = $params->get('imagehover_images');
$j51_imghvr = $params->get('j51_imghvr');
$j51_num_images	= $params->get( 'j51_num_images' ); 
$j51_randomize	= $params->get( 'j51_randomize' );
$j51_image_width	= $params->get( 'j51_image_width' );
$j51_image_width_tabl	= $params->get( 'j51_image_width_tabl' );
$j51_image_width_tabp	= $params->get( 'j51_image_width_tabp' );
$j51_image_width_mobl	= $params->get( 'j51_image_width_mobl' );
$j51_image_width_mobp	= $params->get( 'j51_image_width_mobp' );
$j51_image_margin_x	= $params->get( 'j51_image_margin_x' );
$j51_image_margin_y	= $params->get( 'j51_image_margin_y' );
$j51_image_padding_x	= $params->get( 'j51_image_padding_x' );
$j51_image_padding_y	= $params->get( 'j51_image_padding_y' );
$j51_overlay_color	= $params->get( 'j51_overlay_color' );
$j51_title_color	= $params->get( 'j51_title_color' );
$j51_text_color	= $params->get( 'j51_text_color' );
$j51_text_align	= $params->get( 'j51_text_align' );
$j51_text_vert_align = $params->get( 'j51_text_vert_align' );
$j51_bg_color	= $params->get( 'j51_bg_color' );
$j51_border_color	= $params->get( 'j51_border_color' );
$j51_animate_class	= $params->get( 'j51_animate_class' );
$j51_moduleid       = $module->id;
$j51_title = $params->get('j51_title');
$j51_image = $params->get('j51_image');
$j51_target_url = $params->get('j51_target_url');


// Load CSS/JS
$document = JFactory::getDocument();

// $document->addStyleSheet (JURI::base() . 'modules/mod_j51imagehover/css/style.css' );
$document->addStyleSheet (JURI::base() . 'modules/mod_j51imagehover/css/imagehover.min.css' );

// Styling from module parameters
$j51_css='';
$j51_css .='
.j51imagehover'.$j51_moduleid.' {
	margin: -'.($j51_image_margin_y / 2).'px -'.($j51_image_margin_x / 2).'px;
}
.j51imagehover'.$j51_moduleid.' .j51imghvr-item {
	display: inline-block;
	max-width:'.$j51_image_width.';
	padding:'.($j51_image_margin_y / 2).'px '.($j51_image_margin_x / 2).'px;
	box-sizing: border-box;
}
.j51imagehover'.$j51_moduleid.' figcaption {
	display: flex;
    flex-direction: column;
    justify-content: '.$j51_text_vert_align.';
	padding:'.$j51_image_padding_y.'px '.$j51_image_padding_x.'px;
	text-align: '.$j51_text_align.';
}
.j51imagehover'.$j51_moduleid.' h3 {
	color: '.$j51_title_color.' !important;
}
.j51imagehover'.$j51_moduleid.' [class^="imghvr-"], .j51imagehover'.$j51_moduleid.' [class*=" imghvr-"] {
	background-color: '.adjustBrightness($j51_overlay_color,25).';
}
.j51imagehover'.$j51_moduleid.' [class^="imghvr-"]::before, .j51imagehover'.$j51_moduleid.' [class*=" imghvr-"]::before,
.j51imagehover'.$j51_moduleid.' [class^="imghvr-"]::after, .j51imagehover'.$j51_moduleid.' [class*=" imghvr-"]::after,
.j51imagehover'.$j51_moduleid.' [class^="imghvr-"] figcaption, .j51imagehover'.$j51_moduleid.' [class*=" imghvr-"] figcaption {
	background-color: '.$j51_overlay_color.';
}
@media only screen and (min-width: 960px) and (max-width: 1280px) {

.j51imagehover'.$j51_moduleid.' .j51imghvr-item {max-width:'.$j51_image_width_tabl.';}
}
@media only screen and (min-width: 768px) and (max-width: 959px) {

.j51imagehover'.$j51_moduleid.' .j51imghvr-item {max-width:'.$j51_image_width_tabp.';}
}
@media only screen and ( max-width: 767px ) {

.j51imagehover'.$j51_moduleid.' .j51imghvr-item {max-width:'.$j51_image_width_mobl.';}
}
@media only screen and (max-width: 440px) {

.j51imagehover'.$j51_moduleid.' .j51imghvr-item {max-width:'.$j51_image_width_mobp.';}
}
';
// Put styling in header
$document->addStyleDeclaration($j51_css);
?>

<div class="j51imagehover j51imagehover<?php echo $j51_moduleid; ?> ">
<?php foreach ($imagehover_images as $item) : ?><div class="j51imghvr-item">
<figure class="<?php echo $item->j51_imghvr; ?>">
	<img src="<?php echo $item->j51_image; ?>" alt="<?php echo $item->j51_title; ?>" 
		<?php if(!empty($item->j51_title) || !empty($item->j51_text) || !empty($item->image_url)) {} else { ?>
			style="
				-webkit-transform: none;
				-moz-transform: none;
				-ms-transform: none;
				transform: none;
				"
		<?php } ?>
		>
	<?php if (!empty($item->j51_title) || !empty($item->j51_text)) { ?>
		<figcaption>
			<h3 style="color:<?php echo $item->j51_title_color;?>;"> <?php echo $item->j51_title; ?></h3>
			<?php if($item->j51_text != "") : ?>
			<p class="description" style="color:<?php echo $j51_text_color;?>; "><?php echo $item->j51_text; ?></p>
			<?php endif; ?>
		</figcaption>
		<?php } else { ?>
		<?php if (!empty($item->image_url)) { ?>
		<figcaption>
			<i class="fa fa-link" aria-hidden="true"></i>
		</figcaption>
		<?php } ?>
	<?php } ?>
	<?php if (!empty($item->image_url)) { ?>
		<a href="<?php echo $item->image_url; ?>" target="<?php echo $j51_target_url; ?>"></a>
	<?php } ?>
</figure>
</div><?php endforeach; ?>
</div>
