<?php
function dynamic_body(){
    if (isset($_GET['page'])){
        $page = $_GET['page'];
        if ($page == "home" || $page == "php" || $page == "sql"){
            return file_get_contents($page . ".html");
        }
    }
    return "<p>Unknown page</p>";
}
?>
