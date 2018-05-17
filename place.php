<!DOCTYPE html>
<html>
<head>	
<meta charset="UTF-8" />
<title>HW6</title>

<script type="text/javascript">
function processability(form) {
	document.getElementById("locationname").disabled=false;
	document.getElementById("locationname").required=true;
    
}
function disablelocation(form) {
	document.getElementById("locationname").disabled=true;
	document.getElementById("locationname").required=false;
   
}
function clearall(){
  document.getElementById("key_word").value="";
       var select = document.getElementById("category");  
       //category to default
      for(var i=0; i<select.options.length; i++){  
        if(select.options[i].innerHTML == "default"){  
            select.options[i].selected = true;  
            break; 
          }//if 
      }//for
      //distance to 10
  document.getElementById("distance").value="";
  //location to Here
  //document.getElementById("Here").checked=true;
  var radiovar = document.getElementsByName("location");
  for(var i=0;i<radiovar.length;i++)
  {
   if(radiovar[i].value=="Here")
    radiovar[i].checked = "checked";
  }//for
  document.getElementById("locationname").value="";
  disablelocation();

 //alert(document.getElementById("jgtable"));
 if (document.getElementById("jgtable")!=null){
  document.getElementById("jgtable").innerHTML='';
}
if (document.getElementById("d2")!=null){
  document.getElementById("d2").innerHTML='';
  document.getElementById("d2").style.borderColor='white';
}
if (document.getElementById("detailye")!=null){
  document.getElementById("detailye").innerHTML='';
}
if (document.getElementById("map")!=null){
  document.getElementById("map").innerHTML='';
}
if (document.getElementById("modexz")!=null){
  document.getElementById("modexz").innerHTML='';
}
  
}//function clearall

function initMap(latlat,lnglng) {
        //document.getElementById('map').style.display='';
        var uluru = {lat: latlat, lng: lnglng};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      } 



function initMapdr(mode) {
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();
  //alert(startlat);
  var start = new google.maps.LatLng(xzlat, xzlon);
  var dest = new google.maps.LatLng(arr[0],arr[1]);
  var mapOptions = {
    zoom: 14,
    center: start
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
  directionsDisplay.setMap(map);

  var selectedMode = mode;
  var request = {
      origin: start,
      destination: dest,
      // Note that Javascript allows us to access the constant
      // using square brackets and a string value as its
      // "property."
      travelMode: google.maps.TravelMode[selectedMode]
  };
  directionsService.route(request, function(response, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(response);
    }
  });
}


function zhankaimap(object){
  if (document.getElementById('map').style.display=="none" && document.getElementById('modexz').style.display=="none"){
  document.getElementById('map').style.display='';
  document.getElementById('modexz').style.display='';
  }else{
    document.getElementById('map').style.display="none";
    document.getElementById('modexz').style.display="none";
  }
}
function juli(object) {
        jtop=object.offsetTop;
        jleft=object.offsetLeft;
        temp=object.offsetParent;
       while(temp!=null){
          jtop+=temp.offsetTop;
          jleft+=temp.offsetLeft;
          temp=temp.offsetParent;
       }
      document.getElementById("map").style.top=jtop+20+"px";
      document.getElementById("modexz").style.top=jtop+20+"px";
      document.getElementById("map").style.left=jleft+20+"px";
      document.getElementById("modexz").style.left=jleft+20+"px";
        }  
function chuandi(placelat,placelon){
  //alert("haha");
       //alert(placelat);
        arr=[placelat,placelon];
       //alert(arr);
       //return arr;
      
}     

</SCRIPT>

<script type="text/javascript">
     
      function initialmap()
    {
    document.getElementById('map').style.display='none';
    document.getElementById('modexz').style.display='none';
    }
      
    </script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwuwIez8sQvDess1d0kRvDAWr5WXsMcKw&callback=initMap">
    </script>

<style type="text/css">
    input:required{
      box-shadow: none;
    }
    #map {
       position: absolute;
        height: 300px;
        width: 400px;
        z-index: 1;
       }
       #modexz{
        position: absolute;
        z-index: 2;
       }
       .directionmode{
        width: 80px;
        text-align: center;
        background-color: #F2F2F2;
       }

   
      .directionmode:hover{background-color: #D8D8D8}

      .directionmode a:link{text-decoration:none;color:rgb(0,0,0);}
      .directionmode a:visited{text-decoration:none;color:rgb(0,0,0);}
      .directionmode a:hover{text-decoration:none ;color:rgb(0,0,0);}
      .directionmode a:active{text-decoration:none;color:rgb(0,0,0);}

		#d1{
			position: absolute;
			top:30px;
			border:2px solid #BDBDBD;
			width:500px;
			background-color: rgb(250,250,250);
			left:400px;
		}
    #d2{
      position: absolute;
      top:240px;
      border:2px solid #D8D8D8;
      width:600px;
      background-color: #F2F2F2;
      left:350px;
    }
    #t1 {
      width:1100px;
      line-height: 25px; border-color:grey; border-collapse: collapse;
    }
    #reviewtb{
      padding-left:392px;
     

    }
     #reviewtable{
      border-color:grey; border-collapse: collapse;
      border:2px 
      text-align: center;
    }   
   #phototb{
      padding-left:392px;
     

    }
     #phototable{
      border-color:grey; border-collapse: collapse;
      border:2px 
      text-align: center;
    }   
    table tr td { border:2px solid #D8D8D8 }

.wenzi a:link{text-decoration:none;color:rgb(0,0,0);}
.wenzi a:visited{text-decoration:none;color:rgb(0,0,0);}
.wenzi a:hover{text-decoration:none ;color:rgb(0,0,0);}
.wenzi a:active{text-decoration:none;color:rgb(0,0,0);}
</style>


</head>
<body>

<div id="d1">
<div align=center><i><font size="5" >Travel and Entertainment Search</font></i></div>
<hr style="height:1px;border:none;width:96%;border-top:2px solid #BDBDBD;"/>

	<form name="myform" method="POST" action="">
	<b>Keyword</b><INPUT NAME="key_word" TYPE="text" SIZE="15" id="key_word" required><br>


	<b>Category</b><SELECT NAME="category" style="width:100px" id="category">
  	<OPTION SELECTED>default</OPTION>
  	<OPTION>cafe</OPTION>
  	<OPTION>bakery</OPTION>
  	<OPTION>restaurant</OPTION>
  	<OPTION>beauty salon</OPTION>
  	<OPTION>casino</OPTION>
  	<OPTION>movie theater</OPTION>
  	<OPTION>lodging</OPTION>
  	<OPTION>airport</OPTION>
  	<OPTION>train station</OPTION>
  	<OPTION>subway station</OPTION>
  	<OPTION>bus station</OPTION>
  	</SELECT><BR>

  	<b>Distance(miles)</b><INPUT NAME="distance" TYPE="text" SIZE="15" placeholder="10" id="distance" >
  	<b>from</b>
  	<INPUT TYPE="radio" Name="location" VALUE="Here" CHECKED onclick="disablelocation(this)" id="Here">Here<BR>
    <INPUT TYPE="hidden" Name="herela" VALUE="" id="herela">
    <INPUT TYPE="hidden" Name="herelo" VALUE="" id="herelo" >
  	<div style="padding-left: 270px">	  	<INPUT TYPE="radio" Name="location" VALUE="locationradio" onclick="processability(this)" id="localadd" >
  		<INPUT NAME="locationname" TYPE="text" SIZE="15" placeholder="location" id="locationname" disabled=true>
  	</div>
  	<br>
  	<div style="padding-left: 60px">
  		<INPUT TYPE="submit" VALUE="Search"  id="searchbutton" name="submit" disabled=true>
  		<input type="button" onclick="clearall()" value="clear">
  	</div>
	</form>
	<br>
</div>

<script type="text/javascript">
  //to get the local address
Ipadd=loadJSON("http://ip-api.com/json");
herelat=Ipadd.lat;
herelon=Ipadd.lon;
//alert(herelat);
document.getElementById("herela").value=herelat;
document.getElementById("herelo").value=herelon;
if(Ipadd.status=="success") 
    { //alert("haha");
    document.getElementById("searchbutton").disabled=false;
    }

function loadJSON(url) {
        if (window.XMLHttpRequest) {        
            xmlhttp = new XMLHttpRequest(); 
        } else {                           
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        } 
            xmlhttp.open("GET", url, false); 
            xmlhttp.send();
            jsonObj = JSON.parse(xmlhttp.responseText);
            return jsonObj; 
    }
 </SCRIPT>   


<?php 
$keyword = !empty($_POST["key_word"]) ? $_POST["key_word"] : "";
$keywordbao=$keyword;
$keyword=urlencode($keyword);
//echo $keyword;
if(empty($_POST["distance"])){
  $radius=10;
}else{
$radius=$_POST["distance"];
}
$radiusbao=$radius;
$mtradius=$radius*1609;
//echo $mtradius;
if ($mtradius>50000){
  $mtradius=50000;
}

$type = !empty($_POST["category"]) ? $_POST["category"] : "";
$typebao=$type;
$type=urlencode($type);
$nearbykey="AIzaSyD1aKalf821pJcM1jmf6c6pZss8FjEMGic";
$detailkey="AIzaSyAF8uv5vpDa6bce2Rk6i54r2B42f9r7NeQ";
$placephotokey="AIzaSyAyWZRXpzlBW9pLh7tgtRoxc0kZUMtn3t8";

//echo $type;
//here location lat and lon
foreach($_POST as $key => $value) {
        if ($key == "location") {
                if($value=="Here"){
                  $herelat=$_POST["herela"];
                  $herelont=$_POST["herelo"];
                  $location=$herelat.','.$herelont;
                  $xuanlat=$herelat;
                  $xuanlng=$herelont;
                  //echo $location;
                }
        }
}
//get specific location lat and lng

  if (!empty($_POST["locationname"])){
  
      $splocation=$_POST["locationname"];
      $splocationbao=$splocation;
      $splocation=urlencode($splocation);
      //echo $location;

      $googlegeocoding = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$splocation."&key=AIzaSyCA0roe3dnx-M00HRvjPaXvTf8xjwEgWso");

      $googlegeo = json_decode($googlegeocoding, true);

      $lat =$googlegeo['results'][0]['geometry']['location']['lat'];
      $lng =$googlegeo['results'][0]['geometry']['location']['lng'];
      $location=$lat.','.$lng;
      $xuanlat=$lat;
      $xuanlng=$lng;
      //echo $location;
  }else{
    $splocationbao="";
  }
  //echo($xuanlat);



if (!empty($_POST["submit"])){
  if(isset($location)){
$googlenearby=file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$location."&radius=".$mtradius."&type=".$type."&keyword=".$keyword."&key=".$nearbykey);}
$googlenear = json_decode($googlenearby, true);
$goo = $googlenear['results'];
$resultstatus=$googlenear['status'];
?>

<script type="text/javascript"> 
keywordnew= <?php echo json_encode($keywordbao);?>; 
document.getElementById("key_word").value=keywordnew;
urlkeyword=encodeURI(keywordnew);
//alert(urlkeyword);

typenew=<?php echo json_encode($typebao);?>;
//alert(typenew);
var select = document.getElementById("category");  
       //category to default
      for(var i=0; i<select.options.length; i++){  
        if(select.options[i].innerHTML == typenew){  
            select.options[i].selected = true;  
            break; 
          }//if 
      }//for
urltype=encodeURI(typenew);

radiusnew=<?php echo json_encode($radiusbao);?>;
 document.getElementById("distance").value=radiusnew;
 urlradius=encodeURI(radiusnew);

 splocationnew=<?php echo json_encode($splocationbao);?>;
if(splocationnew!=""){
  var radiovar = document.getElementsByName("location");
  for(var i=0;i<radiovar.length;i++)
  {
   if(radiovar[i].value=="locationradio")
    radiovar[i].checked = "checked";
  }//for
  processability();
  document.getElementById("locationname").value=splocationnew;
}//if
urlsplocation=encodeURI(splocationnew);///////////////////////


var jsontable =<?php echo json_encode($goo);?>; 
var restatus  =<?php echo json_encode($resultstatus);?>;
 xzlat=  <?php echo json_encode($xuanlat);?>;
 xzlon=<?php echo json_encode($xuanlng);?>;
//alert(xzlon);
//alert(restatus);
//var joo = jsontable[0]["name"];
//alert(joo);

var html_text="";
var html_null="";
html_text +="<div id='jgtable' style=\";padding-top:240px;padding-left:60px \" class=\"wenzi\">";
html_text += "<table id='t1'>";
html_text += "<tr>";
html_text += "<td style=\"text-align: center;\"><strong>Category</strong></td>";
html_text += "<td style=\"text-align: center;\"><strong>Name</strong></td>";
html_text += "<td style=\"text-align: center;\"><strong>Address</strong></td>";
html_text += "</tr>";

    if(restatus=="OK")
    {
        tablelength=Math.min(jsontable.length,20);
        //alert(tablelength);
        for (i = 0; i < tablelength; i++)
        {
          jicon=jsontable[i]['icon'];
          jname=jsontable[i]['name'];
         
          placelat=jsontable[i]['geometry']['location']['lat'];
          placelon=jsontable[i]['geometry']['location']['lng'];
          jv=jsontable[i]['vicinity'];
          placeid=jsontable[i]['place_id'];
          html_text += "<tr>";
          html_text += "<td><img src=\""+jicon+"\"height=30px width=50px ;></td>";
          html_text += "<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"place.php?placeid="+placeid+"&keyword="+urlkeyword+"&type="+urltype+"&distance="+urlradius+"&placelocation="+urlsplocation+"\">"+jname+"</a></td>";
          html_text += "<td><a href=\"javascript:void(0)\" onclick=\"zhankaimap(this);juli(this);initMap("+placelat+","+placelon+");chuandi("+placelat+","+placelon+");\">&nbsp;&nbsp;&nbsp;&nbsp;"+jv+"</a></td>";
          html_text += "</tr>";  
       }//for
  html_text+="</table></div>";
html_text+="<div id=\"map\" ></div>";
html_text +="<div id='modexz'>";   
          html_text +="<div class=\"directionmode\" onclick=\"initMapdr('WALKING')\"><a href=\"javascript:void(0)\">Walk there</a></div>"; 
          html_text +="<div class=\"directionmode\" onclick=\"initMapdr('BICYCLING')\"><a href=\"javascript:void(0)\">Bike there</a></div>";
          html_text +="<div class=\"directionmode\" onclick=\"initMapdr('DRIVING')\"><a href=\"javascript:void(0)\">Drive there</a></div>";
html_text +="</div>";
  document.write(html_text);
   initialmap();
       
  }else{//status
    
    html_null +="<div id='d2'>";
    html_null +="<div align=center><font size='2'>No Records has been found</font></div>";
     html_null +="</div>";
     //alert("haha");
      document.write(html_null);  
  }
 //document.getElementById("address_0").innerHTML="";
</script>

<?php
}//if post submit
?>

<?php
if (!empty($_GET['placeid']) && empty($_POST['submit'])){
$dtkeyword = !empty($_GET["keyword"]) ? $_GET["keyword"] : "";////////////////////////////////
//echo $dtkeyword;
$dttype = !empty($_GET["type"]) ? $_GET["type"] : "";
$dtradius= !empty($_GET["distance"]) ? $_GET["distance"] : "";
$dtlocation=!empty($_GET["placelocation"]) ? $_GET["placelocation"] : "";


$place_id=$_GET['placeid'];
//echo $place_id;
$placedetail=file_get_contents("https://maps.googleapis.com/maps/api/place/details/json?placeid=".$place_id."&key=".$detailkey);
$placedetail=json_decode($placedetail,true);
//echo $placedetail;
$placeresult=$placedetail['result'];
$placename= $placeresult['name'];

if (array_key_exists("photos", $placeresult)){
  //echo "Yes";
  $photos=$placeresult['photos'];
  $photolength=count($photos);
//echo $photolength; 
  if($photolength<5){
   // echo "xiaoyu5";
     for($k=0;$k<$photolength; $k++){
      //echo $photos[$k]['photo_reference'];
          $placephoto=file_get_contents("https://maps.googleapis.com/maps/api/place/photo?maxwidth=750&photoreference=".$photos[$k]['photo_reference']."&key=".$placephotokey);
         //echo $placephoto;
          file_put_contents("photo_".($k+1).".png", $placephoto);
     }//for
  }else{
      //echo "dayu5";
    for($k=0;$k<5; $k++){
      //echo $photos[$k]['photo_reference'];
          $placephoto=file_get_contents("https://maps.googleapis.com/maps/api/place/photo?maxwidth=750&photoreference=".$photos[$k]['photo_reference']."&key=".$placephotokey);
         //echo $placephoto;
          file_put_contents("photo_".($k+1).".png", $placephoto);
     }//for
  }//elseif length<5
}else{
 $photos="";
}//else

?>

<script type="text/javascript"> 
dtkeyword=<?php echo json_encode($dtkeyword);?>;
document.getElementById("key_word").value=dtkeyword;//////////////////////////////////

dttype=<?php echo json_encode($dttype);?>;
var select = document.getElementById("category");  
       //category to default
      for(var i=0; i<select.options.length; i++){  
        if(select.options[i].innerHTML == dttype){  
            select.options[i].selected = true;  
            break; 
          }//if 
      }//for

dtradius=<?php echo json_encode($dtradius);?>;
 document.getElementById("distance").value=dtradius;

dtlocation=<?php echo json_encode($dtlocation);?>;
if(dtlocation!=""){
  var radiovar = document.getElementsByName("location");
  for(var i=0;i<radiovar.length;i++)
  {
   if(radiovar[i].value=="locationradio")
    radiovar[i].checked = "checked";
  }//for
  processability();
  document.getElementById("locationname").value=dtlocation;
}//if

var rvresult=<?php echo json_encode($placeresult);?>;
var dtplacename=<?php echo json_encode($placename);?>;

function initial()
{
document.getElementById('jiantou1s').style.display='none';
document.getElementById('jiantou2s').style.display='none';
document.getElementById('click2').style.display='none';
document.getElementById('click4').style.display='none';
document.getElementById('reviewtb').style.display='none';
document.getElementById('phototb').style.display='none';
}

function zhankairw()
{
document.getElementById('reviewtb').style.display='';
document.getElementById('jiantou1s').style.display='';
document.getElementById('click2').style.display='';
document.getElementById('jiantou1x').style.display='none';
document.getElementById('click1').style.display='none';
yincangph();
}

function yincangrw()
{
document.getElementById('reviewtb').style.display='none';
document.getElementById('jiantou1s').style.display='none';
document.getElementById('click2').style.display='none';
document.getElementById('jiantou1x').style.display='';
document.getElementById('click1').style.display='';
}

function zhankaiph()
{
document.getElementById('phototb').style.display='';
document.getElementById('jiantou2s').style.display='';
document.getElementById('click4').style.display='';
document.getElementById('jiantou2x').style.display='none';
document.getElementById('click3').style.display='none';
yincangrw();
}

function yincangph()
{
document.getElementById('phototb').style.display='none';
document.getElementById('jiantou2s').style.display='none';
document.getElementById('click4').style.display='none';
document.getElementById('jiantou2x').style.display='';
document.getElementById('click3').style.display='';
}

html_dt="";
html_dt +="<div id='detailye' style=\"padding-top:230px;text-align:center\">";
html_dt += "<strong>"+dtplacename+"</strong>";

html_dt +="<div style=\"padding-top:30px;text-align:center\" id='click1'>";
html_dt +="click to show reviews";
html_dt+="</div>";
html_dt +="<div style=\"padding-top:30px;text-align:center\" id='click2'>";
html_dt +="click to hide reviews";
html_dt+="</div>";
html_dt +="<div style=\"text-align:center\" id='jiantou1x'>";
html_dt +="<img src=\"http://cs-server.usc.edu:45678/hw/hw6/images/arrow_down.png\" onclick=\"zhankairw()\" height=23px width=36px/>";
html_dt+="</div>";

html_dt +="<div style=\"text-align:center\" id='jiantou1s'>";
html_dt +="<img src=\"http://cs-server.usc.edu:45678/hw/hw6/images/arrow_up.png\"  onclick=\"yincangrw()\" height=23px width=36px/>";
html_dt+="</div>";

html_dt +="<div style=\"text-align:center\" id='reviewtb'>";
html_dt += "<table id='reviewtable' width=\"504px\">";
if (rvresult.hasOwnProperty("reviews") )
  {
     var rvlength=Math.min(5,rvresult["reviews"].length);
   
    for (j = 0; j<rvlength; j++)
        { 
          html_dt += "<tr>";
          if(!rvresult["reviews"][j].hasOwnProperty("profile_photo_url"))
            {html_dt += "<td><strong>"+rvresult["reviews"][j]['author_name']+"</strong></td>";}else{
          html_dt += "<td><img src=\""+rvresult["reviews"][j]['profile_photo_url']+"\" height=26px width=26px ;><strong>"+rvresult["reviews"][j]['author_name']+"</strong></td>";}
           html_dt += "</tr>";
           if(rvresult["reviews"][j]["text"]!=""){
          html_dt += "<tr><td>"+rvresult["reviews"][j]['text']+"</td></tr>";
          }else{
            html_dt += "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";
          } 
       }//for
     
  }else{
    //alert("No have");
    html_dt +="<tr><td><font size='2'><strong>No Reviews Found</strong></font></td></tr>";
  }//else
html_dt += "</table>";
html_dt+="</div>";

html_dt +="<div style=\"padding-top:20px;text-align:center\" id='click3'>";
html_dt +="click to show photos";
html_dt+="</div>";
html_dt +="<div style=\"padding-top:20px;text-align:center\" id='click4'>";
html_dt +="click to hide photos";
html_dt+="</div>";

html_dt +="<div style=\"text-align:center\" id='jiantou2x'>";
html_dt +="<img src=\"http://cs-server.usc.edu:45678/hw/hw6/images/arrow_down.png\" onclick=\"zhankaiph()\" height=23px width=36px/>";
html_dt+="</div>";
html_dt +="<div style=\"text-align:center\" id='jiantou2s'>";
html_dt +="<img src=\"http://cs-server.usc.edu:45678/hw/hw6/images/arrow_up.png\" onclick=\"yincangph()\" height=23px width=36px/>";
html_dt+="</div>";

html_dt +="<div style=\"text-align:center\" id='phototb'>";
html_dt += "<table id='phototable' width=\"504px\">";
if (rvresult.hasOwnProperty("photos") )
  {
    //alert("have");
    if (rvresult["photos"].length<5){
    for (j = 0; j<rvresult["photos"].length; j++)
        { 
          html_dt += "<tr>";
          html_dt += "<td><a href=\"photo_"+[j+1]+".png\" target='_blank'><img src=\"photo_"+[j+1]+".png\" height=360px width=480px /></a></td>";
           html_dt += "</tr>";
       }//for
     }else{//if<5
      for (j = 0; j<5; j++)
        { 
          html_dt += "<tr>";
          html_dt += "<td><a href=\"photo_"+[j+1]+".png\" target='_blank'><img src=\"photo_"+[j+1]+".png\" height=360px width=480px /></a></td>";
           html_dt += "</tr>";
       }//for
     }//else
  }else{
    //alert("No have");
    html_dt +="<tr><td><font size='2'><strong>No Photos Found</strong></font></td></tr>";
  }//else
html_dt += "</table>";


html_dt+="</div>";

html_dt+="</div>";
document.write(html_dt); 
initial();
</script>
<?php
}//if get placeid
?>

</body>
</html>












