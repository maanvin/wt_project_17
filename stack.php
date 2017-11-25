<?php
	session_start();
	$x=$_SESSION['name'];
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stack.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			.operations
			{	
				position: relative;
				display: inline-block;
				background-color: #303030;
				border-bottom: 6px solid #F57C00;
				height: 40px;
				width:160px;
				text-align: center;
				border-radius: 10px;
			}
			.operations1
			{	
				position: relative;
				bottom: 5px;
				display: inline-block;
				background-color: #303030;
				border-bottom: 6px solid #F57C00;
				height: 40px;
				width:160px;
				text-align: center;
				transition: transform 2s;	
				border-radius: 10px;
			}
			.operations1:hover
			{
				opacity: 0.8;
				transform: translateY(-90px);
			}

			.operations p
			{
				position: relative;
				bottom: 7px;
				font-size: 18px;
			}

			.m
			{	
				display: none;
				height: 0px;
				width: 160px;
				background-color: #4DD0E1;
				transition:2s;
				position: relative;
				bottom:3px;
				border-radius: 10px;
			}

			.operations:hover 
			{
				opacity: 0.8;
			}

			.operations1:hover .m
			{
				display: block;
				height: 88px;
				background-color: #303030;
			}

			.cont
			{
				height: 550px;
				width: 1000px;
				position: fixed;
				top: 100px;
				left: 200px;
				background-color: #303030
			}
			.el 
			{
				background-color: #4DD0E1;
				width:200px;
				height: 100px;
				margin: 10px;
				border-radius: 6px;
				position: absolute;
				left: 100px; 
				text-align: center;
				vertical-align: center;
				transition: 0.4s ease-in-out;
				animation: scaleto 2s ease;
				animation-play-state:paused;
			}	

			@keyframes scaleto
			{
				0% {transform: scale(1,1)}
				50% {transform: scale(1.5,1.5)}
				100% {transform: scale(1,1)}
			}
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
            
            
            <td style="margin: 0px; padding: 0px;"><a href="profile.php"><button class="button"><i class="material-icons">bookmark_border</i><span>My Profile</span></button></a>
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
          <td style="border: none;"><a href="queue.php">Queues</a></td>
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
       <div class="floater" style="position: absolute; display: none; opacity: 0;" id="l1"><i class="material-icons">fiber_manual_record</i> <a href="code_stack.php"> Code</a></div>
        <div class="floater" style="position: absolute; display: none; opacity: 0;" id="l2"><i class="material-icons">fiber_manual_record</i><a href="stacksquiz.php"> Quiz</a></div>
        <div class="floater" style="position: absolute; display: none; opacity: 0;" id="l3"><i class="material-icons">fiber_manual_record</i> Forums</div>
        <div class="floater" style="position: absolute; display: none; opacity: 0;" id="l4"><i class="material-icons">fiber_manual_record</i><a href="stack.php"> Visualization</a></div>
        <div class="floater"  id="floatbutton" style="width: 20px; color: white; z-index: 2;" onclick="addfloatmenu()"><i class="material-icons" onclick="addfloatmenu()">keyboard_arrow_up</i></div>
      </div>

		
		<div  id="bottomnav" style="position: fixed; bottom: 10px; left: 320px; overflow: none">
			<div class="operations1"><p style="color: white">PUSH</p><div class="m"><input type="text" name="n" id="pushinp" style="position: absolute; bottom: 30px; right:17px"></div></div>
			<div class="operations" id="pop"><p style="color: white">POP</p></div>
			<div class="operations" id="peek"><p style="color: white">PEEK</p></div>
			<div class="operations" id="clear"><p style="color: white">CLEAR</p></div>
		</div>
		<div class="cont" style="color: white">
			<pre style="font-size: 40px">       STACK</pre>
		</div>
	</div>
	
		<script type="text/javascript">

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
      l1.style.display="block"
      l2.style.display="block"
      l3.style.display="block"
      l4.style.display="block"
      l2.style.opacity=1;
      l3.style.opacity=1;
      l4.style.opacity=1;
      l1.style.bottom="50px";
      l2.style.bottom="100px";
      l3.style.bottom="150px";
      l4.style.bottom="200px";
      var but=document.querySelector("#floatbutton");
      but.innerHTML='<i class="material-icons">keyboard_arrow_down</i>'
    }
    removelist=function()
    {    
        var els=document.querySelector("#floatlist");
        if (!(document.getElementById('floatlist').contains(event.target)))
        {
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
			var node={}

			countnode=0
			pos=30
			countpop=0
			counttot=0
			add=2000
			node.add=function(event)
			{
				if(event.keyCode==13)
				{
					val=inp.value
					inp.value=null
					if(parseInt(val)==NaN)
						inc=1
					else
						inc=4
					if(countpop+countnode==4)
					{
						alert("Clear Screen and Try Again")
					}
					else if(countnode>=4)
					{
						alert("Try Deleting a Node")
					}
					else
					{
						countnode++
						counttot++
						x=document.createElement("div")
						x.setAttribute("class","el")
						x.innerHTML="<br><br>Element: "+val+"<br><br>Address: "+add;
						add+=inc;
						switch(countnode)
						{
							case 1:
								x.style.bottom="30px"
								break
							case 2:
								x.style.bottom="140px"
								break
							case 3:
								x.style.bottom="250px"
								break
							case 4:
								x.style.bottom="360px"
								break;
						}
						dive=document.querySelector(".cont")
						dive.appendChild(x)	
					}
				}	
			}
			
			node.delete=function()
			{
				if(countnode==0)
					alert("Stack is Empty! Try adding a node")
				else
				{	
					
					countpop++
					dive=document.querySelector(".cont")
					x=dive.children
					x[counttot-countpop+1].style.left="500px"
					x[counttot-countpop+1].style.bottom=pos+"px"
					pos+=110
					countnode--
				}
			}

			node.clear= function()
			{
				dive=document.querySelector(".cont")
				while(dive.firstChild)
					dive.removeChild(dive.firstChild)
				countnode=0
				countpop=0
				counttot=0;
				pos=30
				add=2000
				x=document.createElement("pre");
				x.style.fontSize="40px";
				x.textContent="STACK";
				dive.appendChild(x);
				document.location.reload();

			}

			node.enlarge=function()
			{
				if(countnode==0)
					return;
				dive=document.querySelector(".cont")
				x=dive.children[countnode]
				x.style.animationPlayState="running"				
			}

			
			var del=document.querySelector("#pop")
			del.addEventListener("click",node.delete,false)

			var z=document.querySelector("#clear")
			z.addEventListener("click",node.clear,false)
			
			var inp=document.querySelector("#pushinp")
			inp.addEventListener("keypress",node.add,false)

			var peek=document.querySelector("#peek")	
			peek.addEventListener("click",node.enlarge,true)	

			

		</script>
	</body>
</html>