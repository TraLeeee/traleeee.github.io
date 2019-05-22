<?php
    //Scope
    $year = $_REQUEST['year'];
    //Kiểm tra không rỗng thì thực hiện statement
    if ($year != "") {
        
            $x = date('Y');
            $y = $x - $year;
            echo "Bạn đã ". $y ." rồi đó";  
    }else return null;
?>

