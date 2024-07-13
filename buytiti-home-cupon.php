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

function buytiti_cards_shortcode($atts) {
    $atts = shortcode_atts(array(
        'type' => 'cupons' // valor predeterminado
    ), $atts, 'buytiti_cards');

    if ($atts['type'] == 'products') {
        return buytiti_product_cards();
    } else {
        return buytiti_cupon_cards();
    }
}

function buytiti_cupon_cards() {
    $html = '
<div class="product-list" role="list">

    <div class="product-item-cupon-buytiti" role="listitem">
        <article class="product-card-cupon-buytiti">
            <a class="product-link-cupon-buytiti" href="https://buytiti.com/papeleria/">
                <img loading="lazy" srcset=" https://buytiti.com/wp-content/uploads/2024/06/salud-y-belleza.jpg 1x,
                 https://buytiti.com/wp-content/uploads/2024/06/salud-y-belleza.jpg 2x" src=" https://buytiti.com/wp-content/uploads/2024/06/salud-y-belleza.jpg" alt="" class="product-image-cupon-buytiti" width="395" height="222" />
                <div class="product-info-cupon-buytiti">
                    <h3 class="product-code-cupon-buytiti">
                        Código: SALUDYBELLEZA200BUY
                    </h3>
                    <p class="product-validity-cupon-buytiti" title="Vigencia: 28 de junio al 31 de julio 2024" style="height: 3.3rem; overflow: hidden; text-overflow: ellipsis;">
                        Vigencia: 28 de junio al 31 de julio 2024
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
            <a class="product-link-cupon-buytiti" href="https://buytiti.com/papeleria/">
                <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/06/papeleria.jpg 1x,
                https://buytiti.com/wp-content/uploads/2024/06/papeleria.jpg 2x" src="https://buytiti.com/wp-content/uploads/2024/06/papeleria.jpg" alt="" class="product-image-cupon-buytiti" width="395" height="222" />
                <div class="product-info-cupon-buytiti">
                    <h3 class="product-code-cupon-buytiti">
                        Código: PAPELERIA150BUY
                    </h3>
                    <p class="product-validity-cupon-buytiti" title="Vigencia: 28 de junio al 31 de julio 2024" style="height: 3.3rem; overflow: hidden; text-overflow: ellipsis;">
                        Vigencia: 28 de junio al 31 de julio 2024
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
            <a class="product-link-cupon-buytiti" href="">
                <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/06/hogar.jpg 1x,
                https://buytiti.com/wp-content/uploads/2024/06/hogar.jpg 2x" src="https://buytiti.com/wp-content/uploads/2024/06/hogar.jpg" alt="" class="product-image-cupon-buytiti" width="395" height="222" />
                <div class="product-info-cupon-buytiti">
                    <h3 class="product-code-cupon-buytiti">
                        Código: HOGAR150BUY
                    </h3>
                    <p class="product-validity-cupon-buytiti" title="Vigencia: 28 de junio al 31 de julio 2024" style="height: 3.3rem; overflow: hidden; text-overflow: ellipsis;">
                        Vigencia: 28 de junio al 31 de julio 2024
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
            <a class="product-link-cupon-buytiti" href="https://buytiti.com/electronica/">
                <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/06/electronica.jpg 1x,
                https://buytiti.com/wp-content/uploads/2024/06/electronica.jpg 2x" src="https://buytiti.com/wp-content/uploads/2024/06/electronica.jpg" alt="" class="product-image-cupon-buytiti" width="395" height="222" />
                <div class="product-info-cupon-buytiti">
                    <h3 class="product-code-cupon-buytiti">
                        Código: ELECTRONICA100BUY
                    </h3>
                    <p class="product-validity-cupon-buytiti" title="Vigencia: 28 de junio al 31 de julio 2024" style="height: 3.3rem; overflow: hidden; text-overflow: ellipsis;">
                        Vigencia: 28 de junio al 31 de julio 2024
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
// Función para mostrar tarjetas de productos
function buytiti_product_cards() {
    $html = '
    <div class="product-list-cards" role="list">
        <div class="products-item-cards-buytiti" role="listitem">
            <article class="products-cards-buytiti-promos">
                <a class="products-links-cards-buytiti" href="">
                    <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/07/Productos-de-�60-a-�120-pesos.jpg 1x, https://buytiti.com/wp-content/uploads/2024/07/Productos-de-�60-a-�120-pesos.jpg 2x" src="https://buytiti.com/wp-content/uploads/2024/07/Productos-de-�60-a-�120-pesos.jpg" alt="" class="product-image-cards-buytiti" width="288" height="512">
                    <div class="products-info-cards-buytiti">
                        <h3 class="products-h3-cards-buytiti">Organización y Hogar</h3>
                        <p class="product-info-cards-buytiti" style="height: 2.5rem; overflow: hidden; text-overflow: ellipsis;" title="De 60 a 120">Productos de $60 a $120</p>
                    </div>
                    <div class="product-actions-cards-buytiti">
                        <span class="view-products-button-cards-buytiti">
                            Compra ahora
                        </span>
                    </div>
                </a>
            </article>
        </div>
        <div class="products-item-cards-buytiti" role="listitem">
            <article class="products-cards-buytiti-promos">
                <a class="products-links-cards-buytiti" href="">
                    <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/07/Productos-de-�130-a-�200-pesos.jpg 1x, https://buytiti.com/wp-content/uploads/2024/07/Productos-de-�130-a-�200-pesos.jpg 2x" src="https://buytiti.com/wp-content/uploads/2024/07/Productos-de-�130-a-�200-pesos.jpg" alt="" class="product-image-cards-buytiti" width="288" height="512">
                    <div class="products-info-cards-buytiti">
                        <h3 class="products-h3-cards-buytiti">Organización y Hogar</h3>
                        <p class="product-info-cards-buytiti" style="height: 2.5rem; overflow: hidden; text-overflow: ellipsis;" title="Zapatero Organizador Para 18 Pares">Zapatero Organizador Para 18 Pares</p>
                    </div>
                    <div class="product-actions-cards-buytiti">
                        <span class="view-products-button-cards-buytiti">
                            Compra ahora
                        </span>
                    </div>
                </a>
            </article>
        </div>
                <div class="products-item-cards-buytiti" role="listitem">
            <article class="products-cards-buytiti-promos">
                <a class="products-links-cards-buytiti" href="">
                    <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/07/productos-de-�250-a-mas.jpg 1x, https://buytiti.com/wp-content/uploads/2024/07/productos-de-�250-a-mas.jpg 2x" src="https://buytiti.com/wp-content/uploads/2024/07/productos-de-�250-a-mas.jpg" alt="" class="product-image-cards-buytiti" width="288" height="512">
                    <div class="products-info-cards-buytiti">
                        <h3 class="products-h3-cards-buytiti">Organización y Hogar</h3>
                        <p class="product-info-cards-buytiti" style="height: 2.5rem; overflow: hidden; text-overflow: ellipsis;" title="Zapatero Organizador Para 18 Pares">Zapatero Organizador Para 18 Pares</p>
                    </div>
                    <div class="product-actions-cards-buytiti">
                        <span class="view-products-button-cards-buytiti">
                            Compra ahora
                        </span>
                    </div>
                </a>
            </article>
        </div>
                <div class="products-item-cards-buytiti" role="listitem">
            <article class="products-cards-buytiti-promos">
                <a class="products-links-cards-buytiti" href="">
                    <img loading="lazy" srcset="https://buytiti.com/wp-content/uploads/2024/07/productos-de-�250-a-mas.jpg 1x, https://buytiti.com/wp-content/uploads/2024/07/productos-de-�250-a-mas.jpg 2x" src="https://buytiti.com/wp-content/uploads/2024/07/productos-de-�250-a-mas.jpg" alt="" class="product-image-cards-buytiti" width="288" height="512">
                    <div class="products-info-cards-buytiti">
                        <h3 class="products-h3-cards-buytiti">Organización y Hogar</h3>
                        <p class="product-info-cards-buytiti" style="height: 2.5rem; overflow: hidden; text-overflow: ellipsis;" title="Zapatero Organizador Para 18 Pares">Zapatero Organizador Para 18 Pares</p>
                    </div>
                    <div class="product-actions-cards-buytiti">
                        <span class="view-products-button-cards-buytiti">
                            Compra ahora
                        </span>
                    </div>
                </a>
            </article>
        </div>
       
        
    </div>';
    return $html;
}

// Enqueue el CSS
function buytiti_cards_styles() {
    wp_enqueue_style('cupon-cards-styles', plugin_dir_url(__FILE__) . 'buytiti-home-cupon.css');
    wp_enqueue_script('cupon-slider', plugin_dir_url(__FILE__) . 'buytiti-home-cupon.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'buytiti_cards_styles');

add_shortcode('buytiti_cards', 'buytiti_cards_shortcode');
