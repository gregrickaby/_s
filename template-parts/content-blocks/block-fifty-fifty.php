<?php
/**
 * The template used for displaying fifty/fifty blocks.
 *
 * @package _s
 */

// Get the block layout field so block template is conditionally loaded.
global $fifty_alignment;
$block_layout    = get_field( 'block_layout' );
$fifty_alignment = _s_get_block_alignment( $block );

switch ( $block_layout ) {

	case 'text_media':
		get_template_part( 'template-parts/content-blocks/block', 'fifty-text-media' );
		break;

	case 'media_text':
		get_template_part( 'template-parts/content-blocks/block', 'fifty-media-text' );
		break;

	case 'text_text':
		get_template_part( 'template-parts/content-blocks/block', 'fifty-text-only' );
		break;

	default:
		get_template_part( 'template-parts/content-blocks/block', 'fifty-text-media' );
}


