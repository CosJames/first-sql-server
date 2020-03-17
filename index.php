<?php
    include 'php/loader.php'
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Caffeine</title>
</head>
<body>

    <table>
        <tr>
            <th>Id</th>
            <th>Namdwde</th>
        </tr>
        <tr>
            <td>Hello</td>
            <td>Hello</td>
        </tr>
    </table>

    <?php
        # SQL Syntax
        $sql = "SELECT * FROM Members;";
        # Parameter is the connection and the SQL Syntax
        $result = mysqli_query($conn, $sql);
        # Gather the number of rows from the database
        $data = mysqli_num_rows($result);
        # If the number of rows is not less than 0
        if ($data > 0) {
            # While there are data in the database it will spit out the remaining data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "User ID : ".$row["id"]. "</br>"."User Name : ".$row["username"]. "</br>";
            }
        }
    ?>


</body>
</html>