<?php

    $code = $_GET['code'];
    $input = "";
    //input save in file
    $inputfilepath = "files/input.txt";
    $inputfile = fopen($inputfilepath, "w");
    fwrite($inputfile, $input);
    fclose($inputfile);

    //code data save in file
    $filename = "file";
    $codepath = "files/file.py";
    $codefile = fopen($codepath, "w");
    fwrite($codefile, $code);
    fclose($codefile);

    $commond = "python files/file.py";
    $output = shell_exec($commond);
    echo $output;

?>
