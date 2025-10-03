<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Asunto', @$_POST['imObjectForm_4_1'], '', false);
	$form->setField('E-mail', @$_POST['imObjectForm_4_2'], '', false);
	$form->setField('Mensaje', @$_POST['imObjectForm_4_3'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '1F76D899D7C4A19ADC7394B7EC88A548' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			$errorMessage = "Debes que activar Javascript!";
		$form->mailToOwner('', $_POST['imObjectForm_4_2'] != '' ? $_POST['imObjectForm_4_2'] : 'radiolanuevafm@gmail.com', 'radiolanuevafm@gmail.com', '', "", false);
		if ($errorMessage == '') {
			echo "{\"status\" : true}";
		}

		else {
			echo "{\"status\" : false, \"err\" : \"$errorMessage\"}";
		}
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file