<?php
class User extends Config {

    private $table_name = "members";

    public function __construct() {
		parent::__construct();
	}


    public function readAllSimple () {
        $query = "SELECT
				    id,username
				FROM
					" . $this->table_name . "
				";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		$this->all_list = array();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $this->all_list[] = $row;
        }
        return $this->all_list;
    }

}

 ?>
