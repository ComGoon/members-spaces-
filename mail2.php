<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 8/23/18
 * Time: 10:57 PM
 */

//ini_set('smtp_port', '1025');
//mail('mahaman@gmail.com','this is a subject', 'This is a message', 'From: madani@gmail.com');

echo "mail2";
if (!isset($_POST['btn'])){
    echo "mail2";
    $text = $_POST['txt'];
    echo $text;
    if(strlen($text)<4){
        echo 'text must be 5 characters of more';
    }else{
        echo "mail3";

    }
}else{
    echo "mail4";

}
?>
</body>
</html>

