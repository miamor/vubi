<?php
class About extends Config
{

    private $table_name = "info";

    public function __construct()
    {
        parent::__construct();
    }

    public function getInfo()
    {
        $query = "SELECT
				    *
				FROM
					" . $this->table_name . "
				LIMIT 0, 1";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $row['header_image'] = explode(',', $row['header_image']);
        return $row;
    }

}
