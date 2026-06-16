import { __ } from '@wordpress/i18n';
import {
	InnerBlocks,
	InspectorControls,
	MediaUpload,
	MediaUploadCheck,
	PanelColorSettings,
	useBlockProps,
} from '@wordpress/block-editor';
import { Button, FocalPointPicker, PanelBody, RangeControl } from '@wordpress/components';
import { ALLOWED_BLOCKS, CTA_TEMPLATE, getCtaBackgroundStyle } from './constants';

export default function Edit({ attributes, setAttributes }) {
	const {
		backgroundImageId,
		backgroundImageUrl,
		backgroundImageAlt,
		backgroundFocalPoint,
		overlayColor,
		overlayOpacity,
	} = attributes;

	const blockProps = useBlockProps({
		className: 'enigma-cta-section',
		style: getCtaBackgroundStyle(attributes),
	});

	const onSelectBackground = (media) => {
		setAttributes({
			backgroundImageId: media.id,
			backgroundImageUrl: media.url,
			backgroundImageAlt: media.alt || media.title || '',
		});
	};

	const removeBackground = () => {
		setAttributes({
			backgroundImageId: undefined,
			backgroundImageUrl: '',
			backgroundImageAlt: '',
		});
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Background image', 'enigma')} initialOpen>
					<MediaUploadCheck>
						<MediaUpload
							onSelect={onSelectBackground}
							allowedTypes={['image']}
							value={backgroundImageId}
							render={({ open }) => (
								<div className="enigma-cta-background-control">
									{backgroundImageUrl && (
										<img
											className="enigma-cta-background-control__preview"
											src={backgroundImageUrl}
											alt={backgroundImageAlt || ''}
										/>
									)}

									<div className="enigma-cta-background-control__actions">
										<Button variant="secondary" onClick={open}>
											{backgroundImageUrl
												? __('Replace image', 'enigma')
												: __('Select image', 'enigma')}
										</Button>

										{backgroundImageUrl && (
											<Button
												variant="link"
												isDestructive
												onClick={removeBackground}
											>
												{__('Remove image', 'enigma')}
											</Button>
										)}
									</div>
								</div>
							)}
						/>
					</MediaUploadCheck>

					{backgroundImageUrl && (
						<FocalPointPicker
							label={__('Focal point', 'enigma')}
							url={backgroundImageUrl}
							value={backgroundFocalPoint}
							onChange={(value) =>
								setAttributes({ backgroundFocalPoint: value })
							}
						/>
					)}
				</PanelBody>

				<PanelColorSettings
					title={__('Overlay', 'enigma')}
					initialOpen={false}
					colorSettings={[
						{
							value: overlayColor,
							onChange: (value) =>
								setAttributes({ overlayColor: value || '#E7E2DE' }),
							label: __('Overlay colour', 'enigma'),
						},
					]}
				>
					<RangeControl
						label={__('Overlay opacity', 'enigma')}
						value={overlayOpacity}
						onChange={(value) => setAttributes({ overlayOpacity: value })}
						min={0}
						max={100}
						step={1}
					/>
				</PanelColorSettings>
			</InspectorControls>

			<section {...blockProps}>
				<div className="enigma-cta-section__overlay" aria-hidden="true" />
				<div className="enigma-cta-section__inner">
					<InnerBlocks
						allowedBlocks={ALLOWED_BLOCKS}
						template={CTA_TEMPLATE}
						templateLock="all"
					/>
				</div>
			</section>
		</>
	);
}
