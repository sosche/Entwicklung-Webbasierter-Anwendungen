<?php

abstract class Page
{
	protected $db;

	protected function __construct() {
		// activate full error checking
		error_reporting (E_ALL);
		
		$this->db = new MySQLi("mariadb","public","public","formbuilder");
		if (mysqli_connect_errno())
			throw new Exception(mysqli_connect_error());
		if (!$this->db->set_charset("utf8"))
			throw new Exception($this->db->error);
	}

	public function __destruct() {
		$this->db->close();
	}

	protected function generatePageHeader($headline = "") {
		header("Content-type: text/html; charset=UTF-8");
		$headline = htmlspecialchars($headline);
echo <<<EOT
<!DOCTYPE html>
	<html lang="de">
		<head>
			<meta charset="UTF-8"/>
			<title>$headline</title>
			<link rel="stylesheet" type="text/css" href="FormularGenerator.css"/>
			<script src="FormularGenerator.js"></script>
		</head>
		<body>

EOT;
	}
	protected function generatePageFooter() {
		echo "</body>\n";
		echo "</html>\n";
	}

	protected function processReceivedData() { }
}
