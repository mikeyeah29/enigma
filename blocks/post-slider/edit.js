import {
    useBlockProps,
    InspectorControls
} from '@wordpress/block-editor';

import {
    PanelBody,
    SelectControl,
    RangeControl
} from '@wordpress/components';

import { useSelect } from '@wordpress/data';

export default function Edit({ attributes, setAttributes }) {
    const { postType, limit, slidesToShow } = attributes;

    const postTypes = useSelect(
        (select) =>
            select('core').getPostTypes({ per_page: -1 }) || [],
        []
    );

    const options = postTypes
        .filter((type) => type.viewable)
        .map((type) => ({
            label: type.name,
            value: type.slug,
        }));

    const blockProps = useBlockProps({
        className: 'enigma-post-slider',
    });

    return (
        <>
            <InspectorControls>
                <PanelBody title="Query Settings" initialOpen>
                    <SelectControl
                        label="Post type"
                        value={postType}
                        options={options}
                        onChange={(value) =>
                            setAttributes({ postType: value })
                        }
                    />

                    <RangeControl
                        label="Number of posts"
                        min={1}
                        max={20}
                        value={limit}
                        onChange={(value) =>
                            setAttributes({ limit: value })
                        }
                    />

                    <RangeControl
                        label="Slides to show"
                        min={1}
                        max={6}
                        value={slidesToShow}
                        onChange={(value) =>
                            setAttributes({ slidesToShow: value })
                        }
                    />
                </PanelBody>
            </InspectorControls>

            <div {...blockProps}>
                <p><strong>Post Slider</strong></p>
                <p>
                    Showing <code>{limit}</code> posts from{' '}
                    <code>{postType}</code>
                </p>
                <p>
                    Slides to show: <code>{slidesToShow}</code>
                </p>
            </div>
        </>
    );
}
