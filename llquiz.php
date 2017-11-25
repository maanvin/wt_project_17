<html>
	<head>
		<title></title>
		<style>
			.card {border-radius:20px;}
		</style>
		<link rel="stylesheet" type="text/css" href="final.css">
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="menu.css">

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
        <div class="floater" style="position: absolute; display:none;opacity: 0; " id="l1"><i class="material-icons">fiber_manual_record</i> <a href="code_stack.php">Code</a></div>
        <div class="floater" style="position: absolute;display:none; opacity: 0; " id="l2"><i class="material-icons">fiber_manual_record</i><a href="stacksquiz.php">Quiz</a></div>
        <div class="floater" style="position: absolute;display:none; opacity: 0; " id="l3"><i class="material-icons">fiber_manual_record</i> Forums</div>
        <div class="floater" style="position: absolute;display:none; opacity: 0; " id="l4"><i class="material-icons">fiber_manual_record</i><a href="stack.php">Visualization</a></div>
        <div class="floater"  id="floatbutton" style="width: 20px; color: white; z-index: 2;" onclick="addfloatmenu()"><i class="material-icons" onclick="addfloatmenu()">keyboard_arrow_up</i></div>
      </div>


		<form action="scorecheckll.php" id="sub" method="post">
		<p style="color: #8fdeef;font-size: 25px; position: absolute;left:55px;top:90px;" id="no">QUESTION 1 of 5</p>
		<div id="base" class="card" style="background-color: black; height: 400px">
			<pre style="position: absolute;top: 20px;left: 100px;color:#00bfff;font-size: 50px;">YOU'RE ALL DONE!</pre>
			<button type="submit" style="height:200px; width: 300px; position: absolute;top:150px; left: 160px;background-color: black; color:#00bfff; font-size:40px; border-color:#00bfff; border-style: dashed; ">Score My Test!</button>
		</div>
		<div id="card1" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	5. What is the output of following function for start pointing to 
	first node of following linked list? 1->2->3->4->5->6

	void fun(struct node* start)
	{
	  if(start == NULL)
	    return;
	  printf("%d  ", start->data); 
	  
	  if(start->next != NULL )
	    fun(start->next->next);
	  printf("%d  ", start->data);
	}
				</pre>
			</div>
			
			<table style="top:340px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q5" value="a">1 4 6 6 4 1</td></tr>
				<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q5" value="b">1 3 5 1 3 5</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q5" value="c">1 3 5 5 3 1</td></tr>
			</table><br>
			
		</div>
		<div id="card2" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	4. Each node of a doubly linked list takes up more memory 
	   than that of a singly linked list
				</pre>
			</div>
				
			<table class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q4" value="a">True</td></tr>
				<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q4" value="b">False</td></tr>
	
			</table><br>
		</div>
		<div id="card3" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	3.What does the following fragment of code do with a linked list? 
		current = head; 
		while (current != null) 
		{ 
			current = current.link; 
		}
				</pre>
			</div>
			
			<table style="top:200px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q3" value="a">Traverses the list</td></tr>
				<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q3" value="b">Initialises the list</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q3" value="c">Counts the number of nodes</td></tr>
			</table><br>
			
		</div>
		<div id="card4" class="card">
		<div class="question" style="background-color: #ccf2ff">
			<pre>
	2. What is the output of following function for start pointing to fir
	st node of following linked list? 1->2->3->4->5->6

	void fun(struct node* start)
	{
	  if(start == NULL)
	    return;
	  printf("%d  ", start->data); 
	  
	  if(start->next != NULL )
	    fun(start->next->next);
	  printf("%d  ", start->data);
	}
			</pre>
		</div>
		
		<table style="top:330px" class="ans">
			<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q2" value="a">1 4 6 6 4 1</td></tr>
			<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q2" value="b">1 3 5 1 3 5</td></tr>
			<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q2" value="c">1 3 5 5 3 1</td></tr>
		</table><br>
			
		</div>
		<div id="card5" class="card">
			<div class="question" style="background-color: #ccf2ff">
				<pre>
	1. What Does the Following Code Print?

	void fun1(struct node* head)
	{
			if(head == NULL)
					return;

			fun1(head->next);
			printf("%d  ", head->data);
	}
				</pre>
			</div>
			
			<table style="top:300px" class="ans">
				<tr style="background-color:#80dfff"><td class="answer"><input type="radio" name="Q1" value="a">Prints all nodes of the linked list</td></tr>
				<tr  style="background-color:#4dd2ff"><td class="answer"><input type="radio" name="Q1" value="b">Prints all nodes of the linked list in reverse order</td></tr>
				<tr style="background-color:#00bfff"><td class="answer"><input type="radio" name="Q1" value="c">Prints alternate nodes of the linked list</td></tr>
			</table><br>

		</div>
		<button type="button" id="next" style="position: absolute; left:250px;top:600px; height: 40px; background-color: #8fdeef; font-size: 15px">Next Question</button>
		</form>

		<script type="text/javascript">

			var obj={};
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
      l2.style.opacity=1;
      l3.style.opacity=1;
      l4.style.opacity=1;
      l1.style.display="block"
      l2.style.display="block"
      l3.style.display="block"
      l4.style.display="block"
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