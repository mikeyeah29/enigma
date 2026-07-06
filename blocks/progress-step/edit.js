import { __ } from '@wordpress/i18n';
import { InspectorControls, RichText, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, SelectControl, TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { alignment, number, heading, description, buttonLabel, buttonUrl } = attributes;
	const safeAlignment = alignment === 'right' ? 'right' : 'left';

	const blockProps = useBlockProps({
		className: `enigma-progress-step enigma-progress-step--${safeAlignment}`,
	});

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Settings', 'enigma')} initialOpen>
					<SelectControl
						label={__('Alignment', 'enigma')}
						value={safeAlignment}
						options={[
							{ label: __('Left', 'enigma'), value: 'left' },
							{ label: __('Right', 'enigma'), value: 'right' },
						]}
						onChange={(value) => setAttributes({ alignment: value })}
					/>
					<TextControl
						label={__('Step number', 'enigma')}
						value={number}
						onChange={(value) => setAttributes({ number: value })}
					/>
					<TextControl
						label={__('Button label', 'enigma')}
						value={buttonLabel}
						onChange={(value) => setAttributes({ buttonLabel: value })}
					/>
					<TextControl
						label={__('Button URL', 'enigma')}
						value={buttonUrl}
						onChange={(value) => setAttributes({ buttonUrl: value })}
					/>
				</PanelBody>
			</InspectorControls>

			<div {...blockProps}>
				<div className="enigma-progress-step__inner">
					<div className="enigma-progress-step__number">{number}</div>

					<div className="enigma-progress-step__content">
						<RichText
							tagName="p"
							className="enigma-progress-step__heading"
							value={heading}
							allowedFormats={[]}
							onChange={(value) => setAttributes({ heading: value })}
							placeholder={__('Enter heading...', 'enigma')}
						/>
						<RichText
							tagName="p"
							className="enigma-progress-step__description"
							value={description}
							allowedFormats={['core/bold', 'core/italic', 'core/link']}
							onChange={(value) => setAttributes({ description: value })}
							placeholder={__('Enter description...', 'enigma')}
						/>

						{buttonLabel && (
							<span className="wp-block-button__link enigma-progress-step__button">
								{buttonLabel}
							</span>
						)}
					</div>
				</div>
			</div>
		</>
	);
}
