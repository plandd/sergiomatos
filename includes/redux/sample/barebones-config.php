<?php
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";
    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */
    $theme = wp_get_theme(); // For use with some settings. Not necessary.
    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => THEME_VERSION,
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Opções', 'redux-framework-demo' ),
        'page_title'           => __( 'Opções', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => get_stylesheet_directory_uri() . '/images/icon.png',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.
        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
        //'compiler'             => true,
        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/planndd?fref=ts',
        'title' => 'PlanDD no Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://twitter.com/plan_dd',
        'title' => 'Seguir PlanDD no Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.linkedin.com/company/plandd.cc?trk=top_nav_home',
        'title' => 'Encontre-nos no Linkedin',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );
    /*
     * ---> END ARGUMENTS
     */
    /*
     * ---> START HELP TABS
     */
    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );
    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );
    /*
     * <--- END HELP TABS
     */
    /*
     *
     * ---> START SECTIONS
     *
     */
    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */
    // -> Opções gerais
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Opções gerais', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( '', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'fanpage-url',
                'type'     => 'text',
                'title'    => __( 'Endereço da Fanpage', 'redux-framework-demo' ),
                'validate' => 'url',
                'default'  => 'http://facebook.com',
            ),
            array(
                'id'       => 'sergio-email',
                'type'     => 'text',
                'title'    => __( 'Endereço da Fanpage', 'redux-framework-demo' ),
                'validate' => 'email',
                'default'  => 'sergio.dostum@hotmail.com',
            ),
            array(
                'id'       => 'sergio-tels',
                'type'     => 'multi_text',
                'title'    => __( 'Adicione os números telefônicos', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( 'Ex.: TIM +55 9342 9238', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'sergio-local',
                'type'     => 'text',
                'title'    => __( 'Dados de localização', 'redux-framework-demo' ),
                'default'  => 'R. Dom Pedro II, 941 - Prata, Campina Grande - PB, 58400-062',
            ),
        )
    ) );

    // -> Painel
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Painel', 'redux-framework-demo' ),
        'id'     => 'panel',
        'desc'   => __( '', 'redux-framework-demo' ),
        'icon'   => 'el el-photo',
        'fields' => array(
          array(
              'id'          => 'slides-panel',
              'type'        => 'slides',
              'title'       => __( 'Adicionar sliders', 'redux-framework-demo' ),
              'subtitle'    => __( 'Todas as imagens serão usadas no slider', 'redux-framework-demo' ),
              'desc'        => __( '', 'redux-framework-demo' ),
              'placeholder' => array(
                  'title'       => __( 'Título', 'redux-framework-demo' ),
                  'description' => __( 'Descrição', 'redux-framework-demo' ),
                  'url'         => __( 'Link', 'redux-framework-demo' ),
              ),
          ),
        )
    ) );

    // -> Prêmios recebidos
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Prêmios recebidos', 'redux-framework-demo' ),
        'id'     => 'winners',
        'desc'   => __( '', 'redux-framework-demo' ),
        'icon'   => 'el el-star-empty',
        'fields' => array(
          array(
              'id'          => 'slides-winners',
              'type'        => 'slides',
              'title'       => __( 'Adicionar prêmios', 'redux-framework-demo' ),
              'subtitle'    => __( '', 'redux-framework-demo' ),
              'desc'        => __( '', 'redux-framework-demo' ),
              'placeholder' => array(
                  'title'       => __( 'Título', 'redux-framework-demo' ),
                  'description' => __( 'Descrição', 'redux-framework-demo' ),
                  'url'         => __( 'Link', 'redux-framework-demo' ),
              ),
          ),
        )
    ) );

    // -> Painel
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Newsletter', 'redux-framework-demo' ),
        'id'     => 'newsletter',
        'desc'   => __( '', 'redux-framework-demo' ),
        'icon'   => 'el el-envelope', 
        'fields' => array(
          array(
                'id'       => 'newsletter-header',
                'type'     => 'text',
                'title'    => __( 'Cabeçalho', 'redux-framework-demo' ),
                'default'  => 'INSCREVA-SE EM NOSSA LISTA DE CARTINHAS',
            ),
          array(
                'id'       => 'newsletter-desc',
                'type'     => 'textarea',
                'title'    => __( 'Descrição', 'redux-framework-demo' ),
                'default'  => 'Estamos sempre produzindo textos reflexivos e compartilhando nossas ideias sobre como o design pode mudar o mundo. Enviamos a cada duas semanas uma cartinha para os nossos seguidores, cheia de referências e conteúdos interessantes, além de ofertas exclusivas para os nossos produtos.',
            ),
          array(
                'id'       => 'newsletter-btn',
                'type'     => 'text',
                'title'    => __( 'Texto do botão', 'redux-framework-demo' ),
                'default'  => 'Quero receber',
            ),
        )
    ) );

    /**Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );*/
    
    /*
     * <--- END SECTIONS
     */