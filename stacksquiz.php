<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="final.css">
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<style type="text/css">
			.card{border-radius: 20px;}
		</style>
		
	</head>

	<body style="background-color: black">



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
        <div class="floater" style="position: absolute; display:none;opacity: 0; " id="l1"><i class="material-icons">fiber_manual_record</i> <a href="code_stack.php">Code</a></div>
        <div class="floater" style="position: absolute;display:none; opacity: 0; " id="l2"><i class="material-icons">fiber_manual_record</i><a href="stacksquiz.php">Quiz</a></div>
        <div class="floater" style="position: absolute;display:none; opacity: 0; " id="l3"><i class="material-icons">fiber_manual_record</i> Forums</div>
        <div class="floater" style="position: absolute;display:none; opacity: 0; " id="l4"><i class="material-icons">fiber_manual_record</i><a href="stack.php">Visualization</a></div>
        <div class="floater"  id="floatbutton" style="width: 20px; color: white; z-index: 2;" onclick="addfloatmenu()"><i class="material-icons" onclick="addfloatmenu()">keyboard_arrow_up</i></div>
      </div>
		<form action="scorecheckstack.php" id="sub" method="post">
		

		<p style="color: #8fdeef;font-size: 25px; position: absolute;top:90px;left:55px" id="no">QUESTION 1 of 5</p>
		<div id="base" class="card" style="background-color: black; height: 400px">
			<pre style="position: absolute;top: 20px;left: 100px;color:#00bfff;font-size: 50px;">YOU'RE ALL DONE!</pre>
			<button type="submit" style="height:200px; width: 300px; position: absolute;top:150px; left: 160px;background-color: black; color:#00bfff; font-size:40px; border-color:#00bfff; border-style: dashed; ">Score My Test!</button>
		</div>


		<div id="card1" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	5. To evaluate an expression without any embedded function calls
				</pre>
			</div>
			
			<table class="ans" style="top:150px">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q5" value="a">One stack is enough</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q5" value="b">Two are required</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q5" value="c">As many stacks as the height of the expression tree are needed</td></tr>
			</table><br>
			
		</div>
		<div id="card2" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	4. Assume that the operators +, -, × are left associative
	   and ^ is right associative.

	   The order of precedence (from highest to lowest) is ^, x , +, -. 

	   The postfix expression corresponding to the infix expression-
	   
	   a + b × c - d ^ e ^ f is:
				</pre>
			</div>
				
			<table style="top:250px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q4" value="a">abc × + def ^ ^ -</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q4" value="b">abc × + de ^ f ^ -</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q4" value="c">- + a × bc ^ ^ def</td></tr>
			</table><br>
		</div>
		<div id="card3" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	3.The following postfix expression with single digit operands is 
	  evaluated using a stack:

	  8 2 3 ^ / 2 3 * + 5 1 * -

	  Note that ^ is the exponentiation operator. 

	  The top two elements of the stack after the first * is evaluated are:

				</pre>
			</div>
			
			<table style="top:270px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q3" value="a">6,1</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q3" value="b">5,7</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q3" value="c">3,2</td></tr>
			</table><br>
			
		</div>
		<div id="card4" class="card">
		<div class="question" style="background-color: #ccf2ff">
			<pre>
	2. Which of the following is true about linked list 

	   implementation of stack?
			</pre>
		</div>
		
		<table class="ans">
			<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q2" value="a">In push operation, if new nodes are inserted at the beginning of linked list, then in pop operation, nodes must be removed from end.</td></tr>
			<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q2" value="b">	In push operation, if new nodes are inserted at the end, then in pop operation, nodes must be removed from the beginning.</td></tr>
			<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q2" value="c">None of the Above</td></tr>
		</table><br>
			
		</div>
		<div id="card5" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	1. True or False?

	   Stacks follow the first in first out principle
				</pre>
			</div>
			
			<table class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q1" value="a">True</td></tr>
				<tr style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q1" value="b">False</td></tr>
			</table><br>

		</div>
		
		</form>
			<button type="button" id="next" style="position: absolute; left:600px;top:670px; height: 40px; background-color: #8fdeef; font-size: 15px">Next Question</button>
		<script type="text/javascript">
			var obj={}
			obj.count=1;
			var x;

			obj.flip=function()
			{
				p=document.querySelector("#no");
				p.innerHTML="QUESTION: "+(obj.count+1)+" of 5";
				switch(obj.count)
				{
					case 5:
						document.querySelector("#card1").style.display="none";
						break
					case 4:
						document.querySelector("#card2").style.display="none";
						break;
					case 3:
						document.querySelector("#card3").style.display="none";
						break;
					case 2:
						document.querySelector("#card4").style.display="none";
						break;
					case 1:
						document.querySelector("#card5").style.display="none";
						break;
					default:
						break;
				}

				if(obj.count==5)
				{
					t=document.querySelector("#next");
					t.parentNode.removeChild(t);
					p.parentNode.removeChild(p)
				}
				if(obj.count<5)
					obj.count++;		

			}

			document.querySelector("#next").addEventListener("click",obj.flip,false);

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