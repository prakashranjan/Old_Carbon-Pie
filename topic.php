<?php

$url1=$_SERVER['REQUEST_URI'];
header("Refresh:; URL=$url1");

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

<script type="text/javascript" src="jquery.min.js"></script>

<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
body{
  margin: 0px;
		padding: 0px;
		background: #181818;
				
		
		
	   
	  }
	  @font-face {
    font-family:tnamefont;
    src: url(tnamefont.ttf);
}		 
#basetop{position:fixed;
left:-5px;
float:left;
top:0px;


border-radius:10px;
background-color:#f3cc2f;

    }
   
   .logout{position:fixed;
           top:10px;
		   left:1190px;
		    border: 1px solid #FF3300 ;
    border-radius: 4px;
    padding:6px;
	background-color:#FF3300;
    -webkit-appearance: none;
	color:white;
	text-decoration:none;
	font-family:Comic Sans MS;
	}
	
	.logout:hover{ border-bottom: 3px solid yellow ;
    border-radius: 4px;
    padding:6px;
	background-color:#FF6600;
    -webkit-appearance: none;
	color:yellow;
	text-decoration:none;
	font-family:Comic Sans MS;	
	}
	.ppic{position:fixed;
	      top:0px;
		  left:710px;
		  border-bottom:12px solid #FF9900;
		 border-left:10px solid #FF9900;
border-right:10px solid #FF9900;		 
		  border-radius:7px;
		  background-color:gray;}
		  
.uploadpic {position:fixed;
            top:5px;
			left:720px;
			background-color:silver;
			border:5px solid silver;
			border-radius:10px;}
.piclink:hover{opacity:1.0;}
.piclink{opacity:0.0;}	
.username{position:fixed;
          top:-5px;
		  left:10px;
		  font-family:Marquee;
		  font-size:20px;
		  color:white;}	
.name{position:fixed;
      top:18px;
	  left:10px;font-size:20px;
	  font-weight:bold;
	  color:red;
	  font-family:Marquee;}	
	  
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
           border-bottom:25px solid orange;
           border-radius:10px;
		   }
#addform{position:fixed;
         top:478px;
		 left:760px;
		 background-color:red;
		 
		 font-family:Comic Sans MS;
		 border:5px solid lightblue;
		 border-radius:14px;}	
.add{position:fixed;
     top:614px;
	 opacity:0.7;
	

border-radius:10px;
	 left:667px;}	
.addbutton{border:none;
           border-radius:70px;    
           background-color:#3498db;
		   color:white;
		   padding:0px;
		   font-size:30px;
		   padding-right:14px;
		   padding-left:14px;
		   font-family:Comic Sans MS;
		}

.addbutton:hover{	color:silver;border-radius:70px;  padding:0px; border:none;  font-size:30px;
		   padding-right:14px;
		   padding-left:14px;
font-family:Comic Sans MS;
            
		   }  
		   
.profilepic{position:fixed;
            top:350px;font-family:Comic Sans MS;
			left:470px;font-size:20px;
			border:14px solid red;
			  -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
			border-radius:14px;
background-color:#FF9900;
padding:20px;}

.exit :hover{border-bottom:3px solid red;
border-radius:600px;

}


#bub{position:absolute;
      top:150px;
	  left:0px;}


.chat {
    width: 1200px;
}

.bubble{
    background-color: #F2F2F2;
    border-radius: 5px;
    box-shadow: 0 0 6px #B2B2B2;
    display: inline-block;
    padding: 20px 28px;
    position: relative;
	top:40px;
	
    vertical-align: top;
}

.bule{opacity:0.8;
    background-color: #F2F2F2;
    border-radius: 5px;
    box-shadow: 0 0 6px #B2B2B2;
    display: inline-block;
    padding: 20px 28px;
    position: relative;
	top:40px;
	
    vertical-align: top;
}
.bubble::before {
    background-color: #F2F2F2;
    content: "\00a0";
    display: block;
    height: 16px;
    position: absolute;
    top: 11px;
    transform:             rotate( 29deg ) skew( -35deg );
        -moz-transform:    rotate( 29deg ) skew( -35deg );
        -ms-transform:     rotate( 29deg ) skew( -35deg );
        -o-transform:      rotate( 29deg ) skew( -35deg );
        -webkit-transform: rotate( 29deg ) skew( -35deg );
    width:  20px;
}
.bule::before {
    background-color: #F2F2F2;
    content: "\00a0";
    display: block;
    height: 16px;
    position: absolute;
    top: 11px;
    transform:             rotate( 29deg ) skew( -35deg );
        -moz-transform:    rotate( 29deg ) skew( -35deg );
        -ms-transform:     rotate( 29deg ) skew( -35deg );
        -o-transform:      rotate( 29deg ) skew( -35deg );
        -webkit-transform: rotate( 29deg ) skew( -35deg );
    width:  20px;
}
.me {
    float: ;   
    margin: 5px 45px 5px 20px;         
}

.me::before {
    box-shadow: -2px 2px 2px 0 rgba( 178, 178, 178, .4 );
    left: -9px;           
}

.you {left:650px;
    float: ;    
    margin: 5px 20px 5px 45px;         
}
.yu {left:280px;
    float: ;    
    margin: 5px 20px 5px 45px;         
}
.you::before {
    box-shadow: 2px -2px 2px 0 rgba( 178, 178, 178, .4 );
    right: -9px;    
}

.yu::before {
    box-shadow: 2px -2px 2px 0 rgba( 178, 178, 178, .4 );
    right: -9px;    
}
#addbub{position:fixed;
      top:200px;
	  left:500px;}
#send{opacity:0.7;
	position:fixed;
      top:592px;
		height:90px;
	  left:660px;
	  background-color:#FF9900;

border-radius:10px;
background:    -moz-linear-gradient(#312626, #725555 50%, #312626);
background:    -o-linear-gradient(#312626, #725555 50%, #312626);
background:    -webkit-linear-gradient(#312626, #725555 50%, #312626);
background:    linear-gradient(#312626, #725555 50%, #312626);	  }	

	  
	.kickori{
		

  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 14px;
  padding: 3px 3px 3px 3px;
  text-decoration: none;}

.thumb{border-radius:20px;}
.postpic{border-radius:20px;}  
.backbutton{position:fixed;
             left:1200px;
			 top:100px;}
	#capt{
		max-width: 450px; word-wrap:break-word;
		font-family:Comic Sans MS;}		 
	.uname{font-family:tnamefont;
		  font-size:23px;
		  color:black;
		  font-weight:bold;
		  position:relative;
	top:-12px;}	
	#topnam{position:fixed;
	top:-15px;left:300px;
	width:300px;font-family:Marquee;
	background-color:black;
	 animation: marquee 15s linear infinite;
	 border:1px solid black;
border-radius:10px;
	}
#topnam h2{ 
	 color:#00FF00;
	 
	 }
 @font-face {font-family:"Marquee";src:url("MARQUEE_.eot?") format("eot"),url("MARQUEE_.woff") format("woff"),url("MARQUEE_.ttf") format("truetype"),url("MARQUEE_.svg#Marquee") format("svg");font-weight:normal;font-style:normal;}

</style>
</head>
 
<body>



<div id="bub">
<?php 
 $tid=$_GET['tno'];
echo'<div class="chat">';
                $con3=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con3);
				$sql="SELECT category FROM topic WHERE topic_id='$tid'";
				$tnme=mysql_query($sql,$con3);
				$ro = mysql_fetch_array($tnme);
				
                $qry="SELECT * FROM testblob WHERE category='$ro[0]' ORDER BY image_id DESC";
                $result=mysql_query($qry,$con3);
                while($rowori= mysql_fetch_array($result))
                {
					$qery="SELECT picture FROM member WHERE username='$rowori[1]'";
				$prpic=mysql_query($qery,$con3);
				$prpicori = mysql_fetch_array($prpic);
                   $usr=$_SESSION['SESS_USERNAME']; 
					if($usr!=$rowori[1])
					{ echo'
					<div class="bubble me"><img class="thumb"height="45" width="45" src="data:image;base64,'.$prpicori[0].' ">&nbsp;&nbsp;&nbsp;<span class="uname">$'.$rowori[1].'</span></br>&nbsp;&nbsp;<div id="capt">'.$rowori[5].'</div>'; if($rowori[2]!=NULL){echo'</br></br><img class="postpic"height="350" width="450" src="data:image;base64,'.$rowori[2].' ">';} echo'</div>
					</br></br></br></br></br>';
					


					
					
					}
					else
					{
						echo'
					<div class="bubble you"><img class="thumb"height="45" width="45" src="data:image;base64,'.$prpicori[0].' ">&nbsp;&nbsp;&nbsp;<span class="uname">$'.$rowori[1].'</span></br>&nbsp;&nbsp;<div id="capt">'.$rowori[5].'</div>'; if($rowori[2]!=NULL){echo'</br></br><img class="postpic"height="350" width="450" src="data:image;base64,'.$rowori[2].' ">';} echo'</div>
					</br></br></br></br></br>';
						
						
					}
				
				
				}
				echo'</div>';
				echo'</br></br></br></br></br></br></br></br></br></br>';
                mysql_close($con3);   
            


?>

</div>








<?php  
$tid=$_GET['tno'];
$con=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con);
				$sql2="UPDATE topic SET views=(views +1) WHERE topic_id='$tid'";
				$counter=mysql_query($sql2,$con);
				?>
				
<div id="send"><form  action="topic.php?tno=<?php print $tid ;?>" method="post"> 
 </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name="sendtext"  cols="50" rows="2" style=" border: 1px solid silver;
    border-radius:4px;
    overflow:auto;
	resize:none;
    opacity:0.9;
	padding:5px;
	font-family:Comic Sans MS;
	color:black;
	font-size:15px;
			" placeholder="reply here....."required></textarea>
<input type="submit" name="sumit11" value=")>" style="
			border: 4px solid silver ;
		float:right;
    border-radius: 10px;
    padding-top:4px;
	padding-bottom:4px;
	padding-right:7px;
	padding-left:7px;
	background-color:#3498db;
    -webkit-appearance: none;
	font-family:Comic Sans MS;
	color:white;
	font-size:26px;		
			
			
			
			"/>&nbsp;&nbsp;&nbsp;</br>
</form> </div>

<form class="add" action="topic.php?tno=<?php print $tid ;?>" method="post">
<input class="addbutton"type="submit" name="submit3" value="+" title="post new"/></form>


<img border="0" id="basetop"  height="55" width="1330"></img>
<a class="backbutton"href="home.php" ><img src="backbutton.jpg" height="30" /> </a>
<?php 
if(isset($_POST['submit3']))
{ echo'<div id="addbub">';
	echo'<div class="chat">
	<div class="bule yu">
	<form method="post" enctype="multipart/form-data"  action="topic.php?tno='.$tid.'">
        <strong color="blue">Post a pic</strong><hr color="silver"/><a class="exit2"  style="position:fixed;top:255px;left:1205px;"href="topic.php?tno='.$tid.'" ><img src="cancel.png" height="30"/></a>
		
		
            <input type="file" name="image" value="upload pic" style="
			 border: 1px solid siver ;
    border-radius:4px;
    
    
	padding:5px;
	font-family:Comic Sans MS;
	color:black;
			
			
			
			" />
            <br/>
			<textarea  cols="40" rows="8" name="cap" style="
			 border: 1px solid silver;
    border-radius:4px;
    overflow:auto;
	resize:none;
    opacity:0.8;
	padding:5px;
	font-family:Comic Sans MS;
	color:black;
			
			
			
			" placeholder="type caption here....."></textarea>
			</br>
            <input type="submit" name="sumit6" value="post" style="
			border: 4px solid silver ;
			
    border-radius: 10px;
    padding-top:4px;
	padding-bottom:4px;
	padding-right:7px;
	padding-left:7px;
	background-color:#3498db;
    -webkit-appearance: none;
	font-family:Comic Sans MS;
	color:white;
	font-size:16px;		
			
			
			
			" />
</form>
	</div>';
	
	
echo'</div>';	
}
?>


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

echo"<img class='ppic' src='$url.jpg'  height='80' width='90'></img>";}
else
{
	
	function displayimage()
            {$usern=$_SESSION['SESS_USERNAME'];
                $con=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con);
                $qry="select picture from member WHERE username='$usern' ";
                $result=mysql_query($qry,$con);
                $row = mysql_fetch_array($result);
                
                    echo '<img class="ppic" height="80" width="90" src="data:image;base64,'.$row[0].' "> ';
                
                mysql_close($con);   
            }
	
	displayimage();

	
	
}

?> 

<a class="piclink" title="upload new"href="?tno=<?php  $tid=$_GET['tno']; print $tid ;?>&&proupload=1"><img class="uploadpic" src="picupload.png" height="20" width="30"></img></a>
<h1 class='username'>$<?php print $_SESSION['SESS_USERNAME']?></h1>
<h1 class='name'><?php print $_SESSION['SESS_FIRST_NAME'] ?> <?php print $_SESSION['SESS_LAST_NAME'] ?></h1>

<?php $con3=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con3);
				$sql="SELECT category,views FROM topic WHERE topic_id='$tid'";
				$tnme=mysql_query($sql,$con3);
				$ro = mysql_fetch_array($tnme);?>


<marquee id="topnam"direction="right"><h2><?php print $ro[0];?>&nbsp;&nbsp;views&nbsp;:&nbsp;<?php print $ro[1];?></h2></marquee>


<?php if(isset($_GET['proupload']))
{echo'<form class="profilepic" method="post" enctype="multipart/form-data" action="topic.php?tno='.$tid.'">
        <strong>Upload new picture</strong><a class="exit"  style="position:fixed;top:366px;left:770px;"href="topic.php?tno='.$tid.'" ><img src="cancel.png" height="50"/></a>
		
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
			
                $con=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con);
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
			
		
<?php 


	  if(isset($_POST['sumit6']))
            {
                   $caption= addslashes($_POST['cap']);
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimagecap($name,$image,$caption);
                
            }
            
            function saveimagecap($name,$image,$caption)
            {$usern=$_SESSION['SESS_USERNAME'];
			 $tid=$_GET['tno'];
                $con=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con);
				$sql="SELECT category FROM topic WHERE topic_id='$tid'";
				$toname=mysql_query($sql,$con);
				$rows = mysql_fetch_array($toname);
                 $qry="insert into testblob (image_name,image,category,username,caption) values ('$name','$image','$rows[0]','$usern','$caption')";
                $result=mysql_query($qry,$con);
                
            }
	
	



?>		

<?php 


	  if(isset($_POST['sumit11']))
            {
                   $caption= addslashes($_POST['sendtext']);
                   
                    saveimagecapsend($caption);
                
            }
            
            function saveimagecapsend($caption)
            {$usern=$_SESSION['SESS_USERNAME'];
			 $tid=$_GET['tno'];
                $con=mysql_connect("localhost","873630","abdulkalam");
                mysql_select_db("873630",$con);
				$sql="SELECT category FROM topic WHERE topic_id='$tid'";
				$toname=mysql_query($sql,$con);
				$rows = mysql_fetch_array($toname);
                 $qry="insert into testblob (category,username,caption) values ('$rows[0]','$usern','$caption')";
                $result=mysql_query($qry,$con);
                
            }
	
	



?>		
</body>
</html>