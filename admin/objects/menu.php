<?php
class Menu extends Config
{

    private $table_name = "leftmenu";

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
					title = ?, link = ?, orders = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->link = htmlspecialchars(strip_tags($this->link));
        $this->order = htmlspecialchars(strip_tags($this->order));

        // bind parameters
        $stmt->bindParam(1, $this->title);
        $stmt->bindParam(2, $this->link);
        $stmt->bindParam(3, $this->order);

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
                    title = ?, link = ?, orders = ?
				WHERE
					id = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->link = htmlspecialchars(strip_tags($this->link));
        $this->order = htmlspecialchars(strip_tags($this->order));

        // bind parameters
        $stmt->bindParam(1, $this->title);
        $stmt->bindParam(2, $this->link);
        $stmt->bindParam(3, $this->order);
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
        $query = "SELECT
				    C.id,C.title, C.orders,C.link,
                    P.title as parent_title,
                    P.link as parent_link
				FROM
					" . $this->table_name . " C
                LEFT JOIN 
                    " . $this->table_name . " P
                ON C.parent = P.id
                ORDER BY C.orders ASC, C.id DESC";

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
            $this->link = $row['link'];
            $this->order = $row['orders'];
        }

        return ($row['id'] ? $row : null);
    }

}
