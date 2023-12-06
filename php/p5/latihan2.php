<?php
// pengulangan pada array
// for / foreach

$angka =[21,32,1,31,13,13,131,31,31,3];
?>

<!DOCTYPE html>
<html>
<head>
    <title> latihan2</title>
    <style>
      div {width: 50px;
           height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            }
    </style>

</head>
<body>
    <?php foreach( $angka as $nomor ) : ?>   
    <div><?php echo $nomor; ?></div>
<?php endforeach; ?>
    



</body>
</html>