<?php
class Contact extends Config
{

    private $table_name = "contact";

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
					name = ?, phone = ?, email = ?, address = ?, content = ?, date = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->date = htmlspecialchars(strip_tags($this->date));
        //$this->content = htmlspecialchars(strip_tags($this->content));

        // bind parameters
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->phone);
        $stmt->bindParam(3, $this->email);
        $stmt->bindParam(4, $this->address);
        $stmt->bindParam(5, $this->content);
        $stmt->bindParam(6, $this->date);

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
                    name = ?, phone = ?, email = ?, address = ?, content = ?, date = ?
				WHERE
					id = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->date = htmlspecialchars(strip_tags($this->date));
        //$this->content = htmlspecialchars(strip_tags($this->content));

        // bind parameters
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->phone);
        $stmt->bindParam(3, $this->email);
        $stmt->bindParam(4, $this->address);
        $stmt->bindParam(5, $this->content);
        $stmt->bindParam(6, $this->date);
        $stmt->bindParam(7, $this->id);

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
        $query = "SELECT
				    *
				FROM
                    " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $this->all_list = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row['nhombenh'] = $row['nhombenh_name'];
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
            $this->content = $row['content'];
            $this->name = $row['name'];
            $this->email = $row['email'];
            $this->phone = $row['phone'];
            $this->address = $row['address'];
            $this->date = $row['date'];
        }

        return ($row['id'] ? $row : null);
    }

}
