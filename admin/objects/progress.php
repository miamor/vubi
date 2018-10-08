<?php
class Progress extends Config
{

    private $table_name = "progress";

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
					title = ?, image = ?, content = ?, orders = ?, pid = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->pid = htmlspecialchars(strip_tags($this->pid));

        // bind parameters
        $stmt->bindParam(1, $this->title);
        $stmt->bindParam(2, $this->image);
        $stmt->bindParam(3, $this->content);
        $stmt->bindParam(4, $this->orders);
        $stmt->bindParam(5, $this->pid);

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
                    title = ?, image = ?, content = ?, orders = ?, pid = ?
				WHERE
					id = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->orders = htmlspecialchars(strip_tags($this->orders));
        $this->pid = htmlspecialchars(strip_tags($this->pid));

        // bind parameters
        $stmt->bindParam(1, $this->title);
        $stmt->bindParam(2, $this->image);
        $stmt->bindParam(3, $this->content);
        $stmt->bindParam(4, $this->orders);
        $stmt->bindParam(5, $this->pid);
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

    public function readAll($pid)
    {
        $query = "SELECT
				    *
				FROM
                    " . $this->table_name . "
                WHERE pid = ".$pid."
                ORDER BY orders ASC, id DESC";

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
            $this->title = $row['title'];
            $this->content = $row['content'];
            $this->image = $row['image'];
            $this->orders = $row['orders'];
        }

        return ($row['id'] ? $row : null);
    }

}
