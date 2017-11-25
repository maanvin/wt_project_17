<?php
	session_start();
	$x=$_SESSION['name'];
	
	$servername="localhost";
	$username="root";
	$password="abc";
	$dbname="wtproject";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	
	$a1=$_POST["Q1"];
	$a2=$_POST["Q2"];
	$a3=$_POST["Q3"];
	$a4=$_POST["Q4"];
	$a5=$_POST["Q5"];

	$score=0;
	$t=$_SESSION['username'];
	$query="SELECT ll FROM qanswers";
	$res=mysqli_query($conn,$query);
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a1)
	{
		$score++;
	}
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a2) 
	{
		$score++;
	}
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a3) 
	{
		$score++;
	}
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a4) 
	{
		$score++;
	}
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a5)
	{
		$score++;
	}
  if($score>3)
    $badge3=1;
  else
    $badge3=0;
  $q1 = "insert into user_details (ll_sc,badge3) values ('$score','$badge3') where username='$t'";
  $rec = mysqli_query($conn,$q1);

?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="menu.css">

		<style type="text/css">
			body{font-family:"Raleway";background-color: black;  }
			div{display: inline-block;}
			p{position: absolute; top:200px;left:500px; font-size: 70px;color:#21aec6; }
			#d{position: absolute; top:350px; left:650px; font-size:70px;color:#21aec6; }
			#out{position: absolute;top:350px;left:700px; font-size:70px;color:#21aec6; }
			#score{position: absolute;top:350px;left:590px; font-size:70px;color:#21aec6; }
			button{height: 50px; background-color: #21aec6; font-size:15px }
		</style>
	</head>
	<body>


		<div class="container">
      <table style="width: 100%" id="containertable">
        <tr style="margin: 0px; padding: 0px;">
           <td style="margin: 0px; padding: 0px;">
              <div class="logo"><small><small><small><span class="rainbow">Logo</span></small></small></small></div>
            </td>
            <td style="margin: 0px; padding: 0px;"><button class="button" style="margin: 0px;"><i class="material-icons">home</i><span style="margin: 0px;">Home </span></button>
            </td>
            
            
            <td style="margin: 0px; padding: 0px;"><button class="button"><i class="material-icons">bookmark_border</i><span>My Profile</span></button>
            </td>
            <td style="margin: 0px; padding: 0px;"><button class="button" id="menu1"><i class="material-icons" id="topii">menu</i><span id="topi">Data Structures</span></button>
            </td>
            <td style="margin: 0px; padding: 0px;"><button class="button" style="margin: 0px;"><i class="material-icons">call</i><span>About</span></button>
            </td>
            
            <td style="padding: 0px;"><button class="button"><i class="material-icons">account_circle</i><span id="pro" >Profile</span></button>
            </td>
        </tr>
    </table>
    <div style="padding: 0px; width: 100px; position: absolute; right: -30px; top: 7px;opacity: 0; z-index: -1">
      <div class="profile"><img src="pic11.jpg" style="width: 50px; height: 50px; border-radius: 60%;">
      </div>
    </div>
    </div>
    <div class="drop" id="menulist1" style="position: absolute; width: 220px; top: -150px; left: 50%">
      <table  style="font-family: Segoe UI">
        <tr>
          <td><a href="ll.php">Linked Lists</a></td>
        </tr>
        <tr>
          <td><a href="stack.php">Stacks</a></td>
        </tr>
        <tr>
          <td style="border: none;"><a href="q.php">Queues</a></td>
        </tr>
      </table>
    </div>

    <div class="drop" id="signin" style="position: absolute; width: 220px;height: 200px; top: -150px; right: 1%">
      <form action="post" style="padding: 20px;position: relative;top: 30px">

        <input type="text" name="uid" style="background-color: white;padding: 8px ; border-radius: 50px; width:90%;" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password" style="background-color: white;padding: 8px ; border-radius: 50px; width:90%; position: relative; top: 20px">
        <input type="submit" value="Sign In" name="submit" style="position: relative; top: 40px; background-color: #2196F3; border-radius: 20px; border: none; width: 70px; padding: 5px; color: white"></form>
        <button style="position: relative; top: 25px; left: 130px; border: none; border-radius: 20px; background-color: #2196F3; color: white; padding: 5px; width: 70px">Sign Up</button><button style="background-color: #303030; color: white; border: none; position: absolute; top: 165px; left:100px" onclick="signinup()">X</button></div>

      <div style="position: absolute; bottom: 0px; left: 20px; width: 150px;" id="floatlist">
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l1"><i class="material-icons">fiber_manual_record</i><a href="code+ll.php"> Code</a></div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l2"><i class="material-icons">fiber_manual_record</i><a href="llquiz.php"> Quiz</a></div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l3"><i class="material-icons">fiber_manual_record</i> Forums</div>
        <div class="floater" style="position: absolute; bottom: 0px; opacity: 0; z-index: -1;" id="l4"><i class="material-icons">fiber_manual_record</i><a href="ll.php">Visualization</a></div>
        <div class="floater"  id="floatbutton" style="width: 20px; color: white; z-index: 2;" onclick="addfloatmenu()"><i class="material-icons" onclick="addfloatmenu()">keyboard_arrow_up</i></div>
      </div>


		<p><strong>You Scored:</strong></p>
		<div id="score"></div>
		<div id="d">/</div>
		<div id="out">5</div>
		<button style="position: absolute; top: 600px;left:500px;"><a href="llquiz.php" style="text-decoration:none;">Take the Test Again?</a></button>
		<a href="ll.php"><button style="position: absolute; top: 600px;left:700px">Back to Linked Lists</button></a>
		<script type="text/javascript">
			var x="<?php echo $score?>";
			x=parseInt(x);
			y=document.querySelector("#score");
			y.innerHTML=x;
    var menu1=0;
    
    addmenu=function()
    {
      var e=document.querySelector("#menulist1");
      e.style.top="65px";
      var menuh=document.querySelector("#menu1");
      menuh.style.backgroundColor="#37474F";
    }
    removemenu=function()
    {
      var e=document.querySelector("#menulist1");
      e.style.top="-120px";
      var menuh=document.querySelector("#menu1");
      menuh.style.backgroundColor="#303030";
    }
    putimage=function()
    {

      var name="<?php echo $_SESSION['name'];?>";
      zd=document.querySelector("#pro");
      zd.textContent=name;
    }
    addfloatmenu=function()
    {
      var l1=document.querySelector("#l1");
      var l2=document.querySelector("#l2");
      var l3=document.querySelector("#l3");
      var l4=document.querySelector("#l4");
      l1.style.opacity=1;
      l2.style.opacity=1;
      l3.style.opacity=1;
      l4.style.opacity=1;
      l1.style.bottom="50px";
      l2.style.bottom="100px";
      l3.style.bottom="150px";
      l4.style.bottom="200px";
      var but=document.querySelector("#floatbutton");
      but.innerHTML='<i class="material-icons">keyboard_arrow_down</i>'
     
      // els.style.zIndex=10;
    }
    removelist=function()
    {    
        var els=document.querySelector("#floatlist");
        if (!(document.getElementById('floatlist').contains(event.target)))
        {
        // Clicked outside the box
        var l1=document.querySelector("#l1");
        var l2=document.querySelector("#l2");
        var l3=document.querySelector("#l3");
        var l4=document.querySelector("#l4");
        l1.style.opacity=0;
        l2.style.opacity=0;
        l3.style.opacity=0;
        l4.style.opacity=0;
        l1.style.bottom="-10px";
        l2.style.bottom="-10px";
        l3.style.bottom="-10px";
        l4.style.bottom="-10px";
        var but=document.querySelector("#floatbutton");
        but.innerHTML='<i class="material-icons">keyboard_arrow_up</i>'
        }
    }
    var menuh=document.querySelector("#menu1");
    menuh.addEventListener("mouseover",addmenu,false);
    var menu=document.querySelector("#menulist1");
    menu.addEventListener("mouseleave",removemenu,false);
    window.addEventListener("click",removelist,false);
    var afm=document.querySelector("#floatbutton");
    afm.addEventListener("click",addfloatmenu,false);
    putimage();
    

		</script>
	</body>

</html>


















