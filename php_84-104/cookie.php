<?php
    setcookie("fav_food", "pizza", time() + 3600, "/");
    setcookie("fav_drink", "coffee", time() + 3600, "/");
    setcookie("fav_dessert", "cake", time() + 3600, "/");

    function getCookie(){
        echo $_COOKIE["fav_food"];
    }
    getCookie();

    function deleteCookie(){
    setcookie("fav_dessert", "cake", time() - 3600, "/");

    }
    deleteCookie();
?>