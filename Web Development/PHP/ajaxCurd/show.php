<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Show data using ajax.</h1>
    Fname:<input type="text" name="firstnamee" id="firstn">
    Lname:<input type="text" name="lastnamee" id="lastn">
    <input type="submit" value="insert" id="send">

<div class="box">
    
</div>

    <table border="1" cellpadding='10px' cellspacing='0' id="mytable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>

            </tr>

            <tbody>
                <tr>
                    <td>01</td>
                    <td>jamshaid</td>
                </tr>
            </tbody>
        </thead>
    </table>


    <!-- button work start here -->
     <br><br>
<button id="mybtn">Load Data</button>

    <!-- button work end here -->

    <script src="js.js"></script>
     
</body>
</html>