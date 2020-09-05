<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3.9</title>
</head>
<body>
    <div class="container">
        <form action = "array.php" method = "POST">

        <div class = "name">
            <label>Name:</label>
            <input type = "text" name = "name">
        </div>

        <br/>

        <div class = "age">
            <label> Age: </label>
            <input type = "text" name = "age">
        </div>

        <br/>

        <div class = "sex">
            <label>Sex:</label>
            <select name = "sex">
                <option value = "" disabled select>Select sex</option>
                <option value = "Masc"> Male </option>
                <option value = "Fem"> Female </option>
            </select>
        </div>
        
        <br/>

        <div class = "button">
            <input type = "submit" value = "Send Info">
        </div>

        </form>

    </div>
   
</body>
</html>