<?php
/**
 * Options for socials widget.
 *
 * @copyright 2019-present Creative Themes
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @package Blocksy
 */

// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
$options = [

	'title' => [
		'type' => 'text',
		'label' => __( 'Title', 'blocksy-companion' ),
		'field_attr' => [ 'id' => 'widget-title' ],
		'design' => 'inline',
		'value' => __( 'Social Icons', 'blocksy-companion' ),
		'disableRevertButton' => true,
	],

	'socials' => [
		'type' => 'ct-layers',
		'label' => false,
		'manageable' => true,
		'desc' => sprintf(
			__( 'You can configure social URLs in %s.', 'blocksy-companion' ),
			sprintf(
				'<a href="%s" target="_blank">%s</a>',
				admin_url('/customize.php?autofocus[section]=social_accounts'),
				__('Customizer', 'blocksy-companion')
			)
		),
		'value' => [
			[
				'id' => 'facebook',
				'enabled' => true,
			],

			[
				'id' => 'twitter',
				'enabled' => true,
			],

			[
				'id' => 'instagram',
				'enabled' => true,
			],
		],

		'settings' => blc_call_fn([
			'fn' => 'blocksy_get_social_networks_list',
			'default' => []
		])
	],

	'link_target' => [
		'type'  => 'ct-switch',
		'label' => __( 'Open links in new tab', 'blocksy-companion' ),
		'value' => 'no',
		'design' => 'inline-full',
		'disableRevertButton' => true,
	],

	'link_nofollow' => [
		'type'  => 'ct-switch',
		'label' => __( 'Set links to nofollow', 'blocksy-companion' ),
		'value' => 'no',
		'design' => 'inline-full',
	],

	'social_icons_size' => [
		'label' => __( 'Icons Size', 'blocksy-companion' ),
		'type' => 'ct-radio',
		'value' => 'medium',
		'view' => 'text',
		'design' => 'block',
		'setting' => [ 'transport' => 'postMessage' ],
		'choices' => [
			'small' => __( 'Small', 'blocksy-companion' ),
			'medium' => __( 'Medium', 'blocksy-companion' ),
			'large' => __( 'Large', 'blocksy-companion' ),
		],
	],

	'social_type' => [
		'label' => __( 'Icons Shape Type', 'blocksy-companion' ),
		'type' => 'ct-radio',
		'value' => 'simple',
		'view' => 'text',
		'design' => 'block',
		'setting' => [ 'transport' => 'postMessage' ],
		'choices' => [
			'simple' => __( 'None', 'blocksy-companion' ),
			'rounded' => __( 'Rounded', 'blocksy-companion' ),
			'square' => __( 'Square', 'blocksy-companion' ),
		],
	],

	blocksy_rand_md5() => [
		'type' => 'ct-condition',
		'condition' => [ 'social_type' => '!simple' ],
		'options' => [

			'social_icons_fill' => [
				'label' => __( 'Shape Fill Type', 'blocksy-companion' ),
				'type' => 'ct-radio',
				'value' => 'outline',
				'view' => 'text',
				'design' => 'block',
				'setting' => [ 'transport' => 'postMessage' ],
				'choices' => [
					'solid' => __( 'Solid', 'blocksy-companion' ),
					'outline' => __( 'Outline', 'blocksy-companion' ),
				],
			],

		],
	],

];
