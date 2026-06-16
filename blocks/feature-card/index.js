import { registerBlockType } from '@wordpress/blocks';
import { RichText, useBlockProps } from '@wordpress/block-editor';
import Edit from './edit';

import './style.scss';
import './editor.scss';

const attributes = {
	iconId: {
		type: 'number',
	},
	iconUrl: {
		type: 'string',
		default: '',
	},
	iconAlt: {
		type: 'string',
		default: '',
	},
	title: {
		type: 'string',
		default: 'Impact',
	},
	content: {
		type: 'string',
		default: 'Focused on meaningful change, not surface-level optimisation.',
	},
};

registerBlockType('enigma/feature-card', {
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
	save: ({ attributes: blockAttributes }) => {
		const { iconUrl, iconAlt, title, content } = blockAttributes;
		const blockProps = useBlockProps.save({
			className: 'enigma-feature-card',
		});

		return (
			<div {...blockProps}>
				{iconUrl && (
					<div className="enigma-feature-card__icon" aria-hidden={!iconAlt}>
						<img src={iconUrl} alt={iconAlt || ''} />
					</div>
				)}

				<div className="enigma-feature-card__body">
					<RichText.Content
						tagName="h3"
						className="enigma-feature-card__title"
						value={title}
					/>
					<RichText.Content
						tagName="p"
						className="enigma-feature-card__content"
						value={content}
					/>
				</div>
			</div>
		);
	},
});
