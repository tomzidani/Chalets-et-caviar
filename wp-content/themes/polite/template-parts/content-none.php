<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Polite
 */
?>
<section class="no-results not-found">
    <div class="page-content">
        <h1 class="page-title"><?php esc_html_e('Aucun résultat', 'polite'); ?></h1>
        <?php
        if (is_home() && current_user_can('publish_posts')) :
            
            printf(
                '<p>' . wp_kses(
                /* translators: 1: link to WP admin new post page. */
                    __('Prêt à publier votre premier post? <a href="%1$s">Commencez ici</a>.', 'polite'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );
        
        elseif (is_search()) :
            ?>

            <p><?php esc_html_e('Désolé, mais nous n\'avons trouvé aucun résultat, vous pouvez essayer avec d\'autres termes.', 'polite'); ?></p>
            <?php
            get_search_form();
        
        else :
            ?>

            <p><?php esc_html_e('Il semble que nous ne pouvons pas trouver ce que vous cherchez, vous pouvez peut-être essayer grâce à une recherche.', 'polite'); ?></p>
            <?php
            get_search_form();
        
        endif;
        ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
