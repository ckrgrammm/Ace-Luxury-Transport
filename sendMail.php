<?php 
    require 'assets/PHPMailer-5.2.28/PHPMailerAutoload.php';
    require 'assets/PHPMailer-5.2.28/class.phpmailer.php';
    require 'assets/PHPMailer-5.2.28/class.smtp.php';

    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $contact_number = $_POST['cn'];
    $pickupdate = $_POST['pickupdate'];
    $dropoffdate = $_POST['dropoffdate'];
    $pickuplocation = $_POST['pickuplocation'];
    $dropofflocation = $_POST['dropofflocation'];
    $contact_number_no_dash = str_replace("-","",$contact_number);

    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:arial, \'helvetica neue\', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title>New message</title><!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
    <xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml>
    <![endif]--><!--[if !mso]><!-- -->
    <link href="https://stripo.email/" rel="stylesheet"><!--<![endif]-->
    <style type="text/css">
    .rollover div {
    font-size:0;
    }
    .section-title {
    padding:10px 15px;
    background-color:#f6f6f6;
    border:1px solid #dfdfdf;
    outline:0;
    border-radius:8px;
    margin-bottom:15px;
    }
    #outlook a {
    padding:0;
    }
    .ExternalClass {
    width:100%;
    }
    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
    line-height:100%;
    }
    .es-button {
    mso-style-priority:100!important;
    text-decoration:none!important;
    }
    a[x-apple-data-detectors] {
    color:inherit!important;
    text-decoration:none!important;
    font-size:inherit!important;
    font-family:inherit!important;
    font-weight:inherit!important;
    line-height:inherit!important;
    }
    .es-desk-hidden {
    display:none;
    float:left;
    overflow:hidden;
    width:0;
    max-height:0;
    line-height:0;
    mso-hide:all;
    }
    [data-ogsb] .es-button {
    border-width:0!important;
    padding:15px 30px 15px 30px!important;
    }
    @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120% } h1 { font-size:26px!important; text-align:left } h2 { font-size:22px!important; text-align:left } h3 { font-size:18px!important; text-align:left } h1 a { text-align:left } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:26px!important } h2 a { text-align:left } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:22px!important } h3 a { text-align:left } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:18px!important } .es-menu td a { font-size:12px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:12px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:14px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:12px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:12px!important; display:inline-block!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; max-height:inherit!important } }
    </style>
    </head>
    <body style="width:100%;font-family:arial, \'helvetica neue\', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
    <div class="es-wrapper-color" style="background-color:#F0F0F0"><!--[if gte mso 9]>
    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
    <v:fill type="tile" color="#f0f0f0"></v:fill>
    </v:background>
    <![endif]-->
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top">
    <tr style="border-collapse:collapse">
    <td valign="top" style="padding:0;Margin:0">
    <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
    <tr style="border-collapse:collapse">
    <td align="center" style="padding:0;Margin:0">
    <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
    <tr style="border-collapse:collapse">
    <td align="left" style="padding:0;Margin:0;padding-left:15px;padding-right:15px;padding-top:30px">
    <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
    <tr style="border-collapse:collapse">
    <td align="center" valign="top" style="padding:0;Margin:0;width:570px">
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
    <tr style="border-collapse:collapse">
    <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="https://ucqoaf.stripocdn.email/content/guids/CABINET_4d9b64439c8479b9c25c557d7f44ab48/images/bookingiconvectorillustrationisolatedwhite136001219.jpg" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" height="295"></td>
    </tr>
    <tr style="border-collapse:collapse">
    <td align="center" style="padding:25px;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:georgia, times, \'times new roman\', serif;line-height:60px;color:#000000;font-size:30px"><b>Inquiry Email</b></p></td>
    </tr>
    <tr style="border-collapse:collapse">
    <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:georgia, times, \'times new roman\', serif;line-height:30px;color:#000000;font-size:20px">Hello, someone booked a car with a driver.</p></td>
    </tr>
    <tr style="border-collapse:collapse">
    <td align="center" style="padding:30px;Margin:0;font-size:0px">
    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
    <tr style="border-collapse:collapse">
    <td style="padding:0;Margin:0;border-bottom:0px solid #cccccc;background:none;height:1px;width:100%;margin:0px"></td>
    </tr>
    </table></td>
    </tr>
    <tr style="border-collapse:collapse">
    <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:georgia, times, \'times new roman\', serif;line-height:30px;color:#000000;font-size:20px">The information listed below is for your reference:<br><br>Contact name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : '. $name .'<br>Contact email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : '. $email .'<br>Contact number&nbsp; &nbsp; &nbsp; : '. $contact_number .'<br>Pick Up Date&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : '. $pickupdate .'<br>Drop Off Date&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; : '. $dropoffdate .'</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:georgia, times, \'times new roman\', serif;line-height:30px;color:#000000;font-size:20px">Pick Up Location&nbsp; &nbsp;&nbsp;&nbsp;: '. $pickuplocation .'<br>Drop Off Location&nbsp;&nbsp;&nbsp;: '. $dropofflocation .'<br><br></p></td>
    </tr>
    <tr style="border-collapse:collapse">
    <td align="center" style="padding:0;Margin:0"><span class="es-button-border" style="border-style:solid;border-color:#25d366;background:#25d366;border-width:2px;display:inline-block;border-radius:12px;width:auto;letter-spacing:0.5px"><a href="https://api.whatsapp.com/send?phone=6'. $contact_number_no_dash .'&text=Hi '. $name .'" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:12px;border-style:solid;border-color:#25d366;border-width:15px 30px 15px 30px;display:inline-block;background:#25d366;border-radius:12px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;font-weight:bold;font-style:normal;line-height:14px;width:auto;text-align:center">Go to WhatsApp</a></span></td>
    </tr>
    <tr style="border-collapse:collapse">
    <td align="center" style="padding:20px;Margin:0;font-size:0">
    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
    <tr style="border-collapse:collapse">
    <td style="padding:0;Margin:0;border-bottom:0px solid #cccccc;background:none;height:1px;width:100%;margin:0px"></td>
    </tr>
    </table></td>
    </tr>
    <tr style="border-collapse:collapse">
    <td align="center" style="padding:20px;Margin:0;font-size:0">
    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
    <tr style="border-collapse:collapse">
    <td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:none;height:1px;width:100%;margin:0px"></td>
    </tr>
    </table></td>
    </tr>
    </table></td>
    </tr>
    </table></td>
    </tr>
    </table></td>
    </tr>
    </table></td>
    </tr>
    </table>
    </div>
    </body>
    </html>';

    $mail = new PHPMailer;
    // $mail->SMTPDebug = 3;                //debug error
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';          // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mengsenglim112@gmail.com';              // SMTP username
    $mail->Password = 'cgklnqijpkswkrdl';                      // SMTP password
    $mail->SMTPSecure = 'tls';                           // Enable TLS encryption, ssl also accepted
    $mail->Port = 80;
    $mail->setFrom('mengsenglim112@gmail.com', 'company_name');    //sender
    $mail->AddAddress('mengsenglim112@gmail.com', 'mengseng');  //receiver
    // $mail->AddReplyto('mengsenglim112@gmail.com');
    $mail->IsHTML(true);
    $mail->Subject = 'Someone booked a car with a driver.'; //email title
    $mail->Body = $body;

    
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        $respond = array("status" => "FailSent", "message" => " Sent Email!");
        echo json_encode($respond);
        return;
    } else {
        header("Location: index.php");  //back to home page
        exit();
    }
?>