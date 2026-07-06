import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';

import './style.scss';
import './editor.scss';

export const attributes = {
	thoughts: {
		type: 'array',
		default: [
			'The strongest ideas usually start as quiet observations.',
			'A useful question can move the whole room forward.',
			'Patterns become clearer when they are written down.',
		],
	},
	animation: {
		type: 'string',
		default: 'fade',
	},
	interval: {
		type: 'number',
		default: 4500,
	},
};

registerBlockType('enigma/thoughts', {
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
	save: () => null,
});
