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
            src: url(<?php echo $link ?>'/wp-content/themes/llar/assets/fonts/CoFoSans-Regular.eot') format('embedded-opentype');
            src: url(<?php echo $link ?>'/wp-content/themes/llar/assets/fonts/CoFoSans-Regular.woff') format('woff');
            src: url(<?php echo $link ?>'/wp-content/themes/llar/assets/fonts/CoFoSans-Regular.woff2') format('woff2');
            src: url(<?php echo $link ?>'/wp-content/themes/llar/assets/fonts/CoFoSans-Regular.ttf') format('truetype');
            font-weight: 400;
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
            color: #2A2F40;
            padding-top: 140px;
            margin: 0 auto;
        }

        table.llar_weekly_digest_header {
            background-color: #ffffff;
            border-radius: 20px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<section class="llar_weekly_digest">
<div class="llar_weekly_digest">
    <table class="llar_weekly_digest_header" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="top">
                <img src="<?php echo LLA_PLUGIN_URL . 'assets/img/logo.png' ?>">
            </td>
        </tr>
        <tr>
            <td valign="top" style="padding:0; margin:0">
                <table class="es-content" cellspacing="0" cellpadding="0" align="center"
                       style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                    <tr>
                        <td align="center" style="padding:0;Margin:0">
                            <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff"
                                   align="center"
                                   style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
                                <tr>
                                    <td align="left"
                                        style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
                                        <table width="100%" cellspacing="0" cellpadding="0"
                                               style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                            <tr>
                                                <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                                                    <table width="100%" cellspacing="0" cellpadding="0"
                                                           role="presentation"
                                                           style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                        <tr>
                                                            <td style="padding:0;Margin:0">
                                                                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px"><?php ( !empty( $admin_name ) )
                                                                        ? _e( 'Hello {name},', 'limit-login-attempts-reloaded' )
                                                                        : _e( 'Hello,', 'limit-login-attempts-reloaded' ); ?></p><br>
                                                                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <?php _e( 'This notification was sent automatically via Limit Login Attempts Reloaded Plugin.', 'limit-login-attempts-reloaded' ); ?></p>
                                                                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <?php _e( 'This is installed on your <b>{domain}</b> WordPress site.', 'limit-login-attempts-reloaded' ); ?></p><br>
                                                                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <?php _e( 'The failed login details include:', 'limit-login-attempts-reloaded' ); ?></p>
                                                                <ul>
                                                                    <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:14px">
                                                                        <?php _e( '{attempts_count} failed login attempts ({lockouts_count} lockout(s)) from IP <b>{ip_address}</b>', 'limit-login-attempts-reloaded' ); ?>
                                                                    </li>
                                                                    <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:14px">
                                                                        <?php _e( 'Last user attempted: <b>{username}</b>', 'limit-login-attempts-reloaded' ); ?></li>
                                                                    <li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:14px">
                                                                        <?php _e( 'IP was blocked for {blocked_duration}', 'limit-login-attempts-reloaded' ); ?>
                                                                    </li>
                                                                </ul>
                                                                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <?php _e( 'Please visit your WordPress dashboard for additional details, investigation options, and help articles.', 'limit-login-attempts-reloaded' ); ?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:20px;Margin:0">
                                                                <!--[if mso]><a href="{dashboard_url}" target="_blank"
                                                                                hidden>
                                                                    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml"
                                                                                 xmlns:w="urn:schemas-microsoft-com:office:word"
                                                                                 esdevVmlButton href="{dashboard_url}"
                                                                                 style="height:40px; v-text-anchor:middle; width:180px"
                                                                                 arcsize="50%" strokecolor="#3da7b1"
                                                                                 strokeweight="1px" fillcolor="#50c1cd">
                                                                        <w:anchorlock></w:anchorlock>
                                                                        <center style='color:#ffffff; font-family:arial, "helvetica neue", helvetica, sans-serif; font-size:14px; font-weight:400; line-height:14px;  mso-text-raise:1px'>
                                                                            <?php _e( 'Go to Dashboard', 'limit-login-attempts-reloaded' ); ?>
                                                                        </center>
                                                                    </v:roundrect>
                                                                </a>
                                                                <![endif]-->
                                                                <!--[if !mso]><span
                                                                        class="msohide es-button-border-2 es-button-border"
                                                                        style="border-style:solid;border-color:#50c1cd #50c1cd #3da7b1;background:#50c1cd;border-width:0px 0px 2px 0px;display:inline-block;border-radius:30px;width:auto;mso-border-alt:10px;mso-hide:all"><a
                                                                            href="{dashboard_url}"
                                                                            class="es-button es-button-1"
                                                                            target="_blank"
                                                                            style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;display:inline-block;background:#50c1cd;border-radius:30px;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;padding:10px 20px 10px 20px;border-color:#50c1cd">Go to Dashboard</a></span>
                                                                <!--<![endif]--></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding:0;Margin:0"><p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <?php _e( 'Experiencing frequent attacks or degraded performance? Consider ', 'limit-login-attempts-reloaded' ); ?><a href="{premium_url}"
                                                                                             target="_blank"
                                                                                             style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FDA33B;font-size:14px"><?php
                                                                        _e( 'upgrading for advanced protection', 'limit-login-attempts-reloaded' ); ?></a>.</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="25" align="center"
                                                                style="padding:0;Margin:0"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding:0;Margin:0"><h3
                                                                        style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333">
                                                                    <?php _e( 'Frequently Asked Questions', 'limit-login-attempts-reloaded' ); ?></h3><br>
                                                                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <b><?php _e( 'What is a failed login attempt?', 'limit-login-attempts-reloaded' ); ?></b><br>
                                                                    <?php _e( 'A failed login attempt is when an IP address uses incorrect credentials to log into your website. The IP address could be a human operator, or a program designed to guess your password.', 'limit-login-attempts-reloaded' ); ?></p><br>
                                                                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <b><?php _e( 'Why am I getting these emails?', 'limit-login-attempts-reloaded' ); ?></b><br>
                                                                    <?php _e( 'You are receiving this email because there was a failed login attempt on your website {domain}. If you\'d like to opt out of these notifications, please click the “Unsubscribe” link below.', 'limit-login-attempts-reloaded' ); ?></p><br>
                                                                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <b><?php _e( 'How dangerous is this failed login attempt?', 'limit-login-attempts-reloaded' ); ?></b><br>
                                                                    <?php _e( 'Unfortunately, we cannot determine the severity of the IP address with the free version of the plugin. If the IP continues to make attempts and is not recognized by your organization, then it\'s likely to have malicious intent. Depending on how frequent the attacks are, you may experience performance issues. In the plugin dashboard, you can investigate the frequency of the failed login attempts in the logs and take additional steps to protect your website (i.e. adding them to the block list). You can visit the ', 'limit-login-attempts-reloaded' ); ?><a
                                                                            href="{llar_url}" target="_blank"
                                                                            style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FDA33B;font-size:14px">
                                                                        <?php _e( 'Limit Login Attempts Reloaded website', 'limit-login-attempts-reloaded' ); ?></a><?php _e( ' for more information on our premium services, which can automatically block and detect malicious IP addresses.', 'limit-login-attempts-reloaded' ); ?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="25" align="center"
                                                                style="padding:0;Margin:0"></td>
                                                        </tr>
<!--                                                        --><?php //if( Helpers::is_mu() ) : ?>
	                                                    <?php if( true ) : ?>
                                                        <tr>
                                                            <td style="padding:0;Margin:0"><p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <i><?php _e( 'This alert was sent by your website where Limit Login Attempts Reloaded free version is installed and you are listed as the admin. If you are a GoDaddy customer, the plugin is installed into a must-use (MU) folder.', 'limit-login-attempts-reloaded' ); ?></i></p>
                                                            </td>
                                                        </tr>
                                                        <?php endif; ?>
                                                        <tr>
                                                            <td style="padding:0;Margin:0;padding-top:20px;padding-bottom:20px;font-size:0"
                                                                align="center">
                                                                <table width="100%" height="100%" cellspacing="0"
                                                                       cellpadding="0" border="0" role="presentation"
                                                                       style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                    <tr>
                                                                        <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:unset;height:1px;width:100%;margin:0px"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding:0;Margin:0"><p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                                                    <a href="{unsubscribe_url}" target="_blank"
                                                                       style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FDA33B;font-size:14px"><?php _e( 'Unsubscribe', 'limit-login-attempts-reloaded' ); ?></a>
                                                                    <?php _e( 'from these notifications.', 'limit-login-attempts-reloaded' ); ?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="15" align="center"
                                                                style="padding:0;Margin:0"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="25" align="center"
                            style="padding:0;Margin:0"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</section>
</html>