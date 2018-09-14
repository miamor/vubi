<?php
class News extends Config
{

    private $table_name = "tuvan";

    public function __construct()
    {
        parent::__construct();
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
            $row['link'] = MAIN_URL.'/news/'.$row['link'];
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
            $row['link'] = MAIN_URL.'/news/'.$row['link'];
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
				WHERE link = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values
        if ($row['id']) {
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->link = $row['link'] = MAIN_URL.'/news/'.$row['link'];
            $this->image = $row['image'];
            $this->content = $row['content'];
            $this->author = $this->getUserInfo($row['author']);
            $this->date = $row['date'];
        }

        return ($row['id'] ? $row : null);
    }

}
