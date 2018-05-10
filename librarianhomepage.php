<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}


body {
  /* background-image: url("480864928.jpg"); */


  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: black;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome to The 4 Rogues Library</h1>
</div>
<div class="topnav">
  <a href="#">Log Out</a>
  <a href="BookSearchForm.php">Search Catalogue</a>
  <a href="AddBookForm.php">Add New Book</a>
  <a href="CreateAccount.html">Register New Borrower</a>
  <a href="outStandingCharges.php">Pay Book Fine</a>
</div>
<div class="gallery">
    <img href="480864928.jpg" src="480864928.jpg" alt="Library" width= "600" height= "400"
</div>
<br>
<br>


</body>
</html>
