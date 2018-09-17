<?php
class About extends Config
{

    private $table_name = "info";

    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        //write query
        $query = "INSERT INTO
					" . $this->table_name . "
				SET
					email = ?, logo = ?, phone = ?, about = ?, footer = ?, info = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->logo = htmlspecialchars(strip_tags($this->logo));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        //$this->about = htmlspecialchars(strip_tags($this->about));
        //$this->footer = htmlspecialchars(strip_tags($this->footer));

        // bind parameters
        $stmt->bindParam(1, $this->email);
        $stmt->bindParam(2, $this->logo);
        $stmt->bindParam(3, $this->phone);
        $stmt->bindParam(4, $this->about);
        $stmt->bindParam(5, $this->footer);
        $stmt->bindParam(6, $this->info);

        // execute the query
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function update()
    {
        $query = "UPDATE
					" . $this->table_name . "
				SET
                    email = ?, logo = ?, phone = ?, about = ?, footer = ?, title = ?, name = ?, des = ?, header_image = ?, info = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->logo = htmlspecialchars(strip_tags($this->logo));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->des = htmlspecialchars(strip_tags($this->des));
        $this->header_image = htmlspecialchars(strip_tags($this->header_image));
        //$this->about = preg_replace('"', '\"', $this->about);
        //$this->footer = preg_replace('"', '\"', $this->footer);
        //$this->about = htmlspecialchars(strip_tags($this->about));
        //$this->footer = htmlspecialchars(strip_tags($this->footer));
        //$this->info = htmlspecialchars(strip_tags($this->info));

        // bind parameters
        $stmt->bindParam(1, $this->email);
        $stmt->bindParam(2, $this->logo);
        $stmt->bindParam(3, $this->phone);
        $stmt->bindParam(4, $this->about);
        $stmt->bindParam(5, $this->footer);
        $stmt->bindParam(6, $this->title);
        $stmt->bindParam(7, $this->name);
        $stmt->bindParam(8, $this->des);
        $stmt->bindParam(9, $this->header_image);
        $stmt->bindParam(10, $this->info);

        // execute the query
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

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
        return $row;
    }

}
