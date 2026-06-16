import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';

import './style.scss';
import './editor.scss';

registerBlockType('enigma/testimonial-slider', {
    edit: Edit,
    save: () => null
});
