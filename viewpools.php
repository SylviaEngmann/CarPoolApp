<?php
        
        include_once("pool.php");
        $obj= new pool();
        $obj->getPool();

        $row = $obj->fetch();
        echo '{"result":1 , "pool":[';
        while($row){
            echo json_encode($row);
            $row = $obj->fetch();
            if($row!=false){
                echo ",";
            }
        }
        echo "]}";       
?>
