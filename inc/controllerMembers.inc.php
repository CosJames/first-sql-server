<?php
# 
class Members extends DatabaseHelper {
    public function getAllMembers(){
        $helper = new DatabaseHelper;
        
        $template = "SELECT * FROM Members";
        $query= mysqli_query($helper->connect(), $template);
        $result = mysqli_num_rows($query);
    
        if($result > 0) {
            while($row = mysqli_fetch_assoc($query)) {
                $container = new ViewMembers($row["id"], $row["username"], $row["email"], $row["password"]);
                $container->build();
            }
        }
    }

}