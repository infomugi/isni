<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class PenggunaIdentity extends CUserIdentity
{
	private $_id;
	
	public function authenticate()
	{
		$username = strtolower($this->username);
		$user = Pengguna::model()->find('LOWER(User_name)=?', array($username));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($user->Password!==md5($this->password))
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id = $user->Id;
			$this->setState('record', $user);
			$this->username = $user->User_name;
			$this->setState('profile', $user->Flag_register);
			$this->setState('profile', $user->Email);
			$this->errorCode = self::ERROR_NONE;
		}

		return $this->errorCode == self::ERROR_NONE;
	}
	
	public function getId()
	{
		return $this->_id;
	}
}

?>