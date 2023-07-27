<?php
// Metabox trajetória
function pwp_register_trajetoria_meta_box() {
    add_meta_box(
        'pwp-register-metabox',
        'Trajetória',
        'pwp_callback_trajetoria',
        'trajetoria'
    );
}
add_action('add_meta_boxes', 'pwp_register_trajetoria_meta_box');

function pwp_callback_trajetoria($post) {
    $data_trajetoria= get_post_meta($post->ID, '_data_trajetoria', true);
        ?>
            <label for="data_trajetoria">data de entrada</label>
            <input type="text" value="<?php echo $data_trajetoria; ?>" name="data_trajetoria" style="width: 100%"/>
            <br/>
        <?php
}

function pwp_save_data_meta_box_trajetoria($post_id) {
    foreach($_POST as $key => $value) {
        if($key !== 'data_trajetoria') {
            continue;
        }

        update_post_meta(
            $post_id,
            '_' . $key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'pwp_save_data_meta_box_trajetoria');