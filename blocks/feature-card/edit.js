import { __ } from '@wordpress/i18n';
import {
	InspectorControls,
	MediaUpload,
	MediaUploadCheck,
	RichText,
	useBlockProps,
} from '@wordpress/block-editor';
import { Button, PanelBody } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { iconId, iconUrl, iconAlt, title, content } = attributes;
	const blockProps = useBlockProps({
		className: 'enigma-feature-card',
	});

	const onSelectIcon = (media) => {
		setAttributes({
			iconId: media.id,
			iconUrl: media.url,
			iconAlt: media.alt || media.title || '',
		});
	};

	const removeIcon = () => {
		setAttributes({
			iconId: undefined,
			iconUrl: '',
			iconAlt: '',
		});
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Icon', 'enigma')} initialOpen>
					<MediaUploadCheck>
						<MediaUpload
							onSelect={onSelectIcon}
							allowedTypes={['image']}
							value={iconId}
							render={({ open }) => (
								<div className="enigma-feature-card-icon-control">
									{iconUrl && (
										<img
											className="enigma-feature-card-icon-control__preview"
											src={iconUrl}
											alt={iconAlt || ''}
										/>
									)}

									<div className="enigma-feature-card-icon-control__actions">
										<Button variant="secondary" onClick={open}>
											{iconUrl
												? __('Replace icon', 'enigma')
												: __('Select icon', 'enigma')}
										</Button>

										{iconUrl && (
											<Button
												variant="link"
												isDestructive
												onClick={removeIcon}
											>
												{__('Remove icon', 'enigma')}
											</Button>
										)}
									</div>
								</div>
							)}
						/>
					</MediaUploadCheck>
				</PanelBody>
			</InspectorControls>

			<div {...blockProps}>
				{iconUrl ? (
					<div className="enigma-feature-card__icon">
						<img src={iconUrl} alt={iconAlt || ''} />
					</div>
				) : (
					<MediaUploadCheck>
						<MediaUpload
							onSelect={onSelectIcon}
							allowedTypes={['image']}
							value={iconId}
							render={({ open }) => (
								<Button
									className="enigma-feature-card__icon enigma-feature-card__icon-placeholder"
									variant="secondary"
									onClick={open}
								>
									{__('Select icon', 'enigma')}
								</Button>
							)}
						/>
					</MediaUploadCheck>
				)}

				<div className="enigma-feature-card__body">
					<RichText
						tagName="h3"
						className="enigma-feature-card__title"
						value={title}
						allowedFormats={[]}
						onChange={(value) => setAttributes({ title: value })}
						placeholder={__('Feature title', 'enigma')}
					/>
					<RichText
						tagName="p"
						className="enigma-feature-card__content"
						value={content}
						allowedFormats={['core/bold', 'core/italic', 'core/link']}
						onChange={(value) => setAttributes({ content: value })}
						placeholder={__('Supporting copy', 'enigma')}
					/>
				</div>
			</div>
		</>
	);
}
