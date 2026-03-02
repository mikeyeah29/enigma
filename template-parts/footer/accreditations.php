<?php

$files = glob(get_theme_file_path('img/accreditations/*.{png,jpg,jpeg,webp,svg}'), GLOB_BRACE);
if (! is_array($files) || empty($files)) {
    return;
}

$logos = array();
foreach ($files as $file) {
    $basename = basename($file);
    if (strpos($basename, '.') === 0) {
        continue;
    }

    $slug = sanitize_title(pathinfo($basename, PATHINFO_FILENAME));
    $logos[$slug] = get_theme_file_uri('img/accreditations/' . $basename);
}

$labels = array(
    'bapc' => 'BAPC',
    'br'   => 'BR',
    'psa'  => 'PSA',
);

$selected = array();
foreach (array_keys($logos) as $slug) {
    if (get_theme_mod('footer_accreditation_' . $slug, false)) {
        $selected[] = $slug;
    }
}

if (empty($selected)) {
    return;
}
?>

<?php if (! empty($logos)) : ?>
    <ul class="ul-reset footer-accreditations">
        <?php foreach ($selected as $slug) : ?>
            <?php
            $slug = sanitize_title((string) $slug);
            if (empty($logos[$slug])) {
                continue;
            }
            $label = $labels[$slug] ?? strtoupper($slug);
            ?>
            <li>
                <img src="<?php echo esc_url($logos[$slug]); ?>" alt="<?php echo esc_attr($label); ?>" loading="lazy" />
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
