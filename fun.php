<?php
function back_home(){
    echo '<a href = "index.php"><button>Home</button><br><br></a>';

}

function menu(){
    $menu = "test, work, log";
    $menu = explode(", ",$menu);

    for ($i = 0; $i < count($menu); $i++){
        echo '<a href = "'.$menu[$i].'.php">'.'  '.'<button>'.$menu[$i].'</button>'.'</a>';
    }
}
?>
