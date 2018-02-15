<?php
// require database connection file
require ("/home/kdyckgre/config.php");

function connect()
{
    try {
        // instantiate a PDO object using a PDO constructor
        $dbh = new PDO(DB_DSN,
            DB_USERNAME,
            DB_PASSWORD);
        echo "Connected to database!";
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
}

function getStudents()
{
    global $dbh;

    // 1. define the query
    $sql = "SELECT * FROM student ORDER BY last, first";

    // 2. prepare the statement
    $statement = $dbh->prepare($sql);

    // 3. bind parameters

    // 4. execute the statement
    $result = $statement->execute();

    // 5. Return the result
    return result;
}