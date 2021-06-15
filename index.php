<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		body{
			background-image: url("https://t4.ftcdn.net/jpg/04/32/15/19/360_F_432151989_k6qhjNNxbbH1mTL3ayENQuTLFbkB31be.jpg");
			background-repeat: no-repeat;
  			background-size: 1300px 600px;
        margin: 0;
		}
    	h1{
      font-size: 100px;
      text-align: center;
      color: white;
      -webkit-text-stroke-width: 4px;
      -webkit-text-stroke-color: #FF0000;
      
    }
    	button{
      font-size: 30px;
      padding: 25px 50px;
      justify-content: center;
      background-color: #0000e6;
      color:white;
      text-decoration: none;


    }
    	h5{
      text-align: center;
      font-size: 35px;
      color: #00ff00;
      text-shadow: 1px 1px #3b5278;


    }
    	div{
      
      margin-left: auto;
      margin-right: auto;

    }
    .container{
    	padding-left: 625px;

    }
    h3{
    	text-align: center;
    	font-size: 20px;
    	color: #ff00ff;
      text-shadow: 1px 1px #3b5278;

    }
    a{
      color: white;
    }
    button:hover{
      background-color: black;
    }

  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	
<?php include 'connection.php' ?>


  <div id="navbar">
  <a class="hi" href="#home">HOME</a>
  <a class="hello" href="table.php">User List</a>
  <a class="bye" href="transaction.php">Transaction History</a>
  </div>


	 <h1>Basic Banking System</h1>
  <h5><i>Money transfer got EASY</i></h5>
  <h3>TRANSFER YOUR MONEY WITH EASE</h3>
  
  <div class="container">
    <button><a href="money.php">Send Money</a></button>
    <!-- <button id="user"><a href="table.php">View user list</button>
      <button><a href="transaction.php">Transaction History</a></button> -->
  </div>
  



</body>

	

</body>
</html>