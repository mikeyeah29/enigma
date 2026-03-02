<?php

if (! function_exists('enigma_get_accreditation_options')) {
    return;
}

$labels = enigma_get_accreditation_options();
if (! is_array($labels) || empty($labels)) {
    return;
}

$selected = array();
foreach ($labels as $slug => $label) {
    $slug = sanitize_title((string) $slug);
    if ($slug !== '' && get_theme_mod('footer_accreditation_' . $slug, false)) {
        $selected[] = $slug;
    }
}

if (empty($selected)) {
    return;
}

$available_files = glob(get_theme_file_path('img/accreditations/*.{png,jpg,jpeg,webp,svg}'), GLOB_BRACE);
$available_by_slug = array();

if (is_array($available_files)) {
    foreach ($available_files as $file_path) {
        $basename = basename($file_path);
        $file_slug = sanitize_title((string) pathinfo($basename, PATHINFO_FILENAME));
        if ($file_slug === '') {
            continue;
        }
        $available_by_slug[$file_slug] = $basename;
    }
}

$logos = array();
foreach ($selected as $slug) {
    $slug = sanitize_title((string) $slug);
    if ($slug === '') {
        continue;
    }

    $candidates = array(
        $slug,
        str_replace('bapc', 'bacp', $slug),
        str_replace('bacp', 'bapc', $slug),
        $slug . '-nobg',
        str_replace('bapc', 'bacp', $slug) . '-nobg',
    );

    foreach ($candidates as $candidate) {
        if (empty($available_by_slug[$candidate])) {
            continue;
        }

        $logos[$slug] = get_theme_file_uri('img/accreditations/' . $available_by_slug[$candidate]);
        break;
    }
}

if (empty($logos)) {
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
