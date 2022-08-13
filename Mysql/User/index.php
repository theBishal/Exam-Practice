<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        form
        {
            width: 500px;
            margin: 0 auto;
            
        }
    </style>
</head>
<body>
    <div>
      
        ?>
    <form action="../model/save.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="roll">Roll:</label>
            <input type="number" name="roll" id="roll">
        </div>
        <div>
            <label for="mobile_number">Mobile Number:</label>
            <input type="number" name="mobile_number" id="mobile_number">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="1">Absent</option>
                <option value="2">Present</option>
            </select>
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>
    </div>
</body>
</html>