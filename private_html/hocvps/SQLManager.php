<?php

class SQLManager {

	/**
	 * @param string $password
	 * @param string $old_password
	 * @throws Exception
	 */
	public function updatePassword($password) {
		$mysqli = new mysqli("localhost", "root", "73ba838e6a1b827f5");
		
		/* check connection */
		if ($mysqli->connect_errno) {
		    throw new Exception("Connect failed.");
		}
		
		/* Change password for admin account */
		$mysqli->query("SET PASSWORD FOR 'admin'@'localhost' = PASSWORD('$password');");
		
		$mysqli->close();
	}
}
