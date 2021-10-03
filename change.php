<?php

$setimg = Array (
        "A.png",
        "B.png",
        "C.png"
);

$num = rand(0,2);

$link = "./" . $setimg[$num];
header("Location: ".$link);

?>
