import {
	BlockControls,
	useBlockProps,
} from '@wordpress/block-editor';
import {
	Dropdown,
	RangeControl,
	SelectControl,
	ToolbarButton,
	ToolbarGroup,
} from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { __ } from '@wordpress/i18n';

export default function Edit({ attributes, setAttributes }) {
	const { limit, service, style } = attributes;

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
			<BlockControls>
				<ToolbarGroup>
					<Dropdown
						popoverProps={{ placement: 'bottom-start' }}
						renderToggle={({ isOpen, onToggle }) => (
							<ToolbarButton
								icon="admin-settings"
								label={__('Testimonial settings', 'enigma')}
								onClick={onToggle}
								aria-expanded={isOpen}
							/>
						)}
						renderContent={() => (
							<div className="enigma-testimonial-slider__toolbar-settings">
								<RangeControl
									label={__(
										'Number of testimonials',
										'enigma'
									)}
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
							</div>
						)}
					/>
				</ToolbarGroup>
			</BlockControls>

			<div {...blockProps}>
				<svg
					className="enigma-testimonial-slider__preview-icon"
					width="91"
					height="68"
					viewBox="0 0 91 68"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					aria-hidden="true"
					focusable="false"
				>
					<path
						d="M37.8522 0V27.7162C37.8522 49.1062 23.7055 63.6037 3.79167 67.5L0.0189583 59.4338C9.24029 55.995 15.1667 45.7913 15.1667 37.5H0V0H37.8522ZM91 0V27.7162C91 49.1062 76.7888 63.6075 56.875 67.5L53.0985 59.4338C62.3236 55.995 68.25 45.7913 68.25 37.5H53.1478V0H91Z"
						fill="#C7C3B0"
					/>
				</svg>
				<div className="enigma-testimonial-slider__preview-content">
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
			</div>
		</>
	);
}
