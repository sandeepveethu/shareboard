<?php

class ShareModel extends Model {
	public function index() {
		$this->query('SELECT * FROM shares ORDER BY share_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add() {
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']) {
			// Insert into shares table
			$this->query("INSERT INTO shares(user_id,title,body,link) values(:user_id,:title,:body,:link)");

			$this->bind(':user_id', $_SESSION['user_data']['id']);
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':link', $post['link']);

			$this->execute();

			// Verify
			if($this->lastInsertId()) {
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}

		return;
	}
}