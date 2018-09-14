<?php
class Feedback extends Config
{

    private $table_name = "feedback";

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
					cust_name = ?, image = ?, content = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->cust_name = htmlspecialchars(strip_tags($this->cust_name));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->content = htmlspecialchars(strip_tags($this->content));

        // bind parameters
        $stmt->bindParam(1, $this->cust_name);
        $stmt->bindParam(2, $this->image);
        $stmt->bindParam(3, $this->content);

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
                    cust_name = ?, image = ?, content = ?
				WHERE
					id = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->cust_name = htmlspecialchars(strip_tags($this->cust_name));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->content = htmlspecialchars(strip_tags($this->content));

        // bind parameters
        $stmt->bindParam(1, $this->cust_name);
        $stmt->bindParam(2, $this->image);
        $stmt->bindParam(3, $this->content);
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

        // set values
        if ($row['id']) {
            $this->id = $row['id'];
            $this->cust_name = $row['cust_name'];
            $this->content = $row['content'];
            $this->image = $row['image'];
        }

        return ($row['id'] ? $row : null);
    }

}
