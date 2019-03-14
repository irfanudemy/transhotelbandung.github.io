<html>
<head>
<title>The Trans Luxury Hotel</title>
<script type="text/javascript" src="js/jquery-1.4.4.js"></script>
<!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="js/jquery.reveal.js"></script>



<script type="text/javascript">
		$(document).ready(function(){
			// On Calendar Load		
			$("#formarrivald").html("<center><img src='images/loader-fb.gif'></center>").fadeIn(200,1,
		      function(){ 
				  $("#formarrivald").load("includes/ajax_library.php?actions=arrivald&month=01");
			});  
			  
			// On Calendar Month On Click
			$("#formarrivalm").change(function(){
				var str = "";
		        $("select[name='arrivalm'] option:selected").each(function () {
		        	str = $(this).val();
		        	$("#formarrivald").html("<center><img src='images/loader-fb.gif'></center>").fadeIn(200,1,
	  			      function(){ 
	  					  $("#formarrivald").load("includes/ajax_library.php?actions=arrivald&month=" + str);
	  				});  
		        });
			});  
		});
		
	$(function(){
	$('.fadein img:gt(0)').hide();
		setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
	});
</script>



<SCRIPT TYPE="text/javascript" language="javascript">
<!--
function DateAdd(txtDate, days, usFormat)
{
    var newDateStr;
    var dateParts = txtDate.split(/[^0-9]+/);

    var year = Number(dateParts[2]);
    if (year < 50)  // so 0-49 becomes 2000-2049, 50-99 become 1950-1999 
        year += 2000;
    else if (year < 100)
        year += 1900;
    var unixDate;
    if (usFormat)
        unixDate = new Date(year.toString(), dateParts[0]-1, dateParts[1]);
    else
        unixDate = new Date(year.toString(), dateParts[1]-1, dateParts[0]);
    unixDate = new Date(unixDate.getTime() + days * 24 * 60 * 60 * 1000);

    var newDay = unixDate.getDate().toString();
    var newMonth = (unixDate.getMonth()+1).toString();
    var newYear = unixDate.getFullYear().toString();
    if (usFormat)
        newDateStr = (newMonth + "/" + newDay + "/" + newYear);
    else
        newDateStr = (newDay + "/" + newMonth + "/" + newYear);
    return newDateStr;
}

function fixandsubmit()
{
var dtArrival;
var dtDeparture;

var dtArrivalJS;
var dtDepartureJS;
var daysToAddJS;

var d=document;
var dt = parseInt(d.getElementById("arrivald").value) + parseInt(d.getElementById("nights").value);

dtArrival= d.getElementById("arrivaly").value+ '-' + d.getElementById("arrivalm").value + '-' + d.getElementById("arrivald").value;
dtArrivalJS = d.getElementById("arrivalm").value+ '/' + d.getElementById("arrivald").value + '/' + d.getElementById("arrivaly").value;
daysToAddJS = d.getElementById("nights").value;

dtArrivalJS = DateAdd(dtArrivalJS, daysToAddJS, true);
dtDepartureJS = dtArrivalJS.split(/[^0-9]+/);
dtDeparture= dtDepartureJS[2] + '-' + dtDepartureJS[0] + '-' + dtDepartureJS[1];

d.getElementById("departure").value=dtDeparture;
d.getElementById("arrival").value=dtArrival;
d.sform.submit();
}
//-->
</script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body bgcolor="#000000" background="images/bg-black.jpg" topmargin="0" leftmargin="0">

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td width="100%">&nbsp;<center><br>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="1024">
      <tr>
        <td width="193" valign="top">

<table border="0" style="border-collapse: collapse" width="193" cellspacing="0" bgcolor="#000000">
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="180" colspan="3">
			<a href="index.php"><img border="0" src="images/logo.jpg" width="177" height="101"></a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="180" colspan="3">
			<b>
				EXPLORE			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="170" colspan="2">
			<b>
				Rooming Pleasure			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="premier.php" class="nav3">Premier</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="premierclub.php" class="nav3">Premier Club</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="celebrity.php" class="nav3">Celebrity Suite</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="psuite.php" class="nav3">Presidential Suite</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="170" colspan="2">
			<b>
				Dining Treats			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="lounge.php" class="nav3">The Lounge</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="rest.php" class="nav3">The Restaurant</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="18.php" class="nav3">The 18th Restaurant &amp; Lounge</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="clounge.php" class="nav3">The Club Lounge</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="170" colspan="2">
			<b>
				Meeting &amp; Celebrations			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="cballroom.php" class="nav3">Trans 
			Convention Centre</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="gballroom.php" class="nav3">Trans Grand 
			Ballroom</a>		</td>
	</tr>
	<tr>
		<td>&nbsp;		</td>
		<td>&nbsp;		</td>
		<td>		</td>
		<td>
			<a href="garden.php" class="nav3">Garden Terrace</a>		</td>
	</tr>
	<tr>
		<td>&nbsp;		</td>
		<td>&nbsp;		</td>
		<td>		</td>
		<td>
			<a href="red.php" class="nav3">The Red</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="boardroom.php" class="nav3">Trans Boardrooms</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">		</td>
		<td width="152">
			<a href="jewel.php" class="nav3">Jewel Box</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="170" colspan="2">
			<b>
				Soothing&nbsp; Treatments			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">&nbsp;		</td>
		<td width="152">
			<a href="spa.php" class="nav3">The Spa</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="170" colspan="2">
			<b>
				Escape			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">&nbsp;		</td>
		<td width="152">
			<a href="beach.php" class="nav3">The Pool</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">&nbsp;		</td>
		<td width="152">
			<a href="gym.php" class="nav3">The Fitness Centre</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="15">&nbsp;		</td>
		<td width="152">
			<a href="kid.php" class="nav3">The Kids Club</a>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="7">&nbsp;		</td>
		<td width="170" colspan="2">&nbsp;		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="180" colspan="3">
			<b>
				<a class="nav3" href="offer19.php">OFFERS</a>			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="180" colspan="3">
			<b>
				<a class="nav3" href="what32.php">WHAT'S ON</a>			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="180" colspan="3">
			<b>
				<a class="nav3" href="career.php">CAREER</a>			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="180" colspan="3">
			<b>
				<a class="nav3" href="add.php">ADDRESS & DIRECTION</a>			</b>		</td>
	</tr>
	<tr>
		<td width="6">&nbsp;		</td>
		<td width="180" colspan="3">
			<b>
				<a class="nav3" href="index.php">HOME</a>			</b>		</td>
	</tr>
	
</table>

        
        </td>
        <td width="831" valign="top">
         <!--
        <img border="0" src="images/front-slide1.jpg" width="831">
       -->  
          <div class="fadein">
<img src="images/front-slide1.jpg">
<img src="images/front-slide2.jpg">
<img src="images/front-slide3.jpg">
<img src="images/front-slide4.jpg">
</div>
          	
        </td>
      </tr>
    </table>
    
<form id="sform" name="sform" method="post" action="https://www.myfidelio.net/webui/AvailabilitySearch.aspx?chain=PARA&property=PATRAN" target="_self">
<br />
<!--
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="1024">
      <tr>
        <td width="193" bgcolor="#000000">&nbsp;</td>
        <td width="416" valign="middle">
        <img src="images/award2.jpg">
        
        </td>
        </td>
    </tr>
        </table>
        
        -->
        
	<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="1024">
      <tr>
        <td width="193" bgcolor="#000000">&nbsp;</td>
        <td width="416" valign="top">
        
	<table border="0" cellpadding="4" cellspacing="4" style="border-collapse: collapse" width="387">
          <tr>
            <td width="100%">
            <table border="0" cellpadding="0" style="border-collapse: collapse" width="387" cellspacing="0">
              <tr>
                <td width="388" colspan="4">
                <img border="0" src="images/head-rws.png" width="387" height="26"></td>
              </tr>
              <tr>
                <td width="200" bgcolor="#363435">&nbsp;&nbsp;&nbsp; Arrival<br>
&nbsp;&nbsp;&nbsp;<select id="arrivaly" name="arrivaly" class="flat">
<!--
	        	        <option value="2013">2013</option>
-->
				<option value="2014">2014</option>
	        	        </select>&nbsp;
            <span id="formarrivalm">
	        <select id="arrivalm" name="arrivalm" class="flat">
	        	        <option value="1" selected>Jan</option>
	        	        <option value="2" >Feb</option>
	        	        <option value="3" >Mar</option>
	        	        <option value="4" >Apr</option>
	        	        <option value="5" >Mei</option>
	        	        <option value="6" >Jun</option>
	        	        <option value="7" >Jul</option>
	        	        <option value="8" >Agt</option>
	        	        <option value="9" >Sep</option>
	        	        <option value="10" >Okt</option>
	        	        <option value="11" >Nov</option>
	        	        <option value="12" >Des</option>
	        	        </select>
	        </span>&nbsp;<span id="formarrivald"></span></td>
                <td width="80" bgcolor="#363435" colspan="2">Rooms<br>
               <select id="rooms" name="rooms" class="flat">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								</select></td>
                <td width="80" bgcolor="#363435">Night<br>
                <select id="nights" name="nights" class="flat">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								</select></td>
              </tr>
              <tr>
                <td width="237" bgcolor="#363435" colspan="2">
                <p dir="ltr">&nbsp;&nbsp;&nbsp;
                <input id="style" name="style" type="hidden">
				  <input id="arrival" name="arrival" type="hidden">
				  <input id="departure" name="departure" type="hidden">
				  <input class="flat" id="submitter" name="submitter" type="button" onClick="fixandsubmit()"  value="Submit"></td>
                <td width="120" bgcolor="#363435" valign="top">Children<br>
		                <select id="children" name="children" class="flat">
										<option value="0">0</option>
										<option value="1">1</option>
									        </select></td>
                <td width="80" bgcolor="#363435">Adults<br>
                <select id="adults" name="adults" class="flat">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								</select></td>
              </tr>
              <tr>
                <td width="425" colspan="4">
                <img border="0" src="images/bot.png" width="387" height="8"></td>
              </tr>
            </table>
            </td>
          </tr>
        </table>
		
        </td>
        <td width="415" valign="top" align="center">


        <table border="0" cellpadding="2" cellspacing="2" style="border-collapse: collapse" width="387">
          <tr>
            <td width="100%" valign="top">
<!--
		<img src="http://www.thetranshotel.com/images/offers4.png"></img>

-->



<!-- banner slideshow -->
<a href="#" data-reveal-id="myModal1"><img border="0"  src="images/offers-banner2.jpg"></img></a>


<!--
<ul class="ppt">
		<!--	
		<li><a href="#" data-reveal-id="myModal5"><img border="0" src="images/offers-banner6.jpg"></img></a></li>
		
        <li><a href="#" data-reveal-id="myModal4"><img border="0" src="images/offers-banner5.jpg"></img></a></li>
		
        <li><a href="#" data-reveal-id="myModal"><img border="0" src="images/offers-banner1.jpg"></img></a></li>
       
		<li><a href="#" data-reveal-id="myModal1"><img border="0"  src="images/offers-banner2.jpg"></img></a></li>


</ul>
 -->


<script type="text/javascript">
$('.ppt li:gt(0)').hide();
$('.ppt li:last').addClass('last');
var cur = $('.ppt li:first');

function animate() {
	cur.fadeOut( 1000 );
	if ( cur.attr('class') == 'last' )
		cur = $('.ppt li:first');
	else
		cur = cur.next();
	cur.fadeIn( 1000 );
}

$(function() {
	setInterval( "animate()", 4000 );
} );
</script>


<div id="myModal4" class="reveal-modal">
	<table width="624" border="0" cellpadding="2" cellspacing="2">
		<tr>
			<td colspan="2">
				<img src="images/banner-mice.jpg" width="624" height="209" />
			</td>
		</tr>
		<tr>
			<td width="16">&nbsp;
				
			</td>
			<td width="608" valign="top">
				<h1>
					<b>
						MICE EVENT EARLY BIRD PROMO
					</b>
				</h1>
				<p>Make an advanced booking with us to enjoy greater savings on  your travel and meeting in Bandung.<br />
&bull; Discount 10% off of Meeting Package for minimum 30 pax<br />
&bull; Discount 10% off of room rate for minimum 20 rooms  reserved per night<br />
&bull; Booking period until 31 March 2013<br />
&bull; This promotion is valid for stay or event until 30 June  2013</p>
				<p>For more information and reservation, please call +62 (022)  8734 8888 / NanditaDhea +62 (021) 7917 5000 ext 26002 or email  sales@thetranshotel.com</p>
				<p>*Terms and conditions apply</p></td>
		</tr>
	</table>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="myModal" class="reveal-modal">
	<table width="624" border="0" cellpadding="2" cellspacing="2">
		<tr>
			<td colspan="2">
				<img src="images/banner-gathering.jpg" width="624" height="209" />
			</td>
		</tr>
		<tr>
			<td width="16">&nbsp;
				
			</td>
			<td width="608" valign="top">
				<h1>
					<b>
						Gathering Package
					</b>
				</h1>
				<p>
					Gather your colleagues and friends at THE JEWEL BOX for special occasions such as arisan, birthday party, or private dinners. This intimate setting VIP room can accommodate up to 60 guests with its private
					services to make your event as memorable as it is seamless.
				</p>
				<p>
					Facilities: screen, private beverage corner, DJ set and music player.
				</p>
				<p>
					Monday - Thursday
					<br />
					8 Minimum revenue of IDR 5,000,000++
					<br />
					<br />
					• Complimentary SPA treatment voucher value IDR 500,000.
				</p>
			</td>
		</tr>
	</table>
	<a class="close-reveal-modal">&#215;</a>
</div>


<div id="myModal1" class="reveal-modal">
	<table width="624" border="0" cellpadding="2" cellspacing="2">
		<tr>
			<td colspan="2">
				<img src="images/banner-birthday.jpg" width="624" height="209" />
			</td>
		</tr>
		<tr>
			<td width="16">&nbsp;
				
			</td>
			<td width="608" valign="top">
				<h1>
					<b>
						Birthday Celebrations Happen Just Once A Year!
					</b>
				</h1>
				<p>
					Let us make it a memorable one at The Trans Luxury Hotel Bandung.
					<br />
					We are ready to offer a birthday experience you will never forget.
				</p>
				<p>
					For more information, please contact our Event Sales Team
					<br />
					at (022) 8734 8888 or email
					<a href="mailto:sales@thetranshotel.com">sales@thetranshotel.com</a>
					.
				</p>
			</td>
		</tr>
	</table>
	<a class="close-reveal-modal">&#215;</a>
</div>
</td>
          </tr>
        </table>
        

</td>
      </tr>
    </table>
</form>



  </center></td>
  </tr>
</table>

</body>
https://www.myfidelio.net/webui/AvailabilitySearch.aspx?chain=PARA&property=PATRAN
</html>
