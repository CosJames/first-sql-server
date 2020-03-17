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

    <div class="container">
        <h1>mySQL Database List</h1>
        <a href="#create-tab">Create Tab</a>
        <h3>Select</h3>
        <table class="table">
            <thead>
                <tr id="column">
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $gatherMembers = new Members;
                    $gatherMembers->getAllMembers();
                ?>  


                <!--
                <?php
                    $data = "Sebastian";
                    # SQL Template
                    $querySelect = "SELECT * FROM Members WHERE username=?;";
                    # Parameter is the connection and the SQL Syntax
                    # $executeSelect = mysqli_query($conn, $querySelect);

                    # Create a Prepared Statement
                    $stmt = mysqli_stmt_init($conn);
                    # Prepare Prepared Statement
                    if (mysqli_stmt_prepare($stmt, $querySelect)) {
                        # Bind Parameters to the placeholder
                        # parameter (statement, indicator, actualDataThatWillBeInserted, WhatEverVariableThatIsCreated)
                        mysqli_stmt_bind_param($stmt, "s", $data);
                        # Run Parameters inside database
                        mysqli_stmt_execute($stmt);
                        # Get the Result from the template
                        $result = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><th scope='row'>".$row["id"]."</th><td>".$row["username"]."</td><td>".$row["email"]."</td><td>ENCRYPT</td></tr>";
                        }

                    } else {
                        echo "SQL Statement Failed!";
                    }

                    # Gather the number of rows from the database

                    # $data = mysqli_num_rows($executeSelect);

                    # If the number of rows is not less than 0

                    # if ($data > 0) {
                    #   # While there are data in the database it will spit out the remaining data
                    #    while ($row = mysqli_fetch_assoc($executeSelect)) {
                    #        echo "<tr><th scope='row'>".$row["id"]."</th><td>".$row["username"]."</td><td>".$row["email"]."</td><td>ENCRYPT</td></tr>";
                    #    }
                    # }
                ?>-->
            </tbody>
        </table>

        <!--Test Form for insert method (SQL)-->
        <h3>Create</h3>
        <form id="create-tab" action="inc/insert.inc.php" method="POST">
            <label>Name : </label>
            <br>
            <input type="text" name="Name">
            <br>
            <label>Email : </label>
            <br>
            <input type="email" name="Email">
            <br>
            <label>Password : </label>
            <br>
            <input type="password" name="Password">
            <br>
            <button type="submit" name="submit"> Insert </button>
        </form>


    </div>
</body>
</html>