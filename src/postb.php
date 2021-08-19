<?php
$old = file_get_contents("posts.txt");
$postorig = $_GET["p"];
$postfix1 = str_replace("<", "", $postorig);
$postfix2 = str_replace(">", "", $postfix1);
$postc = $postfix2;
if (is_file("posts.txt")) {False;} else {
    fopen("posts.txt", "w");
}
$postsf = fopen("posts.txt", "w");
fwrite($postsf, $postc . "<br><br>" . $old);
echo '<script>window.location.href = "/";</script>';
?>
