<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.html');
  exit;
}
?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title> Home Page </title>
<link href='https://fonts.googleapis.com/css?family=Englebert ' rel='stylesheet'>

<style>
  * {box-sizing: border-box;}
  .parallax {
  /* The image used */
  background-image: url("IT.jpg");

  /* Set a specific height */
  height: 700px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  
  .text
  {
  padding: 70px 0;
  border: 0px solid green;
  text-align: center;
  color:white;
  } 




body {
background-color: #d0fefe;
  font-family: 'Englebert';font-size: 22px; color:white; 
    background-image: url("home.jpg");
  }
button {
  display: inline-block;
  border-radius: 4px;
  background-color: #FAEBD7;
  border: none;
  color: #000000;
  text-align: center;
  font-size: 12px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin: 0;
  position: absolute;
  top: 330%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

button:hover span {
  padding-right: 25px;
}

button:hover span:after {
  opacity: 1;
  right: 0;
}
.topnav {
  overflow: hidden;
  background-color: #333;
  height: 75px;
}
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.choose {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 500px; 
}
.choose:hover
{
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.choose2 {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 500px; 
}

/* Clear floats after the columns */
.row2:after {
  content: "";
  display: table;
  clear: both;
}
.choose2:hover
{
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
}
#more {display: none;}
/*.faq {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}*/
footer {
color: white;
position: fixed;
width: 100%;
bottom: 0;
margin-left: auto;
margin-right: auto;
font-size: 30px;
height: 100px;
padding: 20px;
background-color: rgb(9, 141, 101);
text-align: center;
}
</style>
</head>
<body>
<!-- <header> -->
  
<header>
<div class="topnav">
  <image src="logo.png" class="img"></image> 
  <a href="home.php"> Home </a>
  <a href="courses.html">Courses</a>
  <a href="contact.html">Contact</a>
  <a href="logout.php">Logout</a>
  <a href="profile.php">My Profile </a>
  <a href="staff.html"> Our Staff </a>
</div>
</header>
<!-- /*<div class="topright">
<a href="about.html"> <button class="button" type="submit"> About </button></a> 
<a href="contact.html"> <button class="button" type="submit"> Contact Us </button></a>
</div>
</header>*/ -->
<!-- <div class="blog">
  <div class="post">
<div class="blogHeader"> -->
<div class="textintro">
<h2 align="center"> Welcome! </h2>
<h2 align="center"> Need help to Build your Career?</h2>
<h2 align="center"><i> You've come to the right place! </i></h2>

</div>
<div class="parallax">
<div class="text">
<h4 align="center"> We offer Consultancy is Every Major Academic Fields. </h4>

<h5 align="center">We offer Career Consultancy from Engineers to Students to Aspirants.<br>
We offer customized career counselling and guidance services to students based on their specific needs.<br> Ranging from technology enabled information access only, to human-led professional career counselling, our offerings <br> include college application and scholarship guidance as well </h5>
</div>
</div>



  <h3 align="center"> Why Choose Us? </h3>

<div class="row">
  <div class="choose">
    <h2>Specialized Training</h2>
    <p>After joining us you will be guided by the</p><p> best of the best in your respective field.</p>
  </div>
  <div class="choose">
    <h2>Advanced Assessment & Best-Fit Matches</h2>
    <p>Gain a detailed understanding of yourself</p><p> to get best-fit career or stream recommendations,</p> <p>with personalised development plans to help</p><p> you improve. Our advanced assessment, developed </p> <p>through extensive research by India’s leading</p><p> psychometricians, ensures the accuracy and </p><p>validity of results.</p>
  </div>
  <div class="choose">
    <h2>Interactive Stream & Career Activities</h2>
    <p>Evaluate and ascertain your suitability for </p> <p>suggested streams/careers with interactive </p> <p>activities. Zero-in on your perfect stream or </p> <p> career by matching specific insights about </p> <p> your daily schedule, work style, motivators,</p> <p> academics, and more, with your best-fit matches.</p>
  </div>
</div>

<br>
<br>

<div class="row2">
  <div class="choose2">
    <h2>Class 9 & 10 Students</h2>
    <p>We help students from class 9th & 10th to select</p><p> the stream and subject that suits their aptitude</p><p> & personality. Our career counselling services</p> <p>help you explore opportunities beyond </p>  <p>conventional horizons.</p>
  </div>
  <div class="choose2">
    <h2>Class 11 & 12 Students</h2>
    <p>Our extensive career directory and trained </p> <p> counsellors will make sure that you are </p> <p> guided to the right course & college. Our program </p> <p> includes guidance on college applications </p>  <p> process & scholarships available for deserving </p> <p>students.</p>
  </div>
  <div class="choose2">
    <h2>College / Undergrad Students</h2>
    <p>Are you stuck in a course and college that </p> <p> you dislike? We come to the rescue with our </p> <p> career counselor clearing all your confusions</p> <p> and ensuring that you know how to make that </p> <p> vital switch which leads you to a fulfilling career </p> <p> ahead.</p>
  </div>
</div>
<br>
<br>

  <h3 align="center"> Some commonly asked Questions </h3>
  
  <div id="faq">
  <h4> 1. "Can I set up an appointment to discuss my summer internship search?" </h4>
  
  <h4> While your career counselor has a wealth of resources and advice and is there to help you out, you’re the one who’s really in the driver’s seat. And she can be most effective when you <span id="dots">.....</span> <span id="more"> share what you’re specifically looking to get out of the meeting. Do you need help finding a job in a specific geographic location or industry? Wondering what history majors do after college? Need to fine-tune your resume? Ask that from the get-go—in your email when you set up the appointment, not once you get there.
    <br>
    <br>
 2."What’s the best job search strategy for me?"

 Every spring, we work with students on identifying, applying for, and securing summer internships and jobs. And in the process, we’ve seen what strategies have (and haven’t) been effective in a variety of positions and industries. And it’s not the same everywhere—getting a job in fashion or publishing requires very different tactics than getting one in finance.

So enlist your counselor’s experience in strategizing your approach. Ask questions like: How should I allocate my search time between networking, informational interviews, and applying for jobs? What strategies have been effective for other people applying for these types of positions? How you should approach the job search will vary based on your role, industry, and location, but your career counselor likely has some advice that will help you out. </span>
</h4>
<button onclick="myFunction()" id="myBtn">Read more</button>
  </div> 
</div>




<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>
