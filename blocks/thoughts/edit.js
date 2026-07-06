import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, RangeControl, SelectControl, TextareaControl } from '@wordpress/components';

const DEFAULT_THOUGHTS = [
	'The strongest ideas usually start as quiet observations.',
	'A useful question can move the whole room forward.',
	'Patterns become clearer when they are written down.',
];

const parseThoughts = (value) =>
	value
		.split('\n')
		.map((item) => item.trim())
		.filter(Boolean);

export default function Edit({ attributes, setAttributes }) {
	const {
		thoughts = DEFAULT_THOUGHTS,
		animation = 'fade',
		interval = 4500,
	} = attributes;
	const thoughtItems = Array.isArray(thoughts) && thoughts.length ? thoughts : DEFAULT_THOUGHTS;
	const safeAnimation = animation === 'fall' ? 'fall' : 'fade';

	const blockProps = useBlockProps({
		className: `enigma-thoughts enigma-thoughts--${safeAnimation}`,
	});

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Thoughts', 'enigma')} initialOpen>
					<TextareaControl
						label={__('Sentences', 'enigma')}
						help={__('Add one sentence per line.', 'enigma')}
						value={thoughtItems.join('\n')}
						onChange={(value) => setAttributes({ thoughts: parseThoughts(value) })}
						rows={10}
					/>
					<SelectControl
						label={__('Rotation animation', 'enigma')}
						value={safeAnimation}
						options={[
							{ label: __('Fade', 'enigma'), value: 'fade' },
							{ label: __('Cards fall away', 'enigma'), value: 'fall' },
						]}
						onChange={(value) => setAttributes({ animation: value })}
					/>
					<RangeControl
						label={__('Rotation speed', 'enigma')}
						value={interval}
						onChange={(value) => setAttributes({ interval: value })}
						min={2000}
						max={10000}
						step={250}
					/>
				</PanelBody>
			</InspectorControls>

			<div {...blockProps}>
				<div className="enigma-thoughts__deck" aria-hidden="true">
					{thoughtItems.map((thought, index) => (
						<article
							key={`${thought}-${index}`}
							className={[
								'enigma-thoughts__card',
								index === 0 ? 'is-active' : '',
								index === 1 ? 'is-next' : '',
								index === 2 ? 'is-after-next' : '',
							]
								.filter(Boolean)
								.join(' ')}
						>
							<p>{thought}</p>
						</article>
					))}
				</div>
			</div>
		</>
	);
}
