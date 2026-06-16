import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';
import Edit from './edit';

import './style.scss';
import './editor.scss';

export const attributes = {
	backgroundImageId: {
		type: 'number',
	},
	backgroundImageUrl: {
		type: 'string',
		default: '',
	},
	backgroundImageAlt: {
		type: 'string',
		default: '',
	},
	backgroundFocalPoint: {
		type: 'object',
		default: {
			x: 0.5,
			y: 0.5,
		},
	},
	overlayColor: {
		type: 'string',
		default: '#E7E2DE',
	},
	overlayOpacity: {
		type: 'number',
		default: 82,
	},
};

registerBlockType('enigma/cta-section', {
	attributes,
	supports: {
		align: ['wide', 'full'],
		color: {
			background: true,
			text: true,
		},
		spacing: {
			margin: true,
			padding: true,
		},
		html: false,
	},
	edit: Edit,
	save: () => <InnerBlocks.Content />,
});
