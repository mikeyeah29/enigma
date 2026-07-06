import {
	useBlockProps,
	RichText,
	InspectorControls,
} from '@wordpress/block-editor';
import { PanelBody, RangeControl, SelectControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { __ } from '@wordpress/i18n';

export default function Edit({ attributes, setAttributes }) {
	const { limit, service, style, preheadline, headline } = attributes;

	const background = style?.color?.background || 'transparent';

	const services = useSelect(
		(select) =>
			select('core').getEntityRecords('taxonomy', 'review_service', {
				per_page: -1,
				orderby: 'name',
				order: 'asc',
			}) || [],
		[]
	);

	const serviceOptions = [
		{
			label: __('All services', 'enigma'),
			value: 'all',
		},
		...services.map((term) => ({
			label: term.name,
			value: String(term.id),
		})),
	];

	const blockProps = useBlockProps({
		style: {
			backgroundColor: background,
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
					<SelectControl
						label={__('Service', 'enigma')}
						value={service ?? 'all'}
						options={serviceOptions}
						onChange={(value) =>
							setAttributes({ service: value })
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
				<p>
					{__('Service:', 'enigma')}{' '}
					{
						serviceOptions.find(
							(option) => option.value === (service ?? 'all')
						)?.label
					}
				</p>
			</div>
		</>
	);
}
