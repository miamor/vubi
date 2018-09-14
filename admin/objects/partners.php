<?php
class Partner extends Config
{

    private $table_name = "partners";

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
					title = ?, link = ?, image = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->cust_name));
        $this->link = htmlspecialchars(strip_tags($this->link));
        $this->image = htmlspecialchars(strip_tags($this->image));

        // bind parameters
        $stmt->bindParam(1, $this->cust_name);
        $stmt->bindParam(2, $this->link);
        $stmt->bindParam(3, $this->image);

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
                    title = ?, link = ?, image = ?
				WHERE
					id = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->cust_name));
        $this->link = htmlspecialchars(strip_tags($this->link));
        $this->image = htmlspecialchars(strip_tags($this->image));

        // bind parameters
        $stmt->bindParam(1, $this->cust_name);
        $stmt->bindParam(2, $this->link);
        $stmt->bindParam(3, $this->image);
        $stmt->bindParam(4, $this->id);

        // execute the query
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function delete()
    {

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        // execute the query
        if ($result = $stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function readAll()
    {
        $cond = '';
        $query = "SELECT
				    *
				FROM
					" . $this->table_name . "
				{$cond}
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $this->all_list = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //    $row['username'] = '<a href="'.MAIN_URL.'/taxi/'.$row['username'].'"></a>';
            $this->all_list[] = $row;
        }
        return $this->all_list;
    }

    public function readOne()
    {
        $query = "SELECT
					*
				FROM
					" . $this->table_name . "
                WHERE id = ?";
                
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return ($row['id'] ? $row : null);
    }

}
