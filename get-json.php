<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP & JSON File</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="main">
        <div id="header">
            <h1>Read Data from database with JSON</h1>
        </div>
        <div id="load-data">
            <table id="load-table" border="1" cellpadding="10px" width="100%">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Country</th>
                </tr>
            </table>
        </div>


    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $.getJSON(
                "json-load.php",
                function(data) {
                    $.each(data, function(key, value) {
                        $("#load-table").append("<tr><td>" + value.id + "</td><td>" + value.name + "</td><td>" + value.age + "</td><td>" + value.gender + "</td><td>" + value.country + "</td></tr>");
                    });
                }
            );
        });
    </script>
</body>

</html>