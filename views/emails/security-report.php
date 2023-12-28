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
            padding-left: 30px;
            padding-right: 30px;
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
            background-size: cover;
            border-radius: 20px;
        }

        .llar_weekly_digest_body__title {
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
            padding-top: 2px;
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

        tfoot .illustration {

        }

        tfoot .illustration img {
            width: 242px;
        }

        /*a {*/
        /*    text-decoration: none;*/
        /*}*/
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
                                <td>
                                    10.4K
                                </td>
                                <td>
                                    image
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="desc">
                                    Failed login attempts
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    View logs
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
                                <td>
                                    595
                                </td>
                                <td>
                                    image
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="desc">
                                    Lockouts
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    Manage IPs
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
                    <div>
                        button
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
        </tfoot>
    </table>
</div>
</section>
</html>