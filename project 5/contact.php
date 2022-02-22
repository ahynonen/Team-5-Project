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
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "robot", sans-serif;
  }
  

  header {
    background-color: #e4dfda;
    width: 100%;
    height: 90px;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 10%;
  }
  .logo {
    width: 150px;
  }
  
  .navigation a {
    color: rgb(39, 39, 39);
    text-decoration: none;
    font-size: 1.1em;
    font-weight: 900;
    padding-left: 50px;
  }
  
  .navigation a:hover {
    color: rgb(46, 102, 255);
  }

  h1 {
    background-color: #0d1321; 
    color: #e4dfda;
    font-family: "robot", sans-serif;
    font-size: 3.5em;
    padding: 8px 10px 8px 10px;
    position: absolute;
    left: 730px;
    top: 120px;
}

  .logo2{
    position: absolute;
    left: 220px;
    top: 200px;
    height: 300px;
    width: 300px;
    
  }

 .table{
        border-collapse: separate;
        border-spacing: 0 15px;
        margin:25px 0 0 340px;
      }
      td, th {
        background-color: #0d1321;
        color: #c2dbfe;
        font-family: "robot", sans-serif;
        width: 280px;
        padding: 27px;
        text-align: left;
      }

      th{
          font-size: 1.3em;
      }

      td{
          font-size: 1.1em;
      }
  
      body {
        display: grid;
        height: 100%;
        place-items: center;
        background: #0d1321;
        min-height: 100vh;
      }

      .container {
        max-width: 1100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        padding: 82px;
    }

  footer {
    background-color: #e4dfda;
    width: 100%;
    height: 90px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }
  
  .address {
    right: 300px;
    position: relative;
  }
  .address p {
    font-family: "robot", sans-serif;
    font-size: 1em;
    line-height: 20px;
    color: rgb(26, 21, 63);
  }
  
  .hamk {
    font-size: 30px;
    color: #240c8d;
  }
  
  .social-media {
    left: 300px;
    position: relative;
    padding: 0px;
  }
  
  
  
  .fa-facebook {
    position: relative;
    margin: 0 14px;
    font-size: 30px;
    color: rgb(51, 98, 185);
  }
  
  .fa-facebook :hover{
    color: rgb(255, 24, 24);
  }
  
  .fa-linkedin {
    position: relative;
    margin: 0 14px;
    font-size: 30px;
    color: rgb(0,119,181);
  }
  
  .fa-instagram {
    position: relative;
    margin: 0 14px;
    font-size: 30px;
    color: rgb(221, 42, 123);
  }
  
  .fa-twitter {
    position: relative;
    margin: 0 14px;
    font-size: 30px;
    color: rgb(8,160,233);
  }
  
  .fa-youtube {
    position: relative;
    margin: 0 14px;
    font-size: 30px;
    color: rgb(230,33,23);
  }
    </style>
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
