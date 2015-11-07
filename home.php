<?php

$url1=$_SERVER['REQUEST_URI'];
header("Refresh; URL=$url1");

?>
<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
body{
  background: -webkit-linear-gradient(90deg, #E6DADA 10%, #274046 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #E6DADA 10%, #274046 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #E6DADA 10%, #274046 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #E6DADA 10%, #274046 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #E6DADA 10%, #274046 90%); /* W3C */
	  }
#basetop{position:fixed;
left:-5px;
float:left;
top:0px;



border-radius:10px;
background:    -moz-linear-gradient(#312626, #725555 50%, #312626);
background:    -o-linear-gradient(#312626, #725555 50%, #312626);
background:    -webkit-linear-gradient(#312626, #725555 50%, #312626);
background:    linear-gradient(#312626, #725555 50%, #312626); 
  }
   
   .logout{position:fixed;
           top:25px;
		   left:1200px;
		    border: 1px solid lightgreen ;
    border-radius: 4px;
    padding:8px;
	background:    -moz-linear-gradient(#8cf78c, #8cf78c 50%, #08cd0b 50%, #08cd0b);
background:    -o-linear-gradient(#8cf78c, #8cf78c 50%, #08cd0b 50%, #08cd0b);
background:    -webkit-linear-gradient(#8cf78c, #8cf78c 50%, #08cd0b 50%, #08cd0b);
background:    linear-gradient(#8cf78c, #8cf78c 50%, #08cd0b 50%, #08cd0b);
    -webkit-appearance: none;
	color:white;
	text-decoration:none;
	-webkit-box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
	font-family:Comic Sans MS;
	}
	
	.logout:hover{ border-bottom: 3px solid yellow ;
    border-radius: 4px;
    padding:8px;
	background:    -moz-linear-gradient(#8cf78c, #8cf78c 50%, #08cd0b 50%, #08cd0b);
background:    -o-linear-gradient(#8cf78c, #8cf78c 50%, #08cd0b 50%, #08cd0b);
background:    -webkit-linear-gradient(#8cf78c, #8cf78c 50%, #08cd0b 50%, #08cd0b);
background:    linear-gradient(#8cf78c, #8cf78c 50%, #08cd0b 50%, #08cd0b);
    -webkit-appearance: none;
	color:yellow;
	text-decoration:none;
	font-family:Comic Sans MS;	
	}
	.ppic{position:fixed;
	      top:0px;
		  left:550px;
		  border-bottom:12px solid #312626;
		 border-left:10px solid #312626;
border-right:10px solid #312626;		 
		  border-radius:7px;
		  background-color:gray;}
		  
.uploadpic {position:fixed;
            top:5px;
			left:565px;
			background-color:silver;
			border:5px solid silver;
			border-radius:10px;}
.piclink:hover{opacity:1.0;
-moz-opacity: 1.0;
    opacity:1.0;
    filter: alpha(opacity=100);}

.piclink{opacity:0.0;
-moz-opacity: 0.00;
    opacity:.0;
    filter: alpha(opacity=0);}
	
.username{position:fixed;
          top:-12px;
		  left:5px;
	font-family:Marquee;
		  
		  font-size:30px;
		  color:white;}	
.name{position:fixed;
      top:25px;
	  left:5px;
	  font-weight:bold;
	  font-family:Marquee;
	  color:red;}	
	  
#data{position:relative;

      top:100px;
	  left:100px;}
#data img {padding:50px;
background: url(posterleft.png);
    background-size: 300px 300px;
    background-repeat: no-repeat;
           
           border-radius:20px;
		   }
#mine{position:absolute;
      top:100px;
	  left:800px;}
#owndata{position:relative;

      top:80px;
	  left:0px;}
#owndata img {border-right:1px solid silver;
           border-bottom:25px solid #98FB98;
           border-radius:10px;
		   }
#addform{position:fixed;
         top:478px;
		 left:760px;
		 background-color:#9ACD32;
		 
		 font-family:Comic Sans MS;
		 border:5px solid lightblue;
		 border-radius:14px;}	
.add{position:fixed;
     top:568px;
	 left:1180px;}	
.addbutton{border:none;
           border-radius:70px;    
           background-color:#9ACD32;
		   color:white;
		   padding:0px;
		   font-size:30px;
		   padding-right:14px;
		   padding-left:14px;
		   font-family:Comic Sans MS;
		   box-shadow: 10px 10px 5px #888888;}

.addbutton:hover{	color:#98FB98;border-radius:70px;  padding:0px; border:none;  font-size:30px;
		   padding-right:14px;
		   padding-left:14px;
font-family:Comic Sans MS;
           background-color:#9ACD32; 
		   }  
		   
.profilepic{position:fixed;
            top:350px;font-family:Comic Sans MS;
			left:470px;font-size:20px;
			border:14px solid #312626;
			 -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
			border-radius:14px;
background-color:#00FA9A;
padding:20px;}

.exit :hover{border-bottom:3px solid #9ACD32;
border-radius:600px;

}@font-face {
    font-family:tnamefont;
    src: url(tnamefont.ttf);
}		  
#trend{position:fixed;
       top:84px;
	   padding-top:14px;
	   padding-left:4px;
	    padding-right:4px;
		 padding-bottom:4px;
	   left:200px;
	   background:    -moz-linear-gradient(#312626, #725555 50%, #312626);
background:    -o-linear-gradient(#312626, #725555 50%, #312626);
background:    -webkit-linear-gradient(#312626, #725555 50%, #312626);
background:    linear-gradient(#312626, #725555 50%, #312626); 
	   border-radius:9px;
	   
	   color:white;
	   font-size:40px;
font-family:tnamefont;}
.addtopic{position:fixed;
top:120px;
left:1090px;
opacity:0.8;
}
.addtopic:hover{position:fixed;
top:120;
left:1090px;
opacity:1.5;
}			


#topics{position:absolute;
        top:220px;
		line-height:90px;
		left:5px;
		overflow:auto;
		}



.tname:hover{border-bottom:2px solid blue;
           border-radius:14px;    
		   padding-top:6px;
		    padding-bottom:6px;
		   padding-left:12px;
	    padding-right:12px;
		   font-size:25px;
		   		text-decoration:none;
		   font-family:tnamefont;}
		   
@font-face {
    font-family:tnamefont;
    src: url(tnamefont.ttf);
}		  
		  @font-face {font-family:"Marquee";src:url("MARQUEE_.eot?") format("eot"),url("MARQUEE_.woff") format("woff"),url("MARQUEE_.ttf") format("truetype"),url("MARQUEE_.svg#Marquee") format("svg");font-weight:normal;font-style:normal;}
</style>
</head>
 
<body>

<?php
echo"<div id='topics'>";
$usern=$_SESSION['SESS_USERNAME'];
 $con1=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con1);
                $qry="SELECT topic_id,category FROM topic ORDER BY views DESC ";



                $result=mysql_query($qry,$con1);
                while($row = mysql_fetch_array($result))
                {$n = rand(30 , 60);
                 echo'  <a class="tname" style="           border-radius:14px;    
          background:    -moz-linear-gradient(#0ff, #c4daef 50%, #0ff);
background:    -o-linear-gradient(#0ff, #c4daef 50%, #0ff);
background:    -webkit-linear-gradient(#0ff, #c4daef 50%, #0ff);
background:    linear-gradient(#0ff, #c4daef 50%, #0ff);
	-webkit-box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);	  
		   color:#4B0082;
		    padding:8px;
		   font-size:  
		    '.$n.'px;
		   		text-decoration:none;
				 font-family:tnamefont;"href="topic.php?tno='.$row[0].'" >'.$row[1].'</a>  ';
				 echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                mysql_close($con1);   







echo"</div>";
?>


<div  id="trend">
Trending
</div>

<a class="addtopic" href="?addtopic=1" ><img  src="addtopic.jpg" height="50" width="200"/></a>
<img border="0" id="basetop"  height="90" width="1330"></img>

<a class="logout"href="index.php">logout</a>
<?php
$usern=$_SESSION['SESS_USERNAME'];
 $con1=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con1);
                $qry="SELECT picture FROM member WHERE username='$usern'";
                $ppicture=mysql_query($qry,$con1);
 $crow = mysql_fetch_array($ppicture);






if(!($crow[0])){
if( ($_SESSION['SESS_GENDER'])!='Male' && !($_SESSION['SESS_PICTURE']) )
{$url='ppicdeff';}
else
{$url='ppicdefm';}

echo"<img class='ppic' src='$url.jpg'  height='100' width='110'></img>";
$image= "$url.jpg";

                    $name=$url.'.jpg';
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($name,$image);



}
else
{
	
	function displayimage()
            {$usern=$_SESSION['SESS_USERNAME'];
                $con=mysql_connect("localhost","*******","******");
                mysql_select_db("*******",$con);
                $qry="select picture from member WHERE username='$usern' ";
                $result=mysql_query($qry,$con);
                $row = mysql_fetch_array($result);
                
                    echo '<img class="ppic" height="100" width="110" src="data:image;base64,'.$row[0].' "> ';
                
                mysql_close($con);   
            }
	
	displayimage();

	
	
}

?> 

<a class="piclink" title="upload new" href="?proupload=1"><img class="uploadpic" src="picupload.png" height="30" width="40"></img></a>
<h1 class='username'>$<?php print $_SESSION['SESS_USERNAME']?></h1>
<h1 class='name'><?php print $_SESSION['SESS_FIRST_NAME'] ?> <?php print $_SESSION['SESS_LAST_NAME'] ?></h1>

<?php if(isset($_GET['addtopic']))
{echo'<form class="profilepic" method="post" enctype="multipart/form-data"action="home.php">
        <strong>Add new topic</strong><a class="exit"  style="position:fixed;top:366px;left:770px;"href="home.php" ><img src="cancel.png" height="50"/></a>
		
		<br/><br/>
            <input type="text" name="newtopic" size="30"style="
			 border: 1px solid #00FF00 ;
    border-radius:4px;
    
    
	padding:5px;
	font-family:Comic Sans MS;
	color:black;
			
			
			
			" placeholder="topic name"requi#9ACD32/>
            <br/><br/>
            <input type="submit" name="sumit5" value="Add" style="
			border: 4px solid #FF3300 ;
    border-radius: 10px;
    padding:5px;
	background-color:#FF3300;
    -webkit-appearance: none;
	font-family:Comic Sans MS;
	color:white;
			
			
			
			
			" />
</form>';}
?>







<?php if(isset($_GET['proupload']))
{echo'<form class="profilepic" method="post" enctype="multipart/form-data"action="home.php">
        <strong>Upload new picture</strong><a class="exit"  style="position:fixed;top:366px;left:770px;"href="home.php" ><img src="cancel.png" height="50"/></a>
		
		<br/><br/>
            <input type="file" name="image" style="
			 border: 1px solid #00FF00 ;
    border-radius:4px;
    
    
	padding:5px;
	font-family:Comic Sans MS;
	color:black;
			
			
			
			" />
            <br/><br/>
            <input type="submit" name="sumit" value="Upload" style="
			border: 4px solid #FF3300 ;
    border-radius: 10px;
    padding:5px;
	background-color:#FF3300;
    -webkit-appearance: none;
	font-family:Comic Sans MS;
	color:white;
			
			
			
			
			" />
</form>';}
?>
<?php            if(isset($_POST['sumit']))
            {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($name,$image);
                }
            }
            
            function saveimage($name,$image)
            {$usern=$_SESSION['SESS_USERNAME'];
			
                $con=mysql_connect("localhost","******","******");
                mysql_select_db("*******",$con);
                $qry="UPDATE member SET picname='$name',picture='$image' WHERE username='$usern'";
                $result=mysql_query($qry,$con);
                if($result)
                {
                    //echo "<br/>Image uploaded.";
                }
                else
                {
                    //echo "<br/>Image not uploaded.";
                }
            }?>
			
			
			
			<?php            if(isset($_POST['sumit5']))
            {
                  
               
                    $newtopic= addslashes($_POST['newtopic']);
                    savenewtopic($newtopic);
                
            }
            
            function savenewtopic($newtopic)
            {$usern=$_SESSION['SESS_USERNAME'];
			
                $con=mysql_connect("*******","*****","******");
                mysql_select_db("********",$con);
                $qry="INSERT INTO topic (category,user) VALUES ('$newtopic','$usern')";
                $result=mysql_query($qry,$con);
                if($result)
                {
                    //echo "<br/>topic added ";
                }
                else
                {
                    //echo "<br/>topic not added.";
                }
            }?>
			
			
			
</body>
</html>
