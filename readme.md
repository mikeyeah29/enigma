# CSS

`theme.json` is the primary source of truth for styling in this theme.  
As much styling as possible is defined there, and the generated CSS variables
are then reused throughout the rest of the CSS.

## Token contract

Child themes should override token values while retaining these slugs. Enigma
templates, blocks, and styles only reference tokens declared by this contract.

### Colours

| Slug | Purpose |
| --- | --- |
| `background` | Default page background |
| `text` | Default foreground and heading colour |
| `primary` | Main brand colour |
| `secondary` | High-contrast supporting brand colour and default links/buttons |
| `accent` | Primary decorative or call-to-action accent |
| `accent-2` | Secondary decorative accent |
| `neutral` | Subtle backgrounds, borders, and dividers |
| `white` | Literal white for text, icons, and surfaces that must remain white |
| `transparent` | Transparent utility colour used by configurable headers and dividers |

### Typography

| Slug | Purpose |
| --- | --- |
| `body` | Body copy and interface text |
| `heading` | Headings and display text |
| `script` | Optional decorative handwriting-style text |

The stable font-size slugs are `sm`, `md`, `lg`, `xl`, and `hero`. The stable
spacing slugs are `none`, `xs`, `sm`, `md`, `lg`, and `xl`.

Child themes may add project-specific tokens, but reusable parent components
must not depend on them.

## Font sizes

Font sizes defined in `theme.json` are exposed as global CSS variables using
the following format:

```css
var(--wp--preset--font-size--{slug})
```

Example 

```css
h1 {
	font-size: var(--wp--preset--font-size--hero);
}

p {
	font-size: var(--wp--preset--font-size--md);
}
```
