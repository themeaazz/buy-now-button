<?php
/**
 * @author  NazmulHasan
 * @since   1.0
 * @version 1.0
 */

use BNBF_Woocommerce\BNBF_Controller;
?>

<div class="wrap">

    </br>

    <form action="" method="post">

        <table class="form-table">

            <h3><?php _e( 'General Settings', 'sovware' ); ?></h3>

            <tbody>

                <tr>

                    <th scope="row"><label for="buy_now_single"><?php _e( 'Enable for single product', 'sovware' ); ?></label></th>

                    <td>
                        <input type="checkbox" name="buy_now_single" id="buy_now_single" value="buy_now_single" <?php echo checked( BNBF_Controller::get_options('single'), 'buy_now_single' ); ?>>
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_product_card"><?php _e( 'Enable for card product', 'sovware' ); ?></label></th>

                    <td>
                        <input type="checkbox" name="buy_now_product_card" id="buy_now_product_card" value="buy_now_product_card" <?php echo checked( BNBF_Controller::get_options('all'), 'buy_now_product_card' ); ?>>
                    </td>

                </tr>

                <tr>

                    <th scope="row">
                        <label for="buy_now_label"><?php _e( 'Button label', 'sovware' ); ?></label>
                    </th>

                    <td>
                        <input type="text" name="buy_now_label" id="buy_now_label" class="regular-text" value="<?php echo esc_attr( BNBF_Controller::get_options('label') ); ?>">
                    </td>

                </tr>

                <tr>

                    <th scope="row">
                        <label><?php _e( 'Single product button position', 'sovware' ); ?></label>
                    </th>

                    <td>
                        <input type="radio" id="before_single" name="single_product_position" value="before_single" <?php echo checked( BNBF_Controller::get_options('single_position'), 'before_single' ); ?>>
                        <label for="before_single"><?php echo __( 'Before Add To Cart Button', 'sovware' ); ?></label><br>
                        <input type="radio" id="after_single" name="single_product_position" value="after_single" <?php echo checked( BNBF_Controller::get_options('single_position'), 'after_single' ); ?>>
                        <label for="after_single"><?php echo __( 'After Add To Cart Button', 'sovware' ); ?></label><br>
                        <input type="radio" id="replace_single" name="single_product_position" value="replace_single" <?php echo checked( BNBF_Controller::get_options('single_position'), 'replace_single' ); ?>>
                        <label for="replace_single"><?php echo __( 'Replace Add To Cart Button', 'sovware' ); ?></label><br>
                    </td>

                </tr>

                <tr>

                    <th scope="row">
                        <label><?php _e( 'Card product button position', 'sovware' ); ?></label>
                    </th>

                    <td>
                        <input type="radio" id="before_card" name="card_product_position" value="before_card" <?php echo checked( BNBF_Controller::get_options('card_position'), 'before_card' ); ?>>
                        <label for="before_card"><?php echo __( 'Before Add To Cart Button', 'sovware' ); ?></label><br>
                        <input type="radio" id="after_card" name="card_product_position" value="after_card" <?php echo checked( BNBF_Controller::get_options('card_position'), 'after_card' ); ?>>
                        <label for="after_card"><?php echo __( 'After Add To Cart Button', 'sovware' ); ?></label><br>
                        <input type="radio" id="replace_card" name="card_product_position" value="replace_card" <?php echo checked( BNBF_Controller::get_options('card_position'), 'replace_card' ); ?>>
                        <label for="replace_card"><?php echo __( 'Replace Add To Cart Button', 'sovware' ); ?></label><br>
                    </td>

                </tr>

            </tbody>

        </table>

        </br>

        <table class="form-table">
            
            <h3><?php _e( 'Customize Settings (product card)', 'sovware' ); ?></h3>
            
            <tbody>

                <tr>

                    <th scope="row"><label for="buy_now_color"><?php _e( 'Text color', 'sovware' ); ?></label></th>

                    <td>
                        <input type="color" name="buy_now_color" id="buy_now_color" value="<?php echo esc_attr( BNBF_Controller::get_options('color') ); ?>">
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_bg_color"><?php _e( 'Background color', 'sovware' ); ?></label></th>

                    <td><input type="color" name="buy_now_bg_color" id="buy_now_bg_color" value="<?php echo esc_attr( BNBF_Controller::get_options('bg_color') ); ?>"></td>

                </tr>
                
                <tr>

                    <th scope="row"><label for="buy_now_hover_color"><?php _e( 'Text hover color', 'sovware' ); ?></label></th>

                    <td>
                        <input type="color" name="buy_now_hover_color" id="buy_now_hover_color" value="<?php echo esc_attr( BNBF_Controller::get_options('hover_color') ); ?>">
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_bg_hover_color"><?php _e( 'Background hover color', 'sovware' ); ?></label></th>

                    <td>
                        <input type="color" name="buy_now_bg_hover_color" id="buy_now_bg_hover_color" value="<?php echo esc_attr( BNBF_Controller::get_options('hover_bg_color') ); ?>">
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_p_top"><?php _e( 'Padding', 'sovware' ); ?></label></th>

                    <td>
                        <input type="number" name="buy_now_p_top" id="buy_now_p_top" value="<?php echo esc_attr( BNBF_Controller::get_options('p_top') ); ?>" placeholder="top">
                        <input type="number" name="buy_now_p_right" id="buy_now_p_right" value="<?php echo esc_attr( BNBF_Controller::get_options('p_right') ); ?>" placeholder="right">
                        <input type="number" name="buy_now_p_bottom" id="buy_now_p_bottom" value="<?php echo esc_attr( BNBF_Controller::get_options('p_bottom') ); ?>" placeholder="bottom">
                        <input type="number" name="buy_now_p_left" id="buy_now_p_left" value="<?php echo esc_attr( BNBF_Controller::get_options('p_left') ); ?>" placeholder="left">
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_m_top"><?php _e( 'Margin', 'sovware' ); ?></label></th>

                    <td>
                        <input type="number" name="buy_now_m_top" id="buy_now_m_top" value="<?php echo esc_attr( BNBF_Controller::get_options('m_top') ); ?>" placeholder="top">
                        <input type="number" name="buy_now_m_right" id="buy_now_m_right" value="<?php echo esc_attr( BNBF_Controller::get_options('m_right') ); ?>" placeholder="right">
                        <input type="number" name="buy_now_m_bottom" id="buy_now_m_bottom" value="<?php echo esc_attr( BNBF_Controller::get_options('m_bottom') ); ?>" placeholder="bottom">
                        <input type="number" name="buy_now_m_left" id="buy_now_m_left" value="<?php echo esc_attr( BNBF_Controller::get_options('m_left') ); ?>" placeholder="left">
                    </td>

                </tr>

            </tbody>
            
        </table>

        <table class="form-table">
            
            <h3><?php _e( 'Customize Settings (single product)', 'sovware' ); ?></h3>
            
            <tbody>

                <tr>

                    <th scope="row"><label for="buy_now_s_color"><?php _e( 'Text color', 'sovware' ); ?></label></th>

                    <td>
                        <input type="color" name="buy_now_s_color" id="buy_now_s_color" value="<?php echo esc_attr( BNBF_Controller::get_options('s_color') ); ?>">
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_bg_s_color"><?php _e( 'Background color', 'sovware' ); ?></label></th>

                    <td><input type="color" name="buy_now_bg_s_color" id="buy_now_bg_s_color" value="<?php echo esc_attr( BNBF_Controller::get_options('bg_s_color') ); ?>"></td>

                </tr>
                
                <tr>

                    <th scope="row"><label for="buy_now_hover_s_color"><?php _e( 'Text hover color', 'sovware' ); ?></label></th>

                    <td>
                        <input type="color" name="buy_now_hover_s_color" id="buy_now_hover_s_color" value="<?php echo esc_attr( BNBF_Controller::get_options('hover_s_color') ); ?>">
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_bg_hover_s_color"><?php _e( 'Background hover color', 'sovware' ); ?></label></th>

                    <td>
                        <input type="color" name="buy_now_bg_hover_s_color" id="buy_now_bg_hover_s_color" value="<?php echo esc_attr( BNBF_Controller::get_options('hover_bg_s_color') ); ?>">
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_s_p_top"><?php _e( 'Padding', 'sovware' ); ?></label></th>

                    <td>
                        <input type="number" name="buy_now_s_p_top" id="buy_now_s_p_top" value="<?php echo esc_attr( BNBF_Controller::get_options('s_p_top') ); ?>" placeholder="top">
                        <input type="number" name="buy_now_s_p_right" id="buy_now_s_p_right" value="<?php echo esc_attr( BNBF_Controller::get_options('s_p_right') ); ?>" placeholder="right">
                        <input type="number" name="buy_now_s_p_bottom" id="buy_now_s_p_bottom" value="<?php echo esc_attr( BNBF_Controller::get_options('s_p_bottom') ); ?>" placeholder="bottom">
                        <input type="number" name="buy_now_s_p_left" id="buy_now_s_p_left" value="<?php echo esc_attr( BNBF_Controller::get_options('s_p_left') ); ?>" placeholder="left">
                    </td>

                </tr>

                <tr>

                    <th scope="row"><label for="buy_now_s_m_top"><?php _e( 'Margin', 'sovware' ); ?></label></th>

                    <td>
                        <input type="number" name="buy_now_s_m_top" id="buy_now_s_m_top" value="<?php echo esc_attr( BNBF_Controller::get_options('s_m_top') ); ?>" placeholder="top">
                        <input type="number" name="buy_now_s_m_right" id="buy_now_s_m_right" value="<?php echo esc_attr( BNBF_Controller::get_options('s_m_right') ); ?>" placeholder="right">
                        <input type="number" name="buy_now_s_m_bottom" id="buy_now_s_m_bottom" value="<?php echo esc_attr( BNBF_Controller::get_options('s_m_bottom') ); ?>" placeholder="bottom">
                        <input type="number" name="buy_now_s_m_left" id="buy_now_s_m_left" value="<?php echo esc_attr( BNBF_Controller::get_options('s_m_left') ); ?>" placeholder="left">
                    </td>

                </tr>

            </tbody>
            
        </table>

        </br>

        <?php wp_nonce_field( 'buy-now-button' ) ?>

        <?php submit_button( __( 'Save', 'sovware' ), 'primary', 'save_changes' ); ?>

    </form>

</div>