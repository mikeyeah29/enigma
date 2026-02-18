import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextareaControl } from '@wordpress/components';

const DEFAULT_ISSUES = [
    'ADHD',
    'Abuse',
    'Addiction',
    'Anger',
    'Anxiety',
    'Autism',
    'Bereavement',
    'Body dysmorphia',
    'Breakdown',
    'Bullying',
    'Career changes',
    'Crisis',
    'Depression',
    'Eating disorders',
    'Emotional abuse',
    'Fear',
    'Feeling alone / isolated',
    'Health issues',
    'Identity issues',
    'Indecisiveness',
    'LGBT issues',
    'Loss of meaning',
    'Low self confidence',
    'Motivation / focus',
    'Negative thinking',
    'OCD',
    'PTSD',
    'Personality disorders',
    'Phobias',
    'Psychosexual',
    'Psychosis',
    'Relationship problems',
    'Self sabotage',
    'Sexual abuse',
    'Sexuality',
    'Sleep disorders',
    'Stress',
    'Substance misuse',
    'Trauma',
];

const parseIssues = (value) =>
    value
        .split('\n')
        .map((item) => item.trim())
        .filter(Boolean);

export default function Edit({ attributes, setAttributes }) {
    const issues = Array.isArray(attributes.issues) && attributes.issues.length
        ? attributes.issues
        : DEFAULT_ISSUES;

    const blockProps = useBlockProps({
        className: 'enigma-issues-list',
    });

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Issues', 'enigma')} initialOpen>
                    <TextareaControl
                        label={__('Issue labels (one per line)', 'enigma')}
                        help={__('Add one issue per line.', 'enigma')}
                        value={issues.join('\n')}
                        onChange={(value) =>
                            setAttributes({ issues: parseIssues(value) })
                        }
                        rows={16}
                    />
                </PanelBody>
            </InspectorControls>

            <div {...blockProps}>
                <div className="enigma-issues-list__grid">
                    {issues.map((issue, index) => (
                        <span key={`${issue}-${index}`} className="enigma-issues-list__pill">
                            {issue}
                        </span>
                    ))}
                </div>
            </div>
        </>
    );
}
