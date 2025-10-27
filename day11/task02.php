<?php
function render_body($page){
    if ($page == "home" || $page == "php" || $page == "sql"){
         $filename = $page . ".html";
    return file_get_contents($filename);
    } else {
        return <p>Unknown page</p>
    }
}
?>