export const CTA_TEMPLATE = [
	[
		'core/heading',
		{
			level: 2,
			textAlign: 'center',
			content: "If you're considering working together, get in touch.",
		},
	],
	[
		'core/paragraph',
		{
			align: 'center',
			content: "Initial conversations are informal and there's no obligation.",
		},
	],
	[
		'core/buttons',
		{
			layout: {
				type: 'flex',
				justifyContent: 'center',
			},
		},
		[
			[
				'core/button',
				{
					text: 'Get In Touch',
					className: 'is-style-hawthorn-arrow',
				},
			],
		],
	],
];

export const ALLOWED_BLOCKS = ['core/heading', 'core/paragraph', 'core/buttons'];

export const getCtaBackgroundStyle = ({
	backgroundImageUrl,
	backgroundFocalPoint,
	overlayColor,
	overlayOpacity,
}) => {
	const focalPoint = backgroundFocalPoint || { x: 0.5, y: 0.5 };

	return {
		backgroundImage: backgroundImageUrl ? `url(${backgroundImageUrl})` : undefined,
		backgroundPosition: `${Math.round(focalPoint.x * 100)}% ${Math.round(
			focalPoint.y * 100
		)}%`,
		'--enigma-cta-overlay-color': overlayColor || '#E7E2DE',
		'--enigma-cta-overlay-opacity': `${(overlayOpacity ?? 82) / 100}`,
	};
};
