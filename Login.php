
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loco Nutrition</title>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;
        Center}
        
        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 50%;
          padding: 10px 20px;
          margin: 10px 0;
          display: inline-block;
          border: 3px solid #000000;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        button {
          background-color: #999999;
          color: rgb(255, 255, 255);
          padding: 10px 50px;
          margin: 10px 0;
          border: none;
          cursor: pointer;
          width: 50%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 15px 0 5px 0;
          position: relative;
        }
        
        img.avatar {
          width: 20%;
          border-radius: 50%;
        }
        
        .container {
          padding: 16px;
          color: white;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
          color: white
        }

        .psw a{
        color: while;

        }
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
          padding-top: 60px;
          
        }
        
        /* Modal Content/Box */
        .modal-content {
          background-color: #42424277;
          margin: 2% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 60%; /* Could be more 
          or less, depending on screen size */
        }
        
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: white;
          cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 1s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0.3)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
    
  </style>
</head>
<body bgcolor="black">
<center>
      <img src="./assets/img/Space Nutrition.PNG" alt="HTML5 Icon" style="width:400px;height:400px;">
    </center>
<center>

  <!-- Your content goes here -->
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
  <div id="id01" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="./assets/img/Space Nutrition.PNG" alt="Avatar" class="avatar">
      </div>
      <center>
      <div class="container">
        <input type="text" placeholder="Enter Username" name="uname" required>
      <center>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </center>
      <center>
        <button type="submit">Login</button>
        <label>
      </center>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
  </center>
      <div class="container" style="background-color:#20202025">
      <center>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </center>
        <span class="psw">
          <a href="#">Forgot password?</a></span>
          <br><br>
      </div>
    </form>
  </div>
  </center>
  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
  </script>

        <style>
/* Full-width input fields */
        input[type=text], input[type=password] {
          width: 50%;
          padding: 10px 20px;
          margin: 10px 0;
          display: inline-block;
          border: 3px solid #000000;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        button {
          background-color: #999999;
          color: rgb(255, 255, 255);
          padding: 10px 50px;
          margin: 10px 0;
          border: none;
          cursor: pointer;
          width: 50%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 15px 0 5px 0;
          position: relative;
        }
        
        img.avatar {
          width: 20%;
          border-radius: 50%;
        }
        
        .container {
          padding: 16px;
          color: white;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
          color: white
        }

        .psw a{
        color: while;

        }
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
          padding-top: 60px;
          
        }
        
        /* Modal Content/Box */
        .modal-content {
          background-color: #42424277;
          margin: 2% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 60%; /* Could be more 
          or less, depending on screen size */
        }
        
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: white;
          cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 1s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0.3)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }


        <style>
/* Full-width input fields */
        input[type=text], input[type=password] {
          width: 50%;
          padding: 10px 20px;
          margin: 10px 0;
          display: inline-block;
          border: 3px solid #000000;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        button {
          background-color: #999999;
          color: rgb(255, 255, 255);
          padding: 10px 50px;
          margin: 10px 0;
          border: none;
          cursor: pointer;
          width: 50%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 15px 0 5px 0;
          position: relative;
        }
        
        img.avatar {
          width: 20%;
          border-radius: 50%;
        }
        
        .container {
          padding: 16px;
          color: white;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
          color: white
        }

        .psw a{
        color: while;

        }
        
        /* The Modal (background) */
        .modall {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
          padding-top: 60px;
          
        }
        
        /* Modal Content/Box */
        .modall-content {
          background-color: #42424277;
          margin: 2% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 60%; /* Could be more 
          or less, depending on screen size */
        }
        
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: white;
          cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 1s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0.3)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
    
  </style>
</head>
<body bgcolor="black">
<center>
  <!-- Your content goes here -->
  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign in</button>
  <div id="id01" class="modall">
    <form class="modall-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modall">&times;</span>
        <img src="./assets/img/" alt="Avatar" class="avatar">
      </div>
      <center>
      <div class="container">
        <input type="text" placeholder="Enter Username" name="uname" required>
      <center>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </center>
      <center>
        <button type="submit">Login</button>
        <label>
      </center>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
  </center>
      <div class="container" style="background-color:#20202025">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">
          <a href="#">Forgot password?</a></span>
      </div>
    </form>
  </div>
  </center>
  <a href="index.php">Home page</a>
  <script>
    // Get the modal
    var modall = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modall) {
            modall.style.display = "none";  
        }
    }
  </script>
</body>
</html>