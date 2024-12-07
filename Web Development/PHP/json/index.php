<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display JSON Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            text-align: left;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<h1 style="text-align: center;">Display Data from JSON</h1>

<div id="data-table"></div> <!-- This is where we will display the data -->

<script>
    // Fetch JSON data from encode.php
    $.ajax({
        url: "encode.php",
        type: "POST",
        dataType: "JSON",
        success: function(data) {
            console.log(data); // Log the fetched data

            // Create a table to display the data
            let table = `<table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>`;

            // Add a row to the table with the data
            table += `<tr>
                        <td>${data[0][0]}</td>
                        <td>${data[1][1]}</td>
                        <td>${data[2][2]}</td>
                        <td>${data[3][3]}</td>
                      </tr>`;

            table += `</tbody></table>`;

            // Append the table to the div with id="data-table"
            $('#data-table').html(table);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error("Error: " + textStatus, errorThrown);
            console.log("Response:", jqXHR.responseText);
        }
    });
</script>

</body>
</html>
