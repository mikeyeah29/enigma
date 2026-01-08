# CSS

`theme.json` is the primary source of truth for styling in this theme.  
As much styling as possible is defined there, and the generated CSS variables
are then reused throughout the rest of the CSS.

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
