<?php
include 'config/database-config.php' ;
?>
<?php
$s ="";
$d ="";
if(isset($_POST['source'])){
		$s = $_POST['source'];
	}
if(isset($_POST['destination'])){
		$d = $_POST['destination'];
	}


$sql='SELECT * FROM bus_route WHERE Source = :source and Destination = :destination';

$query = $dbh->prepare($sql);

	$query->execute(array(':source' => $s, ':destination' => $d));
	//$result = $dbh->query($query);
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Find your Buses</h2>
  <form class="form-horizontal" method="POST" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Source">Source:</label>
      <div class="col-sm-10">
        <select class="form-control" id="source" name ="source">
    <option value="0">Where you are?</option>
<option value="MARUTHAMALAI">MARUTHAMALAI</option>
<option value="CHERAN MAA NAGAR">CHERAN MAA NAGAR</option>
<option value="GANDHIPURAM">GANDHIPURAM</option>
<option value="UKKADAM">UKKADAM</option>
<option value="SIHS COLONY">SIHS COLONY</option>
<option value="IRUGUR/SIHS COLONY">IRUGUR/SIHS COLONY</option>
<option value="SAIBABA COLONY">SAIBABA COLONY</option>
<option value="VADAVALLI">VADAVALLI</option>
<option value="RAILWAY STATION">RAILWAY STATION</option>
<option value="SAIBABA COLONY/RATHINAPURI">SAIBABA COLONY/RATHINAPURI</option>
<option value="PSG ARTS/ESI">PSG ARTS/ESI</option>
<option value="ONDIPUDUR">ONDIPUDUR</option>
<option value="NEW BUS STAND">NEW BUS STAND</option>
<option value="TOWN HALL">TOWN HALL</option>
<option value="MYLERIPALAYAM">MYLERIPALAYAM</option>
<option value="VEDAPATTI">VEDAPATTI</option>
<option value="SINGANALLUR">SINGANALLUR</option>
<option value="SIVANANDHA MILLS">SIVANANDHA MILLS</option>
<option value="EDAYARPALAYAM">EDAYARPALAYAM</option>
<option value="TELUNGUPALAYAM">TELUNGUPALAYAM</option>
<option value="RATHINAPURI">RATHINAPURI</option>
<option value="VADAVALLI">VADAVALLI</option>
<option value="POLYTECHNIC(AIR PORT)">POLYTECHNIC(AIR PORT)</option>
<option value="KANUVAI">KANUVAI</option>
<option value="SIHS COLONY(SINGANALLUR RLY STATION)
">SIHS COLONY(SINGANALLUR RLY STATION)</option>
<option value="SINGANALLUR/SOWRIPALAYAM">SINGANALLUR/SOWRIPALAYAM</option>
<option value="VADAVALLI /SUGARCANE INSTITUTE">VADAVALLI /SUGARCANE INSTITUTE</option>
<option value="RAILWAY STATION/GANDHIPURAM">RAILWAY STATION/GANDHIPURAM</option>
<option value="PACHAPALAYAM">PACHAPALAYAM</option>
<option value="MADUKKARAI">MADUKKARAI</option>
<option value="MADUKKARAI MARKET">MADUKKARAI MARKET</option>
<option value="SIDCO">SIDCO</option>
<option value="KURUMBAPALAYAM/MADUKARAI MARKET
">KURUMBAPALAYAM/MADUKARAI MARKET</option>
<option value="GANDHIPURAM/RAILWAY STATION">GANDHIPURAM/RAILWAY STATION</option>
<option value="AVARAM PALAYAM">AVARAM PALAYAM</option>
<option value="VEERAMPALAYAM">VEERAMPALAYAM</option>
<option value="STATE BANK COLONY">STATE BANK COLONY</option>
<option value="GANAPATHY">GANAPATHY</option>
<option value="KOVAIPUDUR">KOVAIPUDUR</option>
<option value="KG CHAVADI">KG CHAVADI</option>
<option value="GANAPATHY MAA NAGAR">GANAPATHY MAA NAGAR</option>
<option value="NALLAMPALAYAM">NALLAMPALAYAM</option>
<option value="K.PLM HU/SB COLONY">K.PLM HU/SB COLONY</option>
<option value="THUDIYALUR">THUDIYALUR</option>
<option value="GCT">GCT</option>
<option value="NEELAKONAMPALAYAM">NEELAKONAMPALAYAM</option>
<option value="UKKADAM/GANDHIPARK">UKKADAM/GANDHIPARK</option>
<option value="UKKADAM/GANDHIPURAM">UKKADAM/GANDHIPURAM</option>
<option value="SANKARA COLLEGE/GANDHIPURAM">SANKARA COLLEGE/GANDHIPURAM</option>
<option value="GANDHIPURAM/UKKDAM">GANDHIPURAM/UKKDAM</option>
<option value="SRINIVASA NAGAR">SRINIVASA NAGAR</option>
<option value="VIJAYALAKSHMI MILLS">VIJAYALAKSHMI MILLS</option>
<option value="SELVAPURAM">SELVAPURAM</option>
<option value="ANNA NAGAR">ANNA NAGAR</option>
<option value="SIVANANDHA COLONY">SIVANANDHA COLONY</option>
<option value="NACHIPALAYAM">NACHIPALAYAM</option>
<option value="KURUCHI HB/UKKADAM">KURUCHI HB/UKKADAM</option>
<option value="TOWN HALL">TOWN HALL</option>
<option value="GANDHIPURAM/TOWN HALL">GANDHIPURAM/TOWN HALL</option>
<option value="UKKADAM/SELVAPURAM">UKKADAM/SELVAPURAM</option>
<option value="GANDHIPURAM/SINGANALLUR">GANDHIPURAM/SINGANALLUR</option>
<option value="SINGANALLUR/UKKADAM">SINGANALLUR/UKKADAM</option>
<option value="GANDHIPURAM/UKKDAM">GANDHIPURAM/UKKDAM</option>
<option value="MANIYAKARAMPALAYAM/GANDIPURAM">MANIYAKARAMPALAYAM/GANDIPURA</option>
<option value="ONDIPUDUR/GANDHIPURAM">ONDIPUDUR/GANDHIPURAM</option>
<option value="MARUTHAMALAI/VADAVALLI">MARUTHAMALAI/VADAVALLI</option>
<option value="KOVILMEDU">KOVILMEDU</option>
<option value="UKKADAM/SINGANALLUR">UKKADAM/SINGANALLUR</option>
<option value="CIVIL AERO">CIVIL AERO</option>
<option value="KULATHUR/IRUGUR">KULATHUR/IRUGUR</option>
<option value="IRUGUR">IRUGUR</option>
<option value="NEELAKONAMPALAYAM">NEELAKONAMPALAYAM</option>
<option value="VILANKURUCHI">VILANKURUCHI</option>
<option value="UPPILI PALYAM">UPPILI PALYAM</option>
<option value="GANAPATHY HUDCO COLONY">GANAPATHY HUDCO COLONY</option>
<option value="ONDIPUDUR/SITRA">ONDIPUDUR/SITRA</option>
<option value="GANDHI MAA NAGAR/GANDHIPURAM">GANDHI MAA NAGAR/GANDHIPURAM</option>
<option value="PSG ARTS">PSG ARTS</option>
  </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Destination">Destination:</label>
      <div class="col-sm-10">          
  <select class="form-control" id="destination" name="destination">
    <option value="0">Where you need to go?</option>
<option value="AVARAMPALAYAM">AVARAMPALAYAM</option>
<option value="CHERAN MAA NAGAR">CHERAN MAA NAGAR</option>
<option value="KUMITIPATHY(HALT)">KUMITIPATHY(HALT)</option>
<option value="KUMITIPATHY/APPACHI GOUNDENPATHY">KUMITIPATHY/APPACHI GOUNDENPATHY</option>
<option value="KARAMADAI/PETTATHAPURAM">KARAMADAI/PETTATHAPURAM</option>
<option value="KARAMADAI">KARAMADAI</option>
<option value="KUPICHIPALAYAM/GKD SCHOOL">KUPICHIPALAYAM/GKD SCHOOL</option>
<option value="KOVAIPUDUR/ARIVOZHI NAGAR">KOVAIPUDUR/ARIVOZHI NAGAR</option>
<option value="PERRIAKULI(HALT)/SINGANALLUR(CUT)">PERRIAKULI(HALT)/SINGANALLUR(CUT)</option>
<option value="SAIBABA COLONY">SAIBABA COLONY</option>
<option value="KALAPATTY/SITRA">KALAPATTY/SITRA</option>
<option value="CHINNIYAMPALAYAM">CHINNIYAMPALAYAM</option>
<option value="KANUVAI">KANUVAI</option>
<option value="RAILWAY STATION">RAILWAY STATION</option>
<option value="KURUMBAPALAYAM ">KURUMBAPALAYAM </option>
<option value="GANDHIPURAM">GANDHIPURAM </option>
<option value="KEERANATHAM(HALT)  ">KEERANATHAM(HALT)  </option>
<option value="GANDHIPURAM(EXP)">GANDHIPURAM(EXP)</option>
<option value="Ukkadam  ">Ukkadam  </option>
<option value="Perianaickenpalayam  ">Perianaickenpalayam </option>
<option value="ANUVAVI SUBRAMANYA TEMPLE  ">ANUVAVI SUBRAMANYA TEMPLE </option>
<option value="VERRAPANDI PUDUR  ">VERRAPANDI PUDUR </option>
<option value="KURUMBAPALAYAM/CHINNATHADAGAM ">KURUMBAPALAYAM/CHINNATHADAGAM</option>
<option value="SOMAYAMPALYAM/KANUVAI">SOMAYAMPALYAM/KANUVAI</option>
<option value="CHINNA THADAGAM/KALV">CHINNA THADAGAM/KALV</option>
<option value="RAILWAY STATION">RAILWAY STATION</option>
<option value="THADAGAM(EXP)">THADAGAM(EXP)</option>
<option value="PREMIER NAGAR">PREMIER NAGAR</option>
<option value="VELANDAVALAM">VELANDAVALAM</option>
<option value="GANDHIPURAM/NEHRU NAGAR(VIA ESI)">GANDHIPURAM/NEHRU NAGAR(VIA ESI)</option>
<option value="SIDCO/MADUKARAI MARKET">SIDCO/MADUKARAI MARKET</option>
<option value="GANDHIPURAM(SLF)">GANDHIPURAM(SLF)</option>
<option value="NEW BUS STAND">NEW BUS STAND</option>
<option value="UKKADAM/KULATHUR">UKKADAM/KULATHUR</option>
<option value="NG PUDUR/KALIAMANGALAM">NG PUDUR/KALIAMANGALAM</option>
<option value="GANDHIPURAM ">GANDHIPURAM </option>
<option value="NEW BUS STAND">NEW BUS STAND </option>
<option value="SEMMEDU ">SEMMEDU </option>
<option value="PERUMAL KOIL PATHY/MOLAPALAYAM ">PERUMAL KOIL PATHY/MOLAPALAYAM </option>
<option value="ALANDURAI/NALLUR VAYAL ">ALANDURAI/NALLUR VAYAL</option>
<option value="ISHA YOGA CENTER/KOVAIPUDUR ">ISHA YOGA CENTER/KOVAIPUDUR </option>
<option value="KUNIYAMUTHUR ">KUNIYAMUTHUR </option>
<option value="CHINNA VEDAMPATTI/ANJUGAM NAGAR ">CHINNA VEDAMPATTI/ANJUGAM NAGAR </option>
<option value="MANIYAKARAN PALAYAM ">MANIYAKARAN PALAYAM</option>
<option value="AIR PORT(BRINDAVAN NAGAR) ">AIR PORT(BRINDAVAN NAGAR) </option>
<option value="KALAPATTY/ONDIPUDUR ">KALAPATTY/ONDIPU</option>
<option value="VAZHUKUPARAI/PALADU ">VAZHUKUPARAI/PALADU </option>
<option value="NANJUNDAPURAM">NANJUNDAPURAM</option>
<option value="VELLALORE">VELLALORE</option>
<option value="SULUR AERO">SULUR AERO</option>
<option value="KOMBEKATTU PUDUR/COLTONPET">KOMBEKATTU PUDUR/COLTONPET</option>
<option value="APPANAIKEN PATTI PUDUR">APPANAIKEN PATTI PUDUR</option>
<option value="ONDIPUDUR">ONDIPUDUR</option>
<option value="ONDIPUDUR/GANDHIPUAM">ONDIPUDUR/GANDHIPUAM</option>
<option value="PERUR">PERUR</option>
<option value="SAIBABA COLONY">SAIBABA COLONY</option>
<option value="POOCHIUR">POOCHIUR</option>
<option value="KEMBANUR">KEMBANUR</option>
<option value="NARASIPURAM">NARASIPURAM</option>
<option value="KEMBANUR/DEVARAYAPURAM">KEMBANUR/DEVARAYAPURAM</option>
<option value="DEVARAYAPURAM">DEVARAYAPURAM</option>
<option value="KURUMBAPALAYAM">KURUMBAPALAYAM</option>
<option value="SUGARCANE INSTITUTE">SUGARCANE INSTITUTE</option>
<option value="CHINNIYAMPALAYAM">CHINNIYAMPALAYAM</option>
<option value="KALAPATTY">KALAPATTY</option>
<option value="KALAPATTY/CHERIAMPALAYAM">KALAPATTY/CHERIAMPALAYAM</option>
<option value="VERRAPANDI PUDUR">VERRAPANDI PUDUR</option>
<option value="ANUVAVI SUBRAMANYA TEMPLE">ANUVAVI SUBRAMANYA TEMPLE</option>
<option value="IDIGARAI/ATHIPALAYAM">IDIGARAI/ATHIPALAYAM</option>
<option value="PRESS COLONY">PRESS COLONY</option>
<option value="GANAPATHY HUDCO COLONY(RENTAL)">GANAPATHY HUDCO COLONY(RENTAL)</option>
<option value="KANNAPA NAGAR/NALLAMPALAYAM">KANNAPA NAGAR/NALLAMPALAYAM</option>
<option value="KANNAMPALAYAM">KANNAMPALAYAM</option>
<option value="POLYTECHNIC/ELANGO NAGAR">POLYTECHNIC/ELANGO NAGAR</option>
<option value="NEHRU NAGAR/IDAYARPALAYAM">NEHRU NAGAR/IDAYARPALAYAM</option>
<option value="KMCH/ARSIPALAYAM">KMCH/ARSIPALAYAM</option>
<option value="KOVANUR/PALAMALAI">KOVANUR/PALAMALAI</option>
<option value="PRESS COLONY/ARIVOZHI NAGAR">PRESS COLONY/ARIVOZHI NAGAR</option>
<option value="THIRUMALAINAICKEN PALAYAM">THIRUMALAINAICKEN PALAYAM</option>
<option value="VELLAMADAI">VELLAMADAI</option>
<option value="KASTHURIPALAYAM">KASTHURIPALAYAM</option>
<option value="VEERAPANDI">VEERAPANDI</option>
<option value="KOVANUR(EXP)">KOVANUR(EXP)</option>
<option value="KINATHUKADAVU(EXP)">KINATHUKADAVU</option>
<option value="KINATHUKADAVU/KALLAPURAM(EXP)">KINATHUKADAVU/KALLAPURAM</option>
<option value="NALLATIPALAYAM/CHETTIKAPALAYAM(EXP)">NALLATIPALAYAM/CHETTIKAPALAYAM</option>
<option value="KARADIMADAI">KARADIMADAI</option>
<option value="THONDMUTHUR/KARDIMADAI">THONDMUTHUR/KARDIMADAI</option>
<option value="PN PUDUR/GANDHIPURAM">PN PUDUR/GANDHIPURAM</option>
<option value="KALLAPALAYAM/PONNANKANI">KALLAPALAYAM/PONNANKANI</option>
<option value="SELVAPURAM/TELUNGUPALAYAM">SELVAPURAM/TELUNGUPALAYAM</option>
<option value="MYLAMPATTI/CHINNIYAMPALAYAM">MYLAMPATTI/CHINNIYAMPALAYAM</option>
<option value="CHINNIYAMPALAYAM">CHINNIYAMPALAYAM</option>
<option value="MADUKKARAI MARKET">MADUKKARAI MARKET</option>
<option value="TIRUMALAYAM PALAYAM">TIRUMALAYAM PALAYAM</option>
<option value="GANAPATHY "> GANAPATHY </option>
<option value="TIRUMALAYAM PALAYAM ">TIRUMALAYAM PALAYAM </option>
<option value="KOVAIPUDUR ">KOVAIPUDUR </option>
<option value="GANAPATHY POLICE QUARTERS ">GANAPATHY POLICE QUARTERS </option>
<option value="KOVAIPUDUR/ARIVOZHI NAGAR ">KOVAIPUDUR/ARIVOZHI NAGAR </option>
<option value="ROTTIGOUNDANUR ">ROTTIGOUNDANUR </option>
<option value="PODANUR RAILWAY STATION ">PODANUR RAILWAY STATION </option>
<option value="CHERIAMPALAYAM/NEHRU NAGAR ">CHERIAMPALAYAM/NEHRU NAGAR </option>
<option value="SULUR/KALANGAL/SENGODA GDN ">SULUR/KALANGAL/SENGODA GDN </option>
<option value="VAGARAMPALAYAM/CHINNA KUILI ">VAGARAMPALAYAM/CHINNA KUILI </option>
<option value="SULUR/SENGATHURAI/KUMARAPALAYAM ">SULUR/SENGATHURAI/KUMARAPALAYAM </option>
<option value="VAGARAMPALAYAM/CHINNA KUILI ">VAGARAMPALAYAM/CHINNA KUILI </option>
<option value="SULUR/SENGATHURAI/KUMARAPALAYAM ">SULUR/SENGATHURAI/KUMARAPALAYAM </option>
<option value="APPANAIKEN PATTI PUDUR/SOMANUR ">APPANAIKEN PATTI PUDUR/SOMANUR </option>
<option value="NEELAMBUR ">NEELAMBUR </option>
<option value="GCT ">GCT </option>
<option value="PACHAPALAYAM/CHERAYAMPALAYAM ">PACHAPALAYAM/CHERAYAMPALAYAM </option>
<option value="VARADIAMPALAYAM/KARAYAMPALAYAM ">VARADIAMPALAYAM/KARAYAMPALAYAM </option>
<option value="TELUNGUPALAYAM/GANAPATHY MAA NAGAR ">TELUNGUPALAYAM/GANAPATHY MAA NAGAR </option>
<option value="ANNUR ">ANNUR </option>
<option value="ANNUR/KANUMPUDUR ">ANNUR/KANUMPUDUR </option>
<option value="ANNUR/PUTHUPALAYAM ">ANNUR/PUTHUPALAYAM </option>
<option value="ANNUR/KURUMPALAYAM ">ANNUR/KURUMPALAYAM </option>
<option value="KOVILPALAYAM ">KOVILPALAYAM </option>
<option value="RAMANATHAPURAM/GANDHIPURAM ">RAMANATHAPURAM/GANDHIPURAM </option>
<option value="SERANAIKENPALAYAM/NACHIPALAYAM ">SERANAIKENPALAYAM/NACHIPALAYAM </option>
<option value="PREMIER MILLS/THOPAMPALAYAM ">PREMIER MILLS/THOPAMPALAYAM </option>
<option value="VELANDAVALAM ">VELANDAVALAM </option>
<option value="VELANDAVALAM/KOMANDAPARAI ">VELANDAVALAM/KOMANDAPARAI </option>
<option value="     MADUKKARAI MARKET/KURUCHI HB/KK NAGAR "> MADUKKARAI MARKET/KURUCHI HB/KK NAGAR </option>
<option value="GANAPATHY MAANGAR ">GANAPATHY MAANGAR </option>
<option value="PRESS COLONY/THAMBU HIGH SCHOOL">PRESS COLONY/THAMBU HIGH SCHOOL</option>
<option value="NANJUNDAPURAM ">NANJUNDAPURAM </option>
<option value="SIVANANDHA COLONY ">SIVANANDHA COLONY </option>
<option value="PALATHURAI/EDAYARPALAYAM ">PALATHURAI/EDAYARPALAYAM </option>
<option value="GANAPATHY POLICE QUARTERS ">GANAPATHY POLICE QUARTERS </option>
<option value="KANCHIKONAMPALAYAM ">KANCHIKONAMPALAYAM </option>
<option value="AVARAMPALAYAM ">AVARAMPALAYAM </option>
<option value="IDAYARPALAYAM ">IDAYARPALAYAM </option>
<option value="VELLAMADI/IDIGARAI ">VELLAMADI/IDIGARAI </option>
<option value="KEERANATHAM">KEERANATHAM</option>
<option value="THONDMUTHUR">THONDMUTHUR</option>
<option value="VELLAKINARU">VELLAKINARU</option>
<option value="PAPAMPATTI/KALLAPALAYAM">PAPAMPATTI/KALLAPALAYAM</option>
<option value="GANDHIPARK">GANDHIPARK</option>
<option value="GANDHIPURAM">GANDHIPURAM</option>
<option value="SHOBA NAGAR">SHOBA NAGAR</option>
<option value="RAYAPALAYAM">RAYAPALAYAM</option>
<option value="KALAINGAR NAGAR">KALAINGAR NAGAR</option>
<option value="SARAVANA NAGAR">SARAVANA NAGAR</option>
<option value="SOMANUR">SOMANUR</option>
<option value="PN PUDUR/GANDHIPURAM">PN PUDUR/GANDHIPURAM</option>
<option value="KG CHAVADI">KG CHAVADI</option>
<option value="PERIA NAICKEN PALAYAM">PERIA NAICKEN PALAYAM</option>
<option value="VERRAPANDI">VERRAPANDII</option>
<option value="THUDIYALUR">THUDIYALUR</option>
<option value="NGGO COLONY">NGGO COLONY</option>

  </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="text" class="btn btn-default" onclick="showUser(source.value,destination.value)">Submit</button>
      </div>
    </div>
  </form>
  <br>
<div id="txtHint"></div>
</div>

<div class="container">
  
  <?php 
  if($query->rowCount() > 0){
  	print '<table class="table table-striped">';
    print '<thead>';
    print '<tr>';
    print '<th>Route No.</th>';
    print '<th>Source</th>';
    print '<th>Destination</th>';
    print '<th>Via</th>';
    print '</tr>
    </thead>
    <tbody>';
  while($row = $query->fetch(PDO::FETCH_ASSOC)) :
         print "<tr>";
        print "<td> ". $row["Route_No"] . "</td>";
        print "<td> ". $row["Source"] . "</td>";
        print "<td> ". $row["Destination"] . "</td>";
        print "<td> ". $row["Via"] . "</td>";
      	print "</tr>";
        endwhile;
  print '</tbody>';
  print '</table>';
  }
  
  ?>
  </div>
</body>
</html>