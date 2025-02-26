<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form method="post" action="calculator.php">
        <h1>Calculator´s R4</h1>
        <p>
            <label for="num1"></label>
            <input type="number" id="num1" name="num1" placeholder="Ex: 13">
        </p>
        <p>
            <label for="num2"></label>
            <input type="number" id="num2" name="num2" placeholder="Ex: 4">
        </p>
        <p>
            <label for="ope"></label>
            <select name="ope" id="ope">
                <option value=" ">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </p>
        <p>
            <button type="submit">Calculate</button>
        </p>
    </form>
    <style>
        body {
            text-align: center;
            background-color:rgb(124, 121, 121);
        }
        form{
            border: 1px solid #000000;
            background-color: #ffffff;
            width: 300px;
            border-radius: 20px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        select{
            cursor: pointer;
        }
        button{
            background-color: blue;
            color: white;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</body>

</html>