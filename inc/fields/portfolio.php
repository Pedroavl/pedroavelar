<?php
// Metabox portfolio
function pwp_register_portfolio_meta_box() {
    add_meta_box(
        'pwp-register-metabox',
        'Portfolio',
        'pwp_callback',
        'portfolio'
    );
}
add_action('add_meta_boxes', 'pwp_register_portfolio_meta_box');

function pwp_callback($post) {
    $link_portfolio= get_post_meta($post->ID, '_link_portfolio', true);
        ?>
            <label for="link_portfolio">Link do site</label>
            <input type="url" value="<?php echo $link_portfolio; ?>" name="link_portfolio" style="width: 100%"/>
            <br/>
        <?php
}

function pwp_save_data_meta_box($post_id) {
    foreach($_POST as $key => $value) {
        if($key !== 'link_portfolio') {
            continue;
        }

        update_post_meta(
            $post_id,
            '_' . $key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'pwp_save_data_meta_box');