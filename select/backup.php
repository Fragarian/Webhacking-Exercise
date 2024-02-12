b<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<?php
    include "db_info.php";
?>
<html>
<head>
    <title>select where</title>

    <style>
        h3, #cloumn {
            display : inline;
        }
        #conditional {
            width : 100%;
        }
        tr {
            width : 10%;
        }
        a, a:visited {
            color : orange;
            text-decoration : none; 
            decoration : none; 
        }

    </style>
</head>
<body>
    <?php
        $column = isset($_POST['column'])? $_POST['column'] : "";
        $conditional = isset($_POST['conditional'])? $_POST['conditional'] : "";
    ?>
    <a href="select.php"><h1>SELECT - FROM - WHERE</h1></a>
    <hr>
    <form method="POST" action="select_where.php">
        <h3>SELECT</h3>
        <input type="text" name="column" value="<?php echo $column; ?>">
        <h3>FROM users WHERE</h3>
        <input type="text" name="conditional" value="<?php echo $conditional; ?>">
        <h3>;</h3>
        <br>
        <input type="submit" value="execute">
    <hr>
    <!-- table -->
    <?php
        $sql1 = "";
        if($column != "" && $conditional != "") {
            $sql1 = "SELECT ".$column." FROM users WHERE ".$conditional;
        }

        if($sql1 != "") { // Argument ok
            $result1 = sq($sql1);
            $row1_length = mysqli_num_rows($result1);

            $sql2 = "SHOW COLUMNS FROM users WHERE ".$conditional;
            $result2 = sq($sql2);

            if(strpos($column, '*') !== false) { // include *
                $sql3 = "SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME = 'users'";
                $result3 = sq($sql3);
                $column_arr = array();
                while($row3 = mysqli_fetch_array($result3)) {
                    array_push($column_arr, $row3[0]);
                }
                $column_length = count($column_arr);
            } else { // not include *
                $column_trim = str_replace(' ', '', $column);
                $column_arr  = explode(',', $column_trim);
                $column_length = count($column_arr);
            }
        }
    ?>
    <?php
        if($sql1 == "") {
            echo "<h3>Insert argument</h3>";
        } else if(!$result1) {
            echo "<h3>Wrong SQL</h3>";
        } else if($row1_length == 0) {
            echo "<h3>Empty set</h3>";
        } else {
            echo "<table border='1'>";
            echo "<tr>";

            for($i = 0 ; $i < $column_length ; $i++) {
                echo "<th>".$column_arr[$i]."</th>";
            }
            echo "</tr>";

            while($row = mysqli_fetch_array($result1)) {
                for($w = 0 ; $w < $column_length ; $w++) {
                    echo "<td>".$row[$column_arr[$w]]."</td>";
                }
                echo "</tr>";
            }
            echo "<table>";
        }
    ?> 
</body>
</html>