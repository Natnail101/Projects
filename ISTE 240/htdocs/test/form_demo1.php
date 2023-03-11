<?php
isset($_GET["submit"])? writeData():NULL;

function writeData(){
    $text1 = $_GET["text1"];
    $text2 = $_GET["text2"];

    $form_data = array(
        'text1' => $text1,
        'text2' => $text2
    );
    $file_open = fopen("data.csv","a"); #a means append
    fputcsv($file_open,$form_data);
    fclose($file_open);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Demo 1</title>
</head>
<body>
    <form method= "get" action="">
    <div>
        <label for="text1">Enter Text</label>
        <input type="text" name= "text1" id= "text1">
    </div>

    <div>
        <label for="text2">Enter Text</label>
        <input type="text" name= "text2" id= "text2">
    </div>
    <input type="submit" name = "submit">
    </form>
</body>
</html>