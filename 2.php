<?php

$username = [
	'@Rf4ndy',
	'Xrutaf888',
	'1Diana'

];

$pass = [
	'A#sd5dass',
	'passW0rd=',
	'C0d3YourFuture!#'
];



foreach ($username as $user) {
	if (preg_match('/^([a-zA-Z])(?=.*[0-9]){5,9}/', $user)) {
		echo "username $user adalah <b>valid</b> <br>";
	} else {
		echo "username $user adalah <b>tidak valid</b> <br>";
	}
}


foreach ($pass as $key) {
	if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[=])(?=.*[#$^+=!*()@%&]).{8,10}$/', $key)) {

		echo "PASSWORD $key adalah <b>valid</b> <br>";
	} else {

		echo "PASSWORD $key adalah <b>tidak valid</b> <br>";
	}
}
