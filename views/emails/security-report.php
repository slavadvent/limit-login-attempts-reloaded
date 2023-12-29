<?php
use LLAR\Core\Helpers;

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}
$domain = parse_url( home_url( '/' ) );
$link = $domain['scheme'] . '://' . $domain['host'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family:arial, 'helvetica neue', helvetica, sans-serif">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <style type="text/css">
        @font-face {
            font-family: 'CoFo Sans';
            src: url(<?php echo $link . '/wp-content/themes/llar/assets/fonts/CoFoSans-Regular.eot' ?>) format('embedded-opentype');
            src: url(<?php echo $link . '/wp-content/themes/llar/assets/fonts/CoFoSans-Regular.woff' ?>) format('woff');
            src: url(<?php echo $link . '/wp-content/themes/llar/assets/fonts/CoFoSans-Regular.woff2' ?>) format('woff2');
            src: url(<?php echo $link . '/wp-content/themes/llar/assets/fonts/CoFoSans-Regular.ttf' ?>) format('truetype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'CoFo Sans';
            src: url(<?php echo $link . '/wp-content/themes/llar/assets/fonts/CoFoSans-Medium.eot' ?>) format('embedded-opentype');
            src: url(<?php echo $link . '/wp-content/themes/llar/assets/fonts/CoFoSans-Medium.woff' ?>) format('woff');
            src: url(<?php echo $link . '/wp-content/themes/llar/assets/fonts/CoFoSans-Medium.woff2' ?>) format('woff2');
            src: url(<?php echo $link . '/wp-content/themes/llar/assets/fonts/CoFoSans-Medium.ttf' ?>) format('truetype');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        section.llar_weekly_digest {
            width: 100%;
            background: #E2F1F7;
        }

        div.llar_weekly_digest {
            width: 600px;
            font-family: CoFo Sans, arial;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            color: #2A2F40;
            padding-top: 140px;
            margin: 0 auto;
        }

        table.llar_weekly_digest_table {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 0 30px 30px;
        }

        .llar_weekly_digest_header td {
            margin-left: 30px;
            margin-right: 30px;
        }

        .llar_weekly_digest_logo {
            margin: 30px auto;
        }

        .llar_weekly_digest_logo img {
            width: 158px;
        }

        tbody.llar_weekly_digest_body {
            position: relative;
            background-image: url("<?php echo LLA_PLUGIN_URL . 'assets/css/images/security-report-bg.jpg' ?>");
            background-size: 100% 100%;
            border-radius: 20px;
        }

        .llar_weekly_digest_body__title, .llar_weekly_digest__title {
            font-size: 24px;
            font-weight: 500;
            color: #2A2F40;
        }

        .llar_weekly_digest_body__title td {
            padding-top: 40px;
            padding-bottom: 15px;
        }

        .llar_weekly_digest_body__desc {
            position: relative;
            margin-bottom: 20px;
        }

        .llar_weekly_digest_body__desc .description {
            position: relative;
            font-size: 14px;
            color: #666D84;
            background-color: #FFFFFF;
            border-radius: 50px;
            width: 290px;
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .llar_weekly_digest_body__desc .llar_icon_calendar {
            width: 15px;
            vertical-align: middle;
        }

        .llar_weekly_digest_body__desc .site-name {
            position: relative;
            width: fit-content;
            font-size: 14px;
            color: #FF7C06;
            border-radius: 30px;
            border: 0.6px solid #FF7C06;
            background: rgb(255, 241, 234);
            margin-bottom: -10px;
            padding: 2px 21px;
            z-index: 1;
        }

        .llar_weekly_digest_body__columns td {
            padding-top: 20px;
        }

        .llar_weekly_digest_body__columns .column_first,
        .llar_weekly_digest_body__columns .column_second {
            width: 185px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px 20px;
        }

        .llar_weekly_digest_body__columns .column_first {
            margin-left: 35px;
        }

        .llar_weekly_digest_body__columns .column_second {
            margin-right: 35px;
        }

        .llar_weekly_digest_body__columns .llar_icon_column {
            width: 46px;
        }

        .llar_weekly_digest_body__inner_column td {
            padding-top: 0;
        }

        .llar_weekly_digest_body__inner_column .llar_digit {
            font-size: 16px;
            font-weight: 500;
            color: #2A2F40;
            width: 30px;
        }

        .llar_weekly_digest_body__inner_column .llar_arrow {
            font-size: 12px;
            line-height: 1.5;
        }

        .llar_weekly_digest_body__inner_column .llar_arrow .llar_arrow_left {
            width: 50px;
            padding: 0 10px;
            background-color: rgba(236, 70, 82, 0.06);
            border-radius: 20px;
        }

        .llar_weekly_digest_body__inner_column .llar_arrow img {
            width: 15px;
        }

        .llar_weekly_digest_body__inner_column .llar_desc {
            color: #666D84;
            width: 100%;
        }

        .llar_weekly_digest_body__inner_column .llar_link {
            padding-top: 5px;
            color: #4ACAD8;
        }

        .llar_weekly_digest_body__inner_column .llar_link img {
            width: 15px;
            vertical-align: middle;
        }

        .llar_weekly_digest_body__inner_column .desc {
            width: 80%;
        }

        .llar_weekly_digest_body__content {
            color: #666D84;
            font-size: 14px;
            font-weight: 400;
        }

        .llar_weekly_digest_body__content td {
            padding: 15px 60px;
        }

        .llar_weekly_digest_body__content td div {
            padding-top: 5px;
        }

        .llar_weekly_digest_body__button .llar_button {
            width: 220px;
            background: #FF7C06;
            border-radius: 10px;
            box-shadow: 0 5px 10px 0 rgba(255, 124, 6, 0.50);
            margin: 18px auto 40px;
        }

        .llar_weekly_digest_body__button .llar_button_link {
            display: block;
            font-size: 16px;
            color: #ffffff;
            padding: 5px 35px;
            text-decoration: none;
        }

        tfoot .illustration {
            padding-top: 45px;
        }

        tfoot .illustration img {
            width: 242px;
        }

        .llar_weekly_digest__title td {
            padding-top: 20px;
        }

        .llar_weekly_digest__desc {
            font-size: 18px;
            color: #666D84;
        }

        .llar_weekly_digest__desc td {
            padding: 10px 65px;
        }

        tfoot .llar_weekly_digest_body__content {
            width: 100%;
            font-size: 12px;
            color: #666D84;
        }

        tfoot .llar_weekly_digest_body__content td {
            padding: 27px 0 0;
        }

        table.llar_additional {
            background-color: #F6FBFF;
            border-radius: 20px;
        }

        table.llar_additional td {
            width: 100%;
            padding: 27px 40px 0;
        }

        table.llar_additional  .llar__content_line td {
            padding: 10px 40px;
        }

        table.llar_additional  .llar__content_line hr {
            border-color: rgba(164, 168, 183, 0.3);
        }

        table.llar_additional .llar__content_copyright td {
            padding: 5px 40px;
        }

        table.llar_additional .llar__content_copyright .copyright {
            width: 230px;
            border: 1px solid #4ACAD8;
            border-radius: 20px;
            background-color: #ffffff;
            padding: 1px 20px 5px;
        }

        table.llar_additional .llar__content_address td {
            color: #A4A8B7;
            font-size: 12px;
            padding: 0 20px 25px;
        }

        strong {
            font-weight: 500;
        }
    </style>
</head>
<section class="llar_weekly_digest">
<div class="llar_weekly_digest">
    <table class="llar_weekly_digest_table" width="100%" cellspacing="0" cellpadding="0">
        <thead class="llar_weekly_digest_header">
            <tr>
                <td valign="top" colspan="4" align="center">
                    <div class="llar_weekly_digest_logo">
                        <img src="<?php echo LLA_PLUGIN_URL . 'assets/img/logo.png' ?>" alt="">
                    </div>
                </td>
            </tr>
        </thead>
        <tbody class="llar_weekly_digest_body">
            <tr class="llar_weekly_digest_body__title">
                <td valign="top" colspan="4" align="center">
	                <?php _e( 'Your Login Security Report', 'limit-login-attempts-reloaded' ); ?>
                </td>
            </tr>
            <tr class="llar_weekly_digest_body__desc">
                <td valign="top" colspan="4" align="center">
                    <div class="site-name">
	                    <?php _e( $domain['host'], 'limit-login-attempts-reloaded' ); ?>
                    </div>
                    <div class="description">
                        <div>
	                        <?php _e( 'Let’s see how you did last week', 'limit-login-attempts-reloaded' ); ?>
                        </div>
                        <div>
	                        <?php _e( 'from', 'limit-login-attempts-reloaded' ); ?>
                            <img class="llar_icon_calendar" src="<?php echo LLA_PLUGIN_URL . 'assets/css/images/calendar-min.png' ?>" alt="">
	                        <?php _e( 'Aug 20 - Aug 26', 'limit-login-attempts-reloaded' ); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="llar_weekly_digest_body__columns">
                <td colspan="2" align="center">
                    <div class="column_first">
                        <table class="llar_weekly_digest_body__inner_column">
                            <tbody>
                            <tr>
                                <td valign="top" rowspan="3">
                                    <img class="llar_icon_column" src="<?php echo LLA_PLUGIN_URL . 'assets/css/images/deny-list-min.png' ?>" alt="">
                                </td>
                                <td align="left" class="llar_digit">
                                    10.4K
                                </td>
                                <td align="left" class="llar_arrow">
                                    <div class="llar_arrow_left">
                                        <img src="<?php echo LLA_PLUGIN_URL . 'assets/css/images/red-arrow-min.png' ?>" alt="">
                                        5.1k
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="llar_desc">
                                    Failed login attempts
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="llar_link">
                                    View logs
                                    <img src="<?php echo LLA_PLUGIN_URL . 'assets/css/images/arrow-min.png' ?>" alt="">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
                <td colspan="2" align="center">
                    <div class="column_second">
                        <table class="llar_weekly_digest_body__inner_column">
                            <tbody>
                            <tr>
                                <td valign="top" rowspan="3" class="image">
                                    <img class="llar_icon_column" src="<?php echo LLA_PLUGIN_URL . 'assets/css/images/shield-min.png' ?>" alt="">
                                </td>
                                <td class="llar_digit">
                                    595
                                </td>
                                <td class="llar_arrow">
                                    <div class="llar_arrow_left">
                                        <img src="<?php echo LLA_PLUGIN_URL . 'assets/css/images/green-arrow-min.png' ?>" alt="">
                                        100
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="llar_desc">
                                    Lockouts
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="llar_link">
                                    Manage IPs
                                    <img src="<?php echo LLA_PLUGIN_URL . 'assets/css/images/arrow-min.png' ?>" alt="">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            <tr class="llar_weekly_digest_body__content">
                <td colspan="4" align="center">
                    <div>
	                    <?php echo sprintf(
		                    __( 'To view this data, you\'ll need to <a href="%s" target="_blank">upgrade to our premium app.</a>', 'limit-login-attempts-reloaded' ),
		                    'https://www.limitloginattempts.com/upgrade/' ); ?>
                    </div>
                    <div>
	                    <?php echo sprintf(
		                    __( 'Not ready for premium? Try our <a href="%s" target="_blank">Micro Cloud</a> service complete free for limited monthly access to our premium features and protection.', 'limit-login-attempts-reloaded' ),
		                    'https://www.limitloginattempts.com/upgrade/' ); ?>
                    </div>
                </td>
            </tr>
            <tr class="llar_weekly_digest_body__button">
                <td colspan="4" align="center">
                    <div class="llar_button">
                        <a href="{dashboard_url}" class="llar_button_link " target="_blank">
	                        <?php _e( 'Go To Dashboard', 'limit-login-attempts-reloaded' ); ?>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td class="illustration" colspan="4" align="center">
                    <img src="<?php echo LLA_PLUGIN_URL . 'assets/css/images/illustration-min.png' ?>" alt="">
                </td>
            </tr>
            <tr class="llar_weekly_digest__title">
                <td colspan="4" align="center">
	                <?php _e( 'Unlock our powerful Login Firewall and IP Intelligence when upgrading to premium!', 'limit-login-attempts-reloaded' ); ?>
                </td>
            </tr>
            <tr class="llar_weekly_digest__desc">
                <td colspan="4" align="center">
		            <?php _e( 'Subscribe today and take your login protection to the next level.', 'limit-login-attempts-reloaded' ); ?>
                </td>
            </tr>
            <tr class="llar_weekly_digest_body__button">
                <td colspan="4" align="center">
                    <div class="llar_button">
                        <a href="{dashboard_url}" class="llar_button_link " target="_blank">
	                        <?php _e( 'View Plans & Pricing', 'limit-login-attempts-reloaded' ); ?>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="llar_weekly_digest_body__content">
                <td colspan="4" align="center">
                    <table class="llar_additional">
                        <tbody>
                            <tr>
                                <td align="center">
	                                <?php echo sprintf(
		                                __( 'This message was sent to <strong>greg@tripshock.com, </strong>which is designed as the admin email for the Limit Login Attempts Reloaded Plugin on www.domain.com. If you no longer wish to receive these emails, please go to yours <a href="%s" target="_blank">settings whithin the plugin dashboard</a> to disabled these notifications.', 'limit-login-attempts-reloaded' ),
		                                'https://www.limitloginattempts.com/upgrade/' ); ?>
                                </td>
                            </tr>
                            <tr class="llar__content_line">
                                <td align="center">
                                    <hr>
                                </td>
                            </tr>
                            <tr class="llar__content_copyright">
                                <td align="center">
                                    <div class="copyright">
	                                    <?php _e( '© 2023 Limit Login Attempts Reloaded', 'limit-login-attempts-reloaded' ); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr class="llar__content_address">
                                <td align="center">
		                            <?php _e( '3999 Commons Dr. W Unit N Destin, Fl 32541, USA</br>www. limitloginattempts.com', 'limit-login-attempts-reloaded' ); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
<!--            <tr class="llar_weekly_digest_body__line">-->
<!--                <td colspan="4" align="center">-->
<!--		            --><?php //echo sprintf(
//			            __( 'This message was sent to <strong>greg@tripshock.com, </strong>which is designed as the admin email for the Limit Login Attempts Reloaded Plugin on www.domain.com. If you no longer wish to receive these emails, please go to yours <a href="%s" target="_blank">settings whithin the plugin dashboard</a> to disabled these notifications.', 'limit-login-attempts-reloaded' ),
//			            'https://www.limitloginattempts.com/upgrade/' ); ?>
<!--                </td>-->
<!--            </tr>-->
        </tfoot>
    </table>
</div>
</section>
</html>