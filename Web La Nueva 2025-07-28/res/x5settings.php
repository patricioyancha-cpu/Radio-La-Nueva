<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => 'E56A3B4E8FEE23375F6B976621CDC3BA',
	'url' => 'http://localhost/',
	'homepage_url' => 'http://localhost/index.html',
	'icon' => 'http://localhost/favImage.png',
	'version' => '2023.1.5.0',
	'sitename' => 'Radio La Nueva FM Ambato',
	'lang_code' => 'es-ES',
	'public_folder' => '',
	'salt' => 'r6wyh4slcrvgng5xwqrib9gi2tgih7ojx5w',
	'common_email_sender_addres' => ''
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"4dse060c-imCpt\">Palabra de control:</label><br />
			<input type=\"text\" id=\"4dse060c-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_reqlay3o.png',
	'notification_public_key' => 'a7ba35744d3bc7da',
	'notification_private_key' => '3ed1dfd2ab0f31dc',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://localhost/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(0, 0, 0, 1); background-color: rgba(234, 153, 153, 1); padding: 27px 25px 27px 25px; border-style: solid; border-width: 1px 1px 1px 1px; border-color: transparent transparent transparent transparent; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;',
	'email_opening' => 'Estimado cliente,<br /><br />Gracias por su pedido Se le recordamos de que el pago no ha todavía sido recibido.<br /><br />A continuación encontrará una lista de los productos pedidos, la información de facturación y de envío y las instrucciones para efectuar el pago.',
	'email_closing' => 'Póngase en contacto con nosotros si requiere información adicional.<br /><br />Atentamente, el personal de Ventas.',
	'email_payment_opening' => 'Estimado cliente,<br /><br />Gracias por su compra. Se le confirmamos que el pago ha sido recibido y que el pedido será procesado lo antes posible.<br /><br />A continuación encontrará una lista de los productos pedidos y la información de facturación y de envío.',
	'email_payment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'email_digital_shipment_opening' => 'Estimado Cliente,<br /><br />muchas gracias por su compra. Aquí le presentamos la lista de enlaces de descarga correspondientes a los productos solicitados:',
	'email_digital_shipment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'email_physical_shipment_opening' => 'Estimado cliente, <br /><br />gracias por su orden. Se le confirmamos que su pedido ha sido correctamente procesado y que los productos han sido enviado. <br /><br />Aquí encuentra la lista de los productos adquiridos:',
	'email_physical_shipment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '€',
	'currency_code' => 'EUR',
	'currency_name' => 'Euro',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array(
	'j7ig1zf7' => array(
		'id' => 'j7ig1zf7',
		'name' => 'Nueva categoría',
		'containsProductsWithProductPage' => false,
		'products' => array(),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_14zjv4so_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Transferencia bancaria',
		'description' => 'Pague más tarde mediante transferencia bancaria.',
		'email_text' => 'Estos son los datos necesarios para realizar el pago por transferencia bancaria:

XXX YYY ZZZ

Tenga en cuenta que una vez completado el pago, debe enviar una copia del recibo junto con el número de pedido.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Correo',
		'description' => 'La mercancía se entregará en 3-5 días.',
		'email_text' => 'Envío por Correo.\\nLa mercancía se entregará en 3-5 días.',
		'enable_tracking' => false,
		'tracking_url' => ''
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Envío urgente',
		'description' => 'La mercancía se entregará en 1-2 días.',
		'email_text' => 'Envío por Envío urgente.\\nLa mercancía se entregará en 1-2 días.',
		'enable_tracking' => false,
		'tracking_url' => ''
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2023.1.5 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#EA9999" style="background-color: #EA9999;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Open Sans\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Open Sans\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Este e-mail incluye información exclusiva para el destinatario mencionado anteriormente.<br>Si lo ha recibido por error, notifíqueselo inmediatamente al remitente y destrúyalo sin copiarlo.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#EA9999';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Open Sans\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Open Sans;';

// End of file x5settings.php