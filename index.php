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
      <h1>Read Data from JSON File</h1>
    </div>
    <div id="load-data">
    </div>

    <!-- <div id="table-data">
      <form id="submit_form" method="post" action="save-form.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Name</label></td>
            <td><input type="text" name="fullname" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Age</label></td>
            <td><input type="number" name="age" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>City</label></td>
            <td>
              <input type="text" name="city" autocomplete="off" />   
            </td>
          </tr>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>
        </table>
      </form>  
    </div> -->
    
  </div>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script type="text/javascript" src="js/jQuery.js"></script>
  <script>
    $(document).ready(function() {
      $.ajax({
        url: "json/my.json",
        type: "GET",
        dataType :"JSON",
        success: function(data) {
          $.each(data, function(key, value) {
            $("#load-data").append(value.id + " " + value.title + "<br>");
          });
        }
      });
    });
  </script>
</body>
</html>