<?php
class Doctors extends Config
{

    private $table_name = "doctors";

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
					name = ?, link = ?, title = ?, des = ?, image = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->link = encodeURL($this->name);
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->des = htmlspecialchars(strip_tags($this->des));
        $this->image = htmlspecialchars(strip_tags($this->image));

        // bind parameters
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->link);
        $stmt->bindParam(3, $this->title);
        $stmt->bindParam(4, $this->des);
        $stmt->bindParam(5, $this->image);

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
                    name = ?, link = ?, title = ?, des = ?, image = ?
				WHERE
					id = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->link = encodeURL($this->name);
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->des = htmlspecialchars(strip_tags($this->des));
        $this->image = htmlspecialchars(strip_tags($this->image));

        // bind parameters
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->link);
        $stmt->bindParam(3, $this->title);
        $stmt->bindParam(4, $this->des);
        $stmt->bindParam(5, $this->image);
        $stmt->bindParam(6, $this->id);

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
            $this->name = $row['name'];
            $this->link = $row['link'];
            $this->title = $row['title'];
            $this->des = $row['des'];
            $this->image = $row['image'];
        }

        return ($row['id'] ? $row : null);
    }

}
