<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator" id="">
            <option value="None">None</option>
            <option value="Add">Add</option>
            <option value="Substract">Substract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>The answer is:</p>
    <?php
    
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "you need to select method";
                break;
            case "Add";
              echo $result1 + $result2;
                break;
            case "Substract":
                echo $result1 - $result2;
                break;
            case "Multiply":
                    echo $result1 * $result2;
                    break;
            case "Divide":
                    echo $result1 / $result2;
                     break;       
        }
    }
    ?>
    
</body>
</html>