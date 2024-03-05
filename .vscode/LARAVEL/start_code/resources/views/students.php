<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <h2>List of students:</h2>
    <ul>
        <?php for ($i=0; $i < count($students); $i++) { ?>
           <li><?php echo $students[$i]['name']; ?> in class <?php echo $students[$i]['class']; ?> is <?php echo $students[$i]['age']; ?></li> 
        <?php }?>
    </ul>
</body>

</html>