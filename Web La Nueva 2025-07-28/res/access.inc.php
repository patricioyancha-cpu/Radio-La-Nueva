<?php

// Users data
$imSettings['access']['users'] = array(
	'example@example.com' => array(
		'id' => 'h03a3cn1',
		'groups' => array('h03a3cn1'),
		'firstname' => 'Admin',
		'lastname' => '',
		'email' => 'example@example.com',
		'password' => '$2a$11$OsmS9NMwxRxHlvdimWCOeeA5CFFwqm9yB2RF1JBFGcJ.Cn56XUEBa',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => 'index.html'
	),
	'' => array(
		'id' => '943026v0',
		'groups' => array('943026v0'),
		'firstname' => 'NewUser',
		'lastname' => '',
		'email' => '',
		'password' => '$2a$11$tqjDOThTB1DefhQyRj5EBu9PW4bineV.GhMAl9vnrygxneLt1FW8W',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => 'index.html'
	)
);

// Admins list
$imSettings['access']['admins'] = array('h03a3cn1');

// Page/Users permissions
$imSettings['access']['pages'] = array();

// PASSWORD CRYPT

$imSettings['access']['password_crypt'] = array(
	'encoding_id' => 'php_default',
	'encodings' => array(
		'no_crypt' => array(
			'encode' => function ($pwd) { return $pwd; },
			'check' => function ($input, $encoded) { return $input == $encoded; }
		),
		'php_default' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_DEFAULT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		),
		'csharp_bcrypt' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_BCRYPT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		)
	)
);

// End of file access.inc.php