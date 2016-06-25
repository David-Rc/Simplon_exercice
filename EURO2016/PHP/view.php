<?php

class View{


    function viewArrayList($array, $value, $value2=null)
    {

        for($i = 0; $i <= count($array) - 1; $i++){
        
            $result = $array[$i][$value];
            

            echo "<li>";
            echo "<a href='#/".$result."'>";
            echo $result;
            echo "</a>";
        if($value2 != null){

            $result2 = $array[$i][$value2];

            echo "<ul>";
                foreach($result2 as &$items){
            
                    echo "<li>".$items."</li>";
            
                }
            echo "</ul>";
        } 
            
        }
            echo "</li>"; 
    }

}

?>