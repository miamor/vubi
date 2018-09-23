<?php
class Consult extends Config
{

    private $table_name = "consult";

    public function __construct()
    {
        parent::__construct();
    }

    public function getNhomBenh()
    {
        $query = "SELECT
				    *
				FROM
                    nhombenh
                ORDER BY title DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $list = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $list[] = $row;
        }
        return $list;
    }

    public function create()
    {
        //write query
        $query = "INSERT INTO
					" . $this->table_name . "
				SET
					name = ?, phone = ?, age = ?, email = ?, address = ?, nhombenh = ?, title = ?, content = ?, date = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->nhombenh = htmlspecialchars(strip_tags($this->nhombenh));
        $this->date = htmlspecialchars(strip_tags($this->date));
        //$this->content = htmlspecialchars(strip_tags($this->content));

        // bind parameters
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->phone);
        $stmt->bindParam(3, $this->age);
        $stmt->bindParam(4, $this->email);
        $stmt->bindParam(5, $this->address);
        $stmt->bindParam(6, $this->nhombenh);
        $stmt->bindParam(7, $this->title);
        $stmt->bindParam(8, $this->content);
        $stmt->bindParam(9, $this->date);

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
                    name = ?, phone = ?, age = ?, email = ?, address = ?, nhombenh = ?, title = ?, content = ?, date = ?
				WHERE
					id = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->nhombenh = htmlspecialchars(strip_tags($this->nhombenh));
        $this->date = htmlspecialchars(strip_tags($this->date));
        //$this->content = htmlspecialchars(strip_tags($this->content));

        // bind parameters
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->phone);
        $stmt->bindParam(3, $this->age);
        $stmt->bindParam(4, $this->email);
        $stmt->bindParam(5, $this->address);
        $stmt->bindParam(6, $this->nhombenh);
        $stmt->bindParam(7, $this->title);
        $stmt->bindParam(8, $this->content);
        $stmt->bindParam(9, $this->date);
        $stmt->bindParam(10, $this->id);

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
				    T.*, N.title as nhombenh_name
				FROM
                    " . $this->table_name . " T
                LEFT JOIN nhombenh N on N.id = T.nhombenh
                ORDER BY T.id DESC";

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
					T.*, N.title as nhombenh_name
				FROM
                    " . $this->table_name . " T
                LEFT JOIN nhombenh N on N.id = T.nhombenh 
                    AND T.id = ?";
                
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values
        if ($row['id']) {
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->content = $row['content'];
            $this->name = $row['name'];
            $this->email = $row['email'];
            $this->phone = $row['phone'];
            $this->age = $row['age'];
            $this->address = $row['address'];
            $this->nhombenh = $row['nhombenh'] = $row['nhombenh_name'];
            $this->date = $row['date'];
        }

        return ($row['id'] ? $row : null);
    }

}
