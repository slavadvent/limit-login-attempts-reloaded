<?php

use LLAR\Core\Config;

if( !defined( 'ABSPATH' ) ) exit();

/**
 * @var $this LLAR\Core\LimitLoginAttempts
 */

$admin_email = ( !is_multisite() ) ? get_option( 'admin_email' ) : get_site_option( 'admin_email' );
$onboarding_popup_shown = Config::get( 'onboarding_popup_shown' );
$setup_code = Config::get( 'app_setup_code' );

$onboarding_popup_shown = 0;
$setup_code = '';

if( $onboarding_popup_shown || !empty( $setup_code ) ) return;

ob_start(); ?>
<div class="llar-onboarding-popup__content">
    <div class="logo">
        <img src="<?php echo LLA_PLUGIN_URL ?>/assets/img/icon-logo-menu.png">
    </div>
    <div class="llar-onboarding__line">
        <div class="point__block active" data-step="1">
            <div class="point"></div>
            <div class="description">
                <?php _e( 'Welcome', 'limit-login-attempts-reloaded' ); ?>
            </div>
        </div>
        <div class="point__block" data-step="2">
            <div class="point"></div>
            <div class="description">
                <?php _e( 'Notifications', 'limit-login-attempts-reloaded' ); ?>
            </div>
        </div>
        <div class="point__block" data-step="3">
            <div class="point"></div>
            <div class="description">
                <?php _e( 'Limited Upgrade', 'limit-login-attempts-reloaded' ); ?>
            </div>
        </div>
        <div class="point__block" data-step="4">
            <div class="point"></div>
            <div class="description">
                <?php _e( 'Completion', 'limit-login-attempts-reloaded' ); ?>
            </div>
        </div>
    </div>
    <div class="llar-onboarding__body">
        <div class="title">
            <img src="<?php echo LLA_PLUGIN_URL ?>/assets/css/images/welcome.png">
            <?php _e( 'Welcome', 'limit-login-attempts-reloaded' ); ?>
        </div>
        <div class="card mx-auto">
            <div class="field-wrap">
                <div class="field-title">
                    <?php _e( 'Add your license key', 'limit-login-attempts-reloaded' ); ?>
                </div>
                <div class="field-key">
                    <input type="text" class="input_border" id="llar-subscribe-key" placeholder="Your key" value="">
                    <button class="button menu__item button__orange">
                        <?php _e( 'Activate', 'limit-login-attempts-reloaded' ); ?>
                        <span class="dashicons dashicons-arrow-right-alt"></span>
                    </button>
                </div>
                <div class="field-desc">
                    <?php _e( 'The license key can be found in your email if you have subscribed to premium', 'limit-login-attempts-reloaded' ); ?>
                </div>
            </div>
        </div>
        <div class="card mx-auto">
            <div class="field-wrap">
                <div class="field-title">
                    <?php _e( 'Not A Premium User?', 'limit-login-attempts-reloaded' ); ?>
                </div>
                <div class="field-desc-add">
                    <?php _e( 'We <b>highly recommend</b> upgrading to premium for the best protection against brute force attacks and unauthorized logins', 'limit-login-attempts-reloaded' ); ?>
                </div>
                <ul class="field-list">
                    <li class="item">
                        <?php _e( 'Detect, counter, and deny unauthorized logins with IP Intelligence', 'limit-login-attempts-reloaded' ); ?>
                    </li>
                    <li class="item">
                        <?php _e( 'Absorb failed login activity to improve site performance', 'limit-login-attempts-reloaded' ); ?>
                    </li>
                    <li class="item">
                        <?php _e( 'Block IPs by country, premium support, and much more!', 'limit-login-attempts-reloaded' ); ?>
                    </li>
                </ul>
                <div class="field-video" id="video-play">
                    <img src="<?php echo LLA_PLUGIN_URL ?>/assets/css/images/video-bg.webp" id="video-poster">
                    <div class="video__iframe">
                        <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="IsotthPWCPA"></div>
                    </div>
                </div>
                <div class="button_block">
                    <a href="https://www.limitloginattempts.com/info.php?from=plugin-onboarding-plans" class="button menu__item button__orange" target="_blank">
                        <?php _e( 'Yes, show me plan options', 'limit-login-attempts-reloaded' ); ?>
                    </a>
                    <button class="button next_step menu__item button__transparent_orange">
                        <?php _e( 'No, I don’t want advanced protection', 'limit-login-attempts-reloaded' ); ?>
                    </button>
                </div>
            </div>
            <button class="button next_step menu__item button__transparent_grey">
                <?php _e( 'Skip', 'limit-login-attempts-reloaded' ); ?>
            </button>
        </div>
    </div>
</div>
<?php
$popup_complete_install_content = ob_get_clean();
?>

<?php
ob_start(); ?>
<div class="llar-onboarding-popup-content llar-app-setup-popup">
    <div class="title"><?php _e( 'Activate Premium', 'limit-login-attempts-reloaded' ); ?></div>
    <div class="desc"><?php _e( 'Enter your setup code to enable cloud protection. This will provide the highest level of security and performance during brute force attacks.', 'limit-login-attempts-reloaded' ); ?></div>
    <div class="field-wrap">
        <div class="field">
            <input type="text" id="llar-setup-code-field" placeholder="<?php esc_attr_e( 'Enter Setup Code', 'limit-login-attempts-reloaded' ); ?>">
            <span class="error"></span>
        </div>
        <div class="button-col">
            <button class="button button-primary" id="llar-app-install-btn">
                <?php _e( 'Install', 'limit-login-attempts-reloaded' ); ?>
                <span class="preloader-wrapper"><span class="spinner llar-app-ajax-spinner"></span></span>
            </button>
        </div>
    </div>
    <div class="divider-line"><span><?php _e( 'Or', 'limit-login-attempts-reloaded' ); ?></span></div>
    <div class="bottom-buttons">
        <div class="text"><?php _e( 'If you don\'t have one, you can purchase one now.', 'limit-login-attempts-reloaded' ); ?></div>
        <div class="buttons">
            <a href="https://checkout.limitloginattempts.com/plan?from=plugin-welcome" target="_blank"
               class="button button-primary size-medium"><?php _e( 'Upgrade To Premium', 'limit-login-attempts-reloaded' ); ?></a>
            <a href="https://www.limitloginattempts.com/features/?from=plugin-welcome" target="_blank"
               class="button button-secondary"><?php _e( 'Learn More', 'limit-login-attempts-reloaded' ); ?></a>
            <button class="button-link" id="llar-popup-no-thanks-btn"><?php _e( 'No thanks', 'limit-login-attempts-reloaded' ); ?></button>
        </div>
    </div>
</div>
<?php
$popup_app_setup_content = ob_get_clean();
?>


<?php
ob_start(); ?>
<div class="llar-onboarding__body">
    <div class="title">
        <img src="<?php echo LLA_PLUGIN_URL ?>/assets/css/images/email.png">
        <?php _e( 'Notification Settings', 'limit-login-attempts-reloaded' ); ?>
    </div>
    <div class="card mx-auto">
        <div class="field-wrap">
            <div class="field-title-add">
                <?php _e( 'Site URL: https://tripshock.com', 'limit-login-attempts-reloaded' ); ?>
            </div>
            <div class="field-email">
                <input type="text" class="input_border" id="llar-subscribe-email" placeholder="Your email" value="<?php esc_attr_e( $admin_email ); ?>">
            </div>
            <div class="field-desc-additional">
                <?php _e( 'This email will receive notifications of unauthorized access to your website. You may turn this off in your settings.', 'limit-login-attempts-reloaded' ); ?>
            </div>
            <div class="field-checkbox">
                <input type="checkbox" name="lockout_notify_email" checked value="email"/>
                <?php _e( 'Sign me up for the LLAR newsletter to receive important security alerts, plugin updates, and helpful guides.', 'limit-login-attempts-reloaded' ); ?>
            </div>
        </div>
    </div>
    <div class="button_block-horizon">
        <button class="button menu__item button__orange">
            <?php _e( 'Continue', 'limit-login-attempts-reloaded' ); ?>
        </button>
        <button class="button next_step menu__item button__transparent_orange">
            <?php _e( 'Skip', 'limit-login-attempts-reloaded' ); ?>
        </button>
    </div>
</div>

<?php
$content_step_2 = ob_get_clean();
?>

<?php
ob_start(); ?>
<div class="llar-onboarding__body">
    <div class="title">
        <img src="<?php echo LLA_PLUGIN_URL ?>/assets/css/images/rocket-min.png">
        <?php _e( 'Limited Upgrade (Free)', 'limit-login-attempts-reloaded' ); ?>
    </div>
    <div class="card mx-auto">
        <div class="field-wrap">
            <div class="field-desc-add">
                <?php _e( 'Help us secure our network and we’ll provide you with limited access to our premium features including our login firewall, IP intelligence, and performance optimizer (up to 1,000 requests monthly)', 'limit-login-attempts-reloaded' ); ?>
            </div>
            <div class="field-desc-add">
                <?php _e( '<b>Would you like to opt-in?</b>', 'limit-login-attempts-reloaded' ); ?>
            </div>
        </div>
        <div class="button_block-horizon">
            <button class="button menu__item button__transparent_orange orange-back">
                <?php _e( 'Yes', 'limit-login-attempts-reloaded' ); ?>
            </button>
            <button class="button next_step menu__item button__transparent_grey gray-back">
                <?php _e( 'No', 'limit-login-attempts-reloaded' ); ?>
            </button>
        </div>
        <div class="explanations">
            <?php echo sprintf(
                __( 'We\'ll send you instructions via email to complete setup. You may opt-out of this program at any time. You accept our <a class="link__style_color_inherit llar_turquoise" href="%s" target="_blank">terms of service</a> by participating in this program.', 'limit-login-attempts-reloaded' ),
                'https://www.limitloginattempts.com/troubleshooting-guide-fixing-issues-with-non-functioning-emails-from-your-wordpress-site/'
            ); ?>
        </div>
        <div class="button_block-single">
            <button class="button next_step menu__item button__transparent_grey">
                <?php _e( 'Skip', 'limit-login-attempts-reloaded' ); ?>
            </button>
        </div>
    </div>
</div>

<?php
$content_step_3 = ob_get_clean();
?>

<script>
    ;(function($){

        $(document).ready(function(){
            const app_setup_popup = $.confirm({
                title: '<?php _e( 'Please Complete Limit Login Attempts Reloaded Installation', 'limit-login-attempts-reloaded' ) ?>',
                content: `<?php echo trim( $popup_app_setup_content ); ?>`,
                type: 'default',
                typeAnimated: true,
                draggable: false,
                boxWidth: '40%',
                bgOpacity: 0.9,
                useBootstrap: false,
                lazyOpen: true,
                buttons: false,
                closeIcon: true
            });

            // $.confirm({
            $.dialog({
                //title: '<?php //_e( 'Complete Limit Login Attempts Reloaded Installation', 'limit-login-attempts-reloaded' ) ?>//',
                title: false,
                content: `<?php echo trim( $popup_complete_install_content ); ?>`,
                type: 'default',
                typeAnimated: true,
                draggable: false,
                animation: 'top',
                animationBounce: 1,
                offsetTop: 0,
                offsetBottom: 0,
                boxWidth: '100%',
                containerFluid: true,
                onContentReady: function () {
                    video_player_load();
                },
                bgOpacity: 0.9,
                useBootstrap: false,
                closeIcon: true,
                onClose: function() {
                    $.post(ajaxurl, {
                        action: 'dismiss_onboarding_popup',
                        sec: '<?php echo esc_js( wp_create_nonce( "llar-action" ) ); ?>'
                    }, function(){});
                },
                buttons: {},
                onOpenBefore: function () {

                    let button_next = $('button.button.next_step');

                    // button_next.on('click', function() {
                    $(document).on('click', button_next, function() {

                        console.log('!!!!');

                        let next_step = next_step_line();
                        let html_body = $('.llar-onboarding__body');


                        if (next_step === 2) {
                            html_body.replaceWith(<?php echo json_encode(trim($content_step_2), JSON_HEX_QUOT | JSON_HEX_TAG); ?>);
                        }
                        else if (next_step === 3) {
                            html_body.replaceWith(<?php echo json_encode(trim($content_step_3), JSON_HEX_QUOT | JSON_HEX_TAG); ?>);
                        }
                        else if (next_step === 4) {
                            //html_body.replaceWith(<?php //echo json_encode(trim($content_step_4), JSON_HEX_QUOT | JSON_HEX_TAG); ?>//);
                        }
                    })

                }
				//buttons: {
                //    continue: {
                //        text: '<?php //_e( 'Continue', 'limit-login-attempts-reloaded' ) ?>//',
                //        btnClass: 'btn-blue',
                //        keys: ['enter'],
                //        action: function(){
                //
                //            app_setup_popup.open();
                //
                //            $.post(ajaxurl, {
                //                action: 'subscribe_email',
                //                email: $('body').find('#llar-subscribe-email').val(),
                //                is_subscribe_yes: !!$('body').find('.security-alerts-options .buttons span[data-val="yes"].llar-act').length,
                //                sec: '<?php //echo esc_js( wp_create_nonce( "llar-action" ) ); ?>//'
                //            }, function(){});
                //        }
                //    }
				//}
            });


            $('body').on('click', '.security-alerts-options .buttons span', function() {
                const $this = $(this);
                $this.parent().find('span').removeClass('llar-act');
                $this.addClass('llar-act');
            });

            $('body').on('click', '#llar-app-install-btn', function(e) {
                e.preventDefault();

                const $this = $(this);
                const $error = $this.closest('.field-wrap').find('.error');

                if($this.hasClass('button-disabled')) {
                    return;
                }

                const setup_code = $this.closest('.field-wrap').find('input').val();

                $error.text('').hide();
                $this.addClass('button-disabled');

                $.post(ajaxurl, {
                    action: 'app_setup',
                    code: setup_code,
                    sec: '<?php echo esc_js( wp_create_nonce( "llar-action" ) ); ?>'
                }, function(response){

                    if(response.success) {
                        setTimeout(function(){

                            window.location = window.location + '&llar-cloud-activated';

                        }, 500);
                    }

                    if(!response.success && response.data.msg) {

                        $error.text(response.data.msg).show();
                    }

                    $this.removeClass('button-disabled');

                });

            });

            $('body').on('click', '#llar-popup-no-thanks-btn', function(e) {
                e.preventDefault();

                app_setup_popup.close();
            });
        })


        function next_step_line() {
            let step_line = $('.llar-onboarding__line .point__block');
            let active_step = step_line.filter('.active').data('step');

            if (active_step < 4) {
                step_line.filter('[data-step="' + active_step + '"]').removeClass('active');
                active_step++;
                step_line.filter('[data-step="' + active_step + '"]').addClass('active');
                return active_step;
            }
            else {
                return false;
            }
        }

        function video_player_load() {

            let isPlyrInitialized = false;
            let video_player = $('#video-play');
            let script_loaded = false;
            let style_loaded = false;
            let player;

            let script = document.createElement('script');
            let style = document.createElement('link');
            script.src = 'https://cdn.plyr.io/3.7.8/plyr.js';
            style.href = 'https://cdn.plyr.io/3.7.8/plyr.css';
            style.rel = 'stylesheet';

            document.body.appendChild(script);
            document.body.appendChild(style);

            video_player.on('click', 'img', function () {

                if (script_loaded) {

                    script.onload = function() {
                        script_loaded = true;

                        if (!isPlyrInitialized) {

                            player = new Plyr('#player');
                            isPlyrInitialized = true;
                        }
                    };
                }
                else {

                    if (!isPlyrInitialized) {
                        player = new Plyr('#player');
                        isPlyrInitialized = true;
                    }
                }

                $('#video-poster').hide();
                video_player.find('.video__iframe').addClass('play');

            });

        }

    })(jQuery)
</script>