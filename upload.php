<?php
    if (isset($_POST['password']) && isset($_FILES['sourcefile']) && $_FILES['sourcefile']['size'] != 0) {
        $passhash = strtolower("BAF06FC2CB908B551429F0F9A151B6E90086D398EA9EE7C4AD4D3BA332B45C88");
        if (hash("sha256", $_POST['password']) != $passhash) {
            //header("Location: /");
            die(hash("sha256", $_POST['password']) . " ; " . $passhash);
        }

        move_uploaded_file($_FILES['sourcefile']['tmp_name'], "./");

        //remove file extension from file
        $regex = "/\.\w+/";
        preg_match($regex, $_FILES['sourcefile']['tmp_name'], $filextarr);

        $newfilename = str_replace($filextarr[0], "", $_FILES['sourcefile']['tmp_name']) . ".exe";
        //try to compile
        //$result = shell_exec(escapeshellcmd("x86_64-w64-mingw32-gcc -o"))
        echo($newfilename);
        die();
    } else {
        header("Location: /");
    }
?>
