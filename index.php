<html>
<head>
<title> Details form </title>
<link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container">
  <div>
  <center>
    <h1>Your Details</h1>
    <p>Tell us about yourself</p>
  </center>
  </div>
  <div class="row">
  <div class="column">
      <img src="moolya-logo-01.png" style="width:100%">
    </div>
    <div class="column">
      <form action="mongodb.php" method="post" autocomplete="off">
        <label for="fname">FirstName</label>
        <input type="text" id="fname" name="FirstName" placeholder="Your name.." required >
        <label for="lname">LastName</label>
        <input type="text" id="lname" name="LastName" placeholder="Your last name.." required>
        <label for="mid">Moolya I</label>
        <input type="string" id="mid" name="MoolyaId" placeholder="MSTPL..." required><br/>
        <label for="education">Education</label>
        <select id="education" name="Education" required>
          <option value="Graduate">Graduate</option>
          <option value="Post Graduate">Post Graduate</option>
        </select>
        <form action="nextpage.php" method="POST">
        <input type="submit" value="Submit">
          </form>
	<div>
<center>
<h3>Search Details</h3>
<form name="Searching" method="post" action="search.php" autocomplete="off">
<input type="text" name="search" placeholder="enter name"/>
<button>search</button>
</center>
</div>
</form>
    </div>
  </div>
</div>
</body>
</html>