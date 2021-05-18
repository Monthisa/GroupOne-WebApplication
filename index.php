<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book Store-Home</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">

	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <nav id="navbar">
    <ul>
      <li >
				<a href="index.php" class="active">Home</a>
			</li>
      <li>
				<a href="aboutUs.html">About us</a>
			</li>
      <!--<li>
				<a href="home.php">Homephp</a>
			</li>-->
      <li style="float:right;">
				<a href="ViewCart.php" >View Cart </a>
				<!--go to php form-->
			</li>
      <!--<li style="float:right;">
				<a href="Joinus.php"  >Join us</a>
			</li>
      <li style="float:right;">
				<a href="Signin.php" >Sign in</a>
				<!--go to php form-->
			</li>
		</ul>
    
	</nav>
</head>
<!-- home page shoe best sller and new release-->

<body>
	<div class="container-fluid header">
    <br>
		<!--<form class="form-inline" action="/action_page.php">
	  <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit" onclick="filterSelection('all')">Search</button>
    </form><br>-->
    <h1>Welcome to BOOK STORE</h1>
    <br><br>
  </div>
  <!--content-->
  <div class="container-fluid">
    <div id="templatemo_content">   
      <div id="templatemo_content_left">
        <div class="templatemo_content_left_section">
      <h3>Categories</h3>
      <ul style="list-style-type:none; margin-left:10px; padding:0px; font-family: 'Mali', cursive;">
        <li><a href="#" onclick="filterSelection('all')">All</a></li>
        <li><a href="#" onclick="filterSelection('cartoon')">การ์ตูน</a></li>
        <li><a href="#" onclick="filterSelection('novel')">นิยายแปล</a></li>
        <li><a href="#" onclick="filterSelection('business')">บริหารธุรกิจ</a></li>
        <li><a href="#" onclick="filterSelection('homengarden')">บ้านและสวน</a></li>
        <li><a href="#" onclick="filterSelection('exam')">หนังสือเตรียมสอบ</a></li>
      </ul>
    </div>
  </div> <!--left side-->
        <div id="templatemo_content_right">

</head>
<body>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column cartoon">
    <div class="content">
      <img src="cartoon.jpg" alt="cartoon" style="width:60%" class="center"><br>
      <a href="cartoon.php"><h4 class="homebook">มหาศึกคนชนเทพ เล่ม 1 (Mg)</h4></a>
      <span><h5 class="homebook">(โดย อาจิจิกะ)</h5></span>
      <p>ราคา : 145.00 บาท<br>
      ราคาส่วนลด : 123.25 บาท</p>
    </div>
  </div>

  <div class="column novel">
    <div class="content">
      <img src="novel.jpg" alt="novel" style="width:60%" class="center"><br>
      <a href="novel.php" ><h4 class="homebook">ดอกสาลี่เคียงบัลลังก์ เล่ม 1</h4></a>
      <span><h5 class="homebook">(โดย เทียนฉิน)</h5></span>
      <p>ราคา : 449.00 บาท<br>
      ราคาส่วนลด : 359.20 บาท</p>
    </div>
  </div>
  
  <div class="column cartoon">
    <div class="content">
      <img src="husband.jpg" alt="husband" style="width:60%" class="center"><br>
      <a href="cartoon2.php"><h4 class="homebook">พ่อบ้านสุดเก๋า เล่ม 1 (ฉบับการ์ตูน)</h4></a>
      <span><h5 class="homebook">(โดย Oono Kousuke)</h5></span>
      <p>ราคา : 60.00 บาท<br>
      ราคาส่วนลด : 54.00 บาท</p>
    </div>
  </div>

  <div class="column business">
    <div class="content">
      <img src="ai.jpg" alt="AI" style="width:60%" class="center"><br>
      <a href="ai.php" ><h4 class="homebook">การปฏิวัติคอนเทนต์ในยุคแห่ง AI</h4></a>
      <span><h5 class="homebook">(โดย Cho Chan-soo)</h5></span>
      <p>ราคา : 275.00 บาท<br>
      ราคาส่วนลด : 233.75 บาท</p>
    </div>
  </div>
  <div class="column homengarden">
    <div class="content">
      <img src="hng.jpg" alt="hnm" style="width:62.5%" class="center"><br>
      <a href="homegarden.php" ><h4 class="homebook">Unique Homes</h4></a>
      <span><h5 class="homebook">(โดย ภัทริน จิตรกร)</h5></span>
      <p>ราคา : 395.00 บาท<br>
      ราคาส่วนลด : 197.50 บาท </p>
    </div>
  </div>
  <div class="column exam">
    <div class="content">
      <img src="exambook.jpg" alt="exambook" style="width:55%" class="center"><br>
      <a href="exam.php" ><h4 class="homebook">แนวข้อสอบ PAT1 ความถนัดทางคณิตศาสตร์</h4></a>
      <span><h5 class="homebook">(โดย รัชพล ธนาภากรรัตนกุล)</h5></span>
      <p>ราคา : 200.00 บาท<br>
      ราคาส่วนลด : 170.00 บาท</p>
    </div>
  </div>
<!-- END GRID -->
</div>
</div>
<script src="script.js">
</script>


<div id="templatemo_footer">
  <div class="jumbotron text-center footer" style="margin-bottom:0; background-color: #333; color: white;">
    <h2>Contact Us</h2><br>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg><strong> Address:</strong> จุฬาลงกรณ์มหาวิทยาลัย 254 ถนนพระรามที่ ๔ แขวง ปทุมวัน เขตปทุมวัน กรุงเทพมหานคร 10330</p>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg> <strong> Tel:</strong> 094-0454556</p>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg><b> E-mail: </b>monthisa.wo61@cbs.chula.ac.th
  </div>
</div>
</body>
</html>
