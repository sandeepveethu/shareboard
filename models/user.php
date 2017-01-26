<?php

class UserModel extends Model {
	public function login() {
		// Santizie POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);
		if($post['login']) {
			// select user
			$this->query("SELECT * FROM users where email=:email AND password=:password");

			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);

			$row = $this->single();

			if($row) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id" => $row['id'],
					"name" => $row['name'],
					"email" => $row['email']
					);
				/*
				$msg = 'Successfully logged in';
				Messages::setMessage($msg, 'success');
				*/
				header('Location: '.ROOT_URL.'shares');
			}
			else {
				$msg = 'Email or Password is incorrect.';
				Messages::setMessage($msg, 'error');
			}
		}
		return;
	}

	public function register() {
		// Santizie POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['register']) {

			if($post['name'] == '' || $post['email'] == '' || $post['password'] == '') {
				$msg = 'All fields are compulsory';
				Messages::setMessage($msg, 'error');
			}
			else {
				// Insert into shares table
				$this->query("INSERT INTO users(name,email,password) values(:name,:email,:password)");

				$this->bind(':name', $post['name']);
				$this->bind(':email', $post['email']);
				$this->bind(':password', $password);

				$this->execute();

				// Verify
				if($this->lastInsertId()) {
					// Redirect
					header('Location: '.ROOT_URL.'users/login');
				}
			}
		}
		return;
	}
}