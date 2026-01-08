import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	RichText,
	InspectorControls,
} from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

registerBlockType('enigma/testimonial-slider', {
	edit({ attributes, setAttributes }) {
		const { limit, style, preheadline, headline } = attributes;

		const background = style?.color?.background || 'transparent';

		const blockProps = useBlockProps({
			style: {
				backgroundColor: background,
				padding: '24px',
			},
			className: 'enigma-testimonial-slider',
		});

		return (
			<>
				<InspectorControls>
					<PanelBody title={__('Settings', 'enigma')}>
						<RangeControl
							label={__('Number of testimonials', 'enigma')}
							min={1}
							max={20}
							value={limit ?? 5}
							onChange={(value) =>
								setAttributes({ limit: value })
							}
						/>
					</PanelBody>
				</InspectorControls>

				<div {...blockProps}>
					<RichText
						tagName="span"
						className="enigma-testimonial-preheadline"
						placeholder={__('Add preheadline…', 'enigma')}
						value={preheadline}
						onChange={(value) =>
							setAttributes({ preheadline: value })
						}
					/>

					<RichText
						tagName="h2"
						className="enigma-testimonial-headline"
						placeholder={__('Add headline…', 'enigma')}
						value={headline}
						onChange={(value) =>
							setAttributes({ headline: value })
						}
					/>

					<p>{__('Slider renders on the front-end.', 'enigma')}</p>
					<p>
						{__('Limit:', 'enigma')} {limit ?? 5}
					</p>
				</div>
			</>
		);
	},

	save() {
		return null;
	},
});
