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
                WHERE
                    is_service = 0
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

    public function readAllServices($sid)
    {
        $cond = '';
        $query = "SELECT
				    *
				FROM
					" . $this->table_name . "
                WHERE
                    is_service = $sid
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $this->all_list = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //    $row['username'] = '<a href="'.MAIN_URL.'/taxi/'.$row['username'].'"></a>';
            //$row['link'] = MAIN_URL.'/news/'.$row['link'];
            if ($row['is_service'] == 0) {
                $row['link'] = MAIN_URL.'/news/'.$row['link'];
            } else if ($row['is_service'] == 1) {
                $row['link'] = MAIN_URL.'/service1/'.$row['link'];
            } else if ($row['is_service'] == 2) {
                $row['link'] = MAIN_URL.'/service2/'.$row['link'];
            }
            $this->all_list[] = $row;
        }
        return $this->all_list;
    }

    public function getRelated ($sid, $str, $id) {
        $query = "SELECT
				    *, MATCH(title, content) AGAINST('$str') AS score
				FROM
					" . $this->table_name . "
                WHERE
                    is_service = $sid
                    AND MATCH(title, content) AGAINST('$str')
                    AND id != $id
                ORDER BY score DESC, id DESC
                LIMIT 0,5";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $list = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //    $row['username'] = '<a href="'.MAIN_URL.'/taxi/'.$row['username'].'"></a>';
            //$row['link'] = MAIN_URL.'/news/'.$row['link'];
            if ($row['is_service'] == 0) {
                $row['link'] = MAIN_URL.'/news/'.$row['link'];
            } else if ($row['is_service'] == 1) {
                $row['link'] = MAIN_URL.'/service1/'.$row['link'];
            } else if ($row['is_service'] == 2) {
                $row['link'] = MAIN_URL.'/service2/'.$row['link'];
            }
            $list[] = $row;
        }
        return $list;
    }

    public function readOne($sid)
    {
        $query = "SELECT
					*
				FROM
					" . $this->table_name . "
                WHERE 
                    link = ? AND is_service = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $sid);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values
        if ($row['id']) {
            $this->id = $row['id'];
            $this->title = $row['title'];
            if ($row['is_service'] == 0) {
                $this->link = $row['link'] = MAIN_URL.'/news/'.$row['link'];
            } else if ($row['is_service'] == 1) {
                $this->link = $row['link'] = MAIN_URL.'/service1/'.$row['link'];
            } else if ($row['is_service'] == 2) {
                $this->link = $row['link'] = MAIN_URL.'/service2/'.$row['link'];
            }
            $this->image = $row['image'];
            $this->content = $row['content'];
            $this->author = $this->getUserInfo($row['author']);
            $this->date = $row['date'];
            $this->is_service = $row['is_service'];
            $this->price = $row['price'];
        }

        return ($row['id'] ? $row : null);
    }

}
