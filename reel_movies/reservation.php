<html>
<head>
<script>
change.k=0;
function change(newid){
document.getElementById(newid).src="seat1.jpg";

change.k=change.k+1;
if(change.k==1)
document.f4.one.value=newid.toString();
if(change.k==2)
document.f4.two.value=newid.toString();
if(change.k==3)
document.f4.three.value=newid.toString();
if(change.k==4)
document.f4.four.value=newid.toString();
if(change.k==5)
document.f4.five.value=newid.toString();
	}

</script>
</head>
<body>
<?php
   $conn=mysqli_connect("localhost","root","","online_movies");
			if(mysqli_connect_error($conn)){
			    echo"Error in connection ".mysqli_connect_error();
			}
			else{}
  echo "<a href='reservation.php'>REFRESH</a>";
  ?>
  
  <form action="temporary1.php" method="post" name="f4">
  <input type="hidden" name="one" value="0">
  <input type="hidden" name="two" value="0">
  <input type="hidden" name="three" value="0">
  <input type="hidden" name="four" value="0">
  <input type="hidden" name="five" value="0">
 <hr/><h4 align="center">Platinum</h4><hr/>
 <table>
 <tr>
 <th>A</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="1" onclick="change(this.id)"alt="yoyoy">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="2" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="3" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="4" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="5" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="6" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="7" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="8" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="9" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="10" onclick="change(this.id)"></td>
 </tr>
 <tr>
 <th>B</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="11" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="12" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="13" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="14" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="15" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="16" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="17" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="18" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="19" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="20" onclick="change(this.id)"></td>
 </tr>
 </table>
 <hr/><h4 align="center">Gold</h4><hr/>
<table>
 <tr>
 <th>A</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="21" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="22" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="23" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="24" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="25" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="26" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="27" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="28" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="29" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="30" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="31" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="32" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="33" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="34" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="35" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="36" onclick="change(this.id)"></td>
 </tr>
 <tr>
 <th>B</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="37" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="38" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="39" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="40" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="41" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="42" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="43" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="44" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="45" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="46" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="47" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="48" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="49" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="50" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="51" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="52" onclick="change(this.id)"></td>
 </tr>
 <tr>
 <th>C</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="53" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="54" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="55" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="56" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="57" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="58" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="59" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="60" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="61" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="62" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="63" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="64" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="65" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="66" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="67" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="68" onclick="change(this.id)"> </td>
 </tr>
 <tr>
 <th>D</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="69" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="70" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="71" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="72" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="73" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="74" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="75" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="76" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="77" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="78" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="79" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="80" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="81" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="82" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="83" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="84" onclick="change(this.id)"></td>
 </tr>
 <tr>
 <th>E</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="85" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="86" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="87" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="88" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="89" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="90" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="91" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="92" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="93" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="94" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="95" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="96" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="97" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="98" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="99" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="100" onclick="change(this.id)"></td>
 </tr>
 <tr>
 <th>F</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="101" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="102" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="103" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="104" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="105" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="106" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="107" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="108" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="109" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="110" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="111" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="112" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="113" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="114" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="115" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="116" onclick="change(this.id)"></td>
 </tr>
 </table>
<hr/><h4 align="center">Silver</h4><hr/>
<table>
<tr>
 <th>G</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="117" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="118" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="119" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="120" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="121" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="122" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="123" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="124" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="125" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="126" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="127" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="128" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="129" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="130" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="131" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="132" onclick="change(this.id)"></td>
 </tr>
 <tr>
 <th>H</th>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="133" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="134" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="135" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="136" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="137" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="138" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="139" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="140" onclick="change(this.id)"></td>
 <td></td>
 <td></td>
 <td align="center"><img src="seat.jpg" height="3%" width="10%" id="141" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="142" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="143" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="144" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="145" onclick="change(this.id)">&nbsp;&nbsp;
	<img src="seat.jpg" height="3%" width="10%" id="146" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="147" onclick="change(this.id)">&nbsp;&nbsp;
     <img src="seat.jpg" height="3%" width="10%" id="148" onclick="change(this.id)"></td>
 </tr>
 </table>
<br/><hr/><h3 align="center">Screen Is Here</h3><hr/>
<div align="center">
<input type="submit" value="Proceed">
<a href="home.php"><input type="button" value="Cancel"></a>
</div>
</form>
</body>
</html>