<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <title>ContactPage</title>

  </head>
  <body>
    <!--nav-bar-->
    <?php
include_once 'Header.php';
?>

   
    <h1>CONTACT </h1>

    <div class="container">
        <a href=""><img class="logo2" src= "images/AMW-2.svg" alt="logo2" /></a> 

    <div class = "table">
        <table>
            <tr>
              <th>Mehdi Naciri</th>
              <td>mehdi@hamk.fi<br>
                +35800000000
              </td>
            </tr>
            <tr>
                <th>Anika Hynönen</th>
                <td>anika@hamk.fi<br>
                    +35800000000
                  </td>
              </tr>
              <tr>
                <th>Wafa Faquir</th>
                <td>wafa@hamk.fi<br>
                    +35800000000
                  </td>
              </tr>
              <tr>
                <th>Project Supervisor</th>
                <td>tommi@hamk.fi<br>
                    +35800000000
                  </td>
              </tr>
          </table>
      </div>
    </div>

    <!--footer-->
    <?php
	include 'Footer.php';
	?>
  </body>
</html>
