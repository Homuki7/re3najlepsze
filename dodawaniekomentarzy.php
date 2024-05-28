<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "re3najlepsze");
    
    $nick = $_POST['nick'];
    $komentarz = $_POST['komentarz'];
    
    $php = "INSERT INTO `komentarze`(`nick`, `komentarz`) VALUES ('$nick','$komentarz')";
    mysqli_query($polaczenie, $php);
    header("Location: index.php");
    exit();
?>
