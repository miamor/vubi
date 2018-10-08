<?php
class Progress extends Config
{

    private $table_name = "progress";

    public function __construct()
    {
        parent::__construct();
    }

    public function readAll()
    {
        $query = "SELECT
				    *
				FROM
                    " . $this->table_name . "
                ORDER BY orders ASC, id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $list = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //    $row['username'] = '<a href="'.MAIN_URL.'/taxi/'.$row['username'].'"></a>';
            $list[$row['pid']][] = $row;
        }
        return $list;
    }

}
