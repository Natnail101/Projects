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
        <?php echo $error; ?>
    <div>
        <label for="text1">Enter Text</label>
        <input type="text" name= "name" id= "name" value= "<?php echo $name;?>">
    </div>

    <div>
        <label for="email">Enter Email Text:</label>
        <input type="text" name= "email" id= "email" value = "<?php echo $email;?>">
    </div>
    <div>
        <label for="subject">Enter Subject:</label>
        <input type="text" name= "subject" id= "subject" value = "<?php echo $subject;?>">
    </div>
    <div>
        <label for="message">Enter Message</label>
        <textarea name="message" id="message"><?php echo $message; ?></textarea>
    </div>

    <input type="submit" name = "submit">
    </form>
</body>
</html>