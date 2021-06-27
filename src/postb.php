<?php
$postorig = $_GET["p"];
$postfix1 = str_replace("<", "", $postorig);
$postfix2 = str_replace(">", "", $postfix1);
$postc = $postfix2;
if (is_file("posts.txt")) {False;} else {
    fopen("posts.txt", "w");
}
$postsf = fopen("posts.txt", "a");
fwrite($postsf, $postc . "<br><br>");
echo '<script>window.location.href = "/";</script>';
?>