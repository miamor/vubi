<?php
class Menu extends Config
{

    private $table_name_left = "leftmenu";
    private $table_name_top = "menu";
    private $table_name = "";

    public function __construct()
    {
        parent::__construct();
    }

    public function readAll ($type)
    {
        if ($type == 'left') {
            $this->table_name = $this->table_name_left;
        } else {
            $this->table_name = $this->table_name_top;
        }

        $query = "SELECT
				    *
				FROM
                    " . $this->table_name . "
                ORDER BY parent ASC, orders ASC, id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $this->all_list = array();

        $index = array();
        $i = 0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //    $row['username'] = '<a href="'.MAIN_URL.'/taxi/'.$row['username'].'"></a>';
            
            if ($row['parent'] != 0) {
                $pid = $index[$row['parent']];
                $this->all_list[$pid]['child'][] = $row;
            } else {
                $this->all_list[] = $row;
                $index[$row['id']] = $i;
            }
            $i++;
        }
        return $this->all_list;
    }

    public function readOne ($type)
    {
        if ($type == 'left') {
            $this->table_name = $this->table_name_left;
        } else {
            $this->table_name = $this->table_name_top;
        }
        
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
