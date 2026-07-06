import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';

import './style.scss';
import './editor.scss';

export const attributes = {
	alignment: {
		type: 'string',
		default: 'left',
	},
	number: {
		type: 'string',
		default: '01',
	},
	heading: {
		type: 'string',
		default: '',
	},
	description: {
		type: 'string',
		default: 'In your initial consultation ...',
	},
	buttonLabel: {
		type: 'string',
		default: '',
	},
	buttonUrl: {
		type: 'string',
		default: '#',
	},
};

registerBlockType('enigma/progress-step', {
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
