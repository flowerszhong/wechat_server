

<?php
$this->renderPartial('_search', array(
		'model' => $model,
	));

if ($msg != "") {
	echo "<div class='alert alert-danger' role='alert'>" . $msg . "</div>";
}
?>

