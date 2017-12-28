<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert into DataBase</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <form action="Insert_Into_Database.php" method="Post">
            <fieldset>
                Employee Name:<br><input type="text" name="EName" value=""><br>
                Social Security Number:<br><input type="text" name="SSN" value=""><br>
                Department:<br><input type="text" name="Dept" value=""><br>
                Salary:<br><input type="text" name="Salary" value=""><br>
                Home Address:<br><textarea name="HomeAddress" id="" cols="30" rows="3"></textarea><br>
                <br><input type="Submit" name="Submit" value="Submit Your Record"><br>
            </fieldset>
        </form>
    </div>
    <?php ?>
</body>

</html>