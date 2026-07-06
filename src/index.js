/**
 * Theme Entry Point
 */

// Global styles (site-wide)
import './sass/style.scss';

// Import all block styles
const requireBlockStyles = require.context(
    '../blocks',         // look in /blocks
    true,                // search subfolders
    /style\.scss$/       // only style.scss files
);
requireBlockStyles.keys().forEach(requireBlockStyles);

// Block frontend scripts
import '../blocks/thoughts/frontend';


// Global JS (site-wide)
import './js/helpers';
import './js/main';
import './js/accordian';
import './js/cookie-notice';
