<?php
/**
 * Render callback for Issues List block.
 *
 * @var array $attributes
 */

$issues = isset( $attributes['issues'] ) && is_array( $attributes['issues'] )
    ? $attributes['issues']
    : array();

$issues = array_values(
    array_filter(
        array_map(
            static function ( $issue ) {
                return is_string( $issue ) ? trim( $issue ) : '';
            },
            $issues
        )
    )
);

if ( empty( $issues ) ) {
    return;
}

$block_props = get_block_wrapper_attributes(
    array(
        'class' => 'enigma-issues-list',
    )
);
?>

<div <?php echo $block_props; ?>>
    <div class="enigma-issues-list__grid">
        <?php foreach ( $issues as $issue ) : ?>
            <span class="enigma-issues-list__pill"><?php echo esc_html( $issue ); ?></span>
        <?php endforeach; ?>
    </div>
</div>
