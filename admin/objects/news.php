<?php
class News extends Config
{

    private $table_name = "tuvan";

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
					title = ?, link = ?, image = ?, content = ?, author = ?, date = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->link = encodeURL($this->title);
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->date = htmlspecialchars(strip_tags($this->date));
        //$this->date = date("Y-m-d h:i:s a", time());

        // bind parameters
        $stmt->bindParam(1, $this->title);
        $stmt->bindParam(2, $this->link);
        $stmt->bindParam(3, $this->image);
        $stmt->bindParam(4, $this->content);
        $stmt->bindParam(5, $this->author);
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
                    title = ?, link = ?, image = ?, content = ?, author = ?, date = ?
				WHERE
					id = ?";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->link = encodeURL($this->title);
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->date = htmlspecialchars(strip_tags($this->date));
        //$this->date = date("Y-m-d h:i:s a", time());

        // bind parameters
        $stmt->bindParam(1, $this->title);
        $stmt->bindParam(2, $this->link);
        $stmt->bindParam(3, $this->image);
        $stmt->bindParam(4, $this->content);
        $stmt->bindParam(5, $this->author);
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

    public function readMany($from, $to, $cond = '')
    {
        $query = "SELECT
				    *
				FROM
                    " . $this->table_name . "
                $cond
                ORDER BY id DESC
                LIMIT $from, $to";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $this->all_list = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //    $row['username'] = '<a href="'.MAIN_URL.'/taxi/'.$row['username'].'"></a>';
            $this->all_list[] = $row;
        }
        return $this->all_list;
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
            $row['author'] = $this->getUserInfo($row['author']);
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
            $this->image = $row['image'];
            $this->content = $row['content'];
            $this->author = $this->getUserInfo($row['author']);
            $this->date = $row['date'];
        }

        return ($row['id'] ? $row : null);
    }

}
