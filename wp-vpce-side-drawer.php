<?php
/*
Plugin Name: WP VPCE Side Drawer
Description: Bande latérale WordPress universelle avec recherche, liens rapides, newsletter et comportement responsive.
Version: 1.0.0
Author: Sévérin OGAH
*/

if (!defined('ABSPATH')) {
    exit;
}

function vpce2_enqueue_assets() {
    wp_enqueue_style(
        'vpce2-side-drawer-style',
        plugin_dir_url(__FILE__) . 'assets/css/side-drawer.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'vpce2-side-drawer-script',
        plugin_dir_url(__FILE__) . 'assets/js/side-drawer.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'vpce2_enqueue_assets');

function vpce2_render_side_drawer() {
    ?>
    <div class="vpce2-root">
        <input type="checkbox" id="vpce2Toggle" aria-hidden="true">

        <aside class="vpce2-drawer" role="complementary" aria-label="Menu latéral VPCE">
            <div class="inner">

                <div class="group">
                    <h3 class="title">Recherche</h3>
                    <form class="vpce2-search">
                        <input type="search" placeholder="Rechercher…">
                        <button type="submit">OK</button>
                    </form>
                </div>

                <div class="group">
                    <h3 class="title">Services</h3>
                    <nav class="vpce2-links" aria-label="Services">
                        <a href="https://www.vpce-expert.com/?p=62">Dératisation</a>
                        <a href="https://www.vpce-expert.com/?p=59">Désinfection</a>
                        <a href="https://www.vpce-expert.com/?p=11&preview=true">Désinsectisation</a>
                        <a href="https://www.vpce-expert.com/?p=61">Démoustication</a>
                    </nav>
                </div>

                <div class="group">
                    <h3 class="title">Nuisibles</h3>
                    <nav class="vpce2-links" aria-label="Nuisibles">
                        <a href="https://www.vpce-expert.com/?p=21&preview=true">Rampants</a>
                        <a href="https://www.vpce-expert.com/?p=7&preview=true">Volants</a>
                        <a href="https://www.vpce-expert.com/?p=19&preview=true">Xylophages</a>
                        <a href="https://www.vpce-expert.com/?p=314&preview=true">Micro-pathogènes</a>
                    </nav>
                </div>

                <div class="group">
                    <h3 class="title">Institutionnel</h3>
                    <nav class="vpce2-links" aria-label="Institutionnel">
                        <a href="https://www.vpce-expert.com/?p=353&preview=true">Nos experts</a>
                        <a href="https://www.vpce-expert.com/?p=338&preview=true">Stratégie d’intervention</a>
                    </nav>
                </div>

                <div class="group">
                    <h3 class="title">Newsletter</h3>
                    <div class="vpce2-newsletter">
                        <div class="hint"></div>
                    </div>
                </div>

            </div>
        </aside>

        <label class="vpce2-tab" for="vpce2Toggle" title="Ouvrir/fermer le menu">
            <span class="icon">&rsaquo;</span>
        </label>

        <label class="vpce2-overlay" for="vpce2Toggle" aria-hidden="true"></label>
    </div>
    <?php
}
add_action('wp_footer', 'vpce2_render_side_drawer', 9999);