<?php
/**
 * Plugin Name: Buytiti - Home - Cupons
 * Description: Plugin para mostrar tarjetas de cupones y bloque de categorías en Home.
 * Version: 1.0
 * Author: Fernando Isaac González Medina
 */

 // Evitar el acceso directo al archivo
if (!defined('ABSPATH')) {
    exit;
}

// Registrar el shortcode
function cupon_cards_shortcode($atts) {
    $html = '
    <div class="product-list" role="list">
    <div class="product-item-cupon-buytiti" role="listitem">
        <article class="product-card-cupon-buytiti">
            <a class="product-link-cupon-buytiti" href="#">
                <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif 1x,
                hhttps://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif 2x" src="https://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif" alt="" class="product-image-cupon-buytiti" width="395" height="222" />
                <div class="product-info-cupon-buytiti">
                    <h3 class="product-code-cupon-buytiti">
                        Código: BUYTITIBELLEZA
                    </h3>
                    <p class="product-validity-cupon-buytiti" title="Vigencia 7 al 30 de junio 2024" style="height: 3.3rem; overflow: hidden; text-overflow: ellipsis;">
                        Vigencia 7 al 30 de junio 2024
                    </p>
                </div>
                <div class="product-actions-cupon-buytiti">
                    <span class="view-products-button-cupon-buytiti">
                        Ver productos
                    </span>
                </div>
            </a>
        </article>
    </div>
    <div class="product-item-cupon-buytiti" role="listitem">
        <article class="product-card-cupon-buytiti">
            <a class="product-link-cupon-buytiti" href="#">
                <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif 1x,
                hhttps://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif 2x" src="https://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif" alt="" class="product-image-cupon-buytiti" width="395" height="222" />
                <div class="product-info-cupon-buytiti">
                    <h3 class="product-code-cupon-buytiti">
                        Código: BUYTITIBELLEZA
                    </h3>
                    <p class="product-validity-cupon-buytiti" title="Vigencia 7 al 30 de junio 2024" style="height: 3.3rem; overflow: hidden; text-overflow: ellipsis;">
                        Vigencia 7 al 30 de junio 2024
                    </p>
                </div>
                <div class="product-actions-cupon-buytiti">
                    <span class="view-products-button-cupon-buytiti">
                        Ver productos
                    </span>
                </div>
            </a>
        </article>
    </div>
    <div class="product-item-cupon-buytiti" role="listitem">
        <article class="product-card-cupon-buytiti">
            <a class="product-link-cupon-buytiti" href="#">
                <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif 1x,
                hhttps://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif 2x" src="https://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif" alt="" class="product-image-cupon-buytiti" width="395" height="222" />
                <div class="product-info-cupon-buytiti">
                    <h3 class="product-code-cupon-buytiti">
                        Código: BUYTITIBELLEZA
                    </h3>
                    <p class="product-validity-cupon-buytiti" title="Vigencia 7 al 30 de junio 2024" style="height: 3.3rem; overflow: hidden; text-overflow: ellipsis;">
                        Vigencia 7 al 30 de junio 2024
                    </p>
                </div>
                <div class="product-actions-cupon-buytiti">
                    <span class="view-products-button-cupon-buytiti">
                        Ver productos
                    </span>
                </div>
            </a>
        </article>
    </div>
    <div class="product-item-cupon-buytiti" role="listitem">
        <article class="product-card-cupon-buytiti">
            <a class="product-link-cupon-buytiti" href="#">
                <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif 1x,
                hhttps://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif 2x" src="https://buytiti.com/wp-content/uploads/2024/06/Prueba-diseno-medida.gif" alt="" class="product-image-cupon-buytiti" width="395" height="222" />
                <div class="product-info-cupon-buytiti">
                    <h3 class="product-code-cupon-buytiti">
                        Código: BUYTITIBELLEZA
                    </h3>
                    <p class="product-validity-cupon-buytiti" title="Vigencia 7 al 30 de junio 2024" style="height: 3.3rem; overflow: hidden; text-overflow: ellipsis;">
                        Vigencia 7 al 30 de junio 2024
                    </p>
                </div>
                <div class="product-actions-cupon-buytiti">
                    <span class="view-products-button-cupon-buytiti">
                        Ver productos
                    </span>
                </div>
            </a>
        </article>
    </div>
</div>
    ';
    return $html;
}
add_shortcode('cupon_cards', 'cupon_cards_shortcode');

// Enqueue el CSS
function cupon_cards_styles() {
    wp_enqueue_style('cupon-cards-styles', plugin_dir_url(__FILE__) . '/buytiti-home-cupon.css');
}
add_action('wp_enqueue_scripts', 'cupon_cards_styles');
