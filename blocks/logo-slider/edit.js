import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

const ALLOWED_BLOCKS = ['core/image'];

const TEMPLATE = [
    ['core/image', { sizeSlug: 'full' }],
    ['core/image', { sizeSlug: 'full' }],
    ['core/image', { sizeSlug: 'full' }],
];

export default function Edit() {
    const blockProps = useBlockProps({
        className: 'enigma-logo-slider',
    });

    return (
        <div {...blockProps}>
            <div className="blaze-slider">
                <div className="blaze-container">
                    <div className="blaze-track-container">
                        <div className="blaze-track">
                            <InnerBlocks
                                allowedBlocks={ALLOWED_BLOCKS}
                                template={TEMPLATE}
                                orientation="horizontal"
                                renderAppender={InnerBlocks.ButtonBlockAppender}
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
