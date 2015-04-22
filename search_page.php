<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EasySchedule</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="container">
    <div id="header"><h1>EasySchedule</h1></div>
  <div id="menu"> <a href="index.php">HOME</a> &nbsp; &nbsp; &nbsp; &nbsp; 
                  <a href="aboutus.php">ABOUT US</a> &nbsp; &nbsp; &nbsp; &nbsp; 
                  <a href="login_start.php">LOGIN</a> &nbsp; &nbsp; &nbsp; &nbsp;
                  <a href="signup.php">SIGN UP</a>
  </div>
  <div id="sidebar">
    <h1>Account Management</h1>
  </div>
  <div id="main">
      <!--<style type="text/css">
.container {
	width: 500px;
	clear: both;
}
.container input {
	width: 100%;
	clear: both;
}
.container select {
	width: 100%;
	clear: both;
}
</style>-->
</head>
<body>
<h1>Welcome!</h1>
<div class="container">
<h2>Account Management</h2>
<form action="logout.php" method="post">
<input type="submit" value="Log-out" name="logoutsubmit">
</form>
<br>
<form action="deleteacc.php" method="post">
<input type="submit" value="Delete Account" name="deleteaccsubmit">
</form>
<br>
<form action="" method="post">
<label>Old Password</label><input type="password" name="oldpw">
<label>New Password</label><input type="password" name="newpw1">
<label>New Password</label><input type="password" name="newpw2"><br><br>
<input type="submit" value="Change Password" name="changepwsubmit">
</form>
<?php echo $changepwerror ?>
</div>
<br>
<br>
<div class="container">
<h2>Search Courses</h2>
<form action="" method="post">
<label>Keyword</label><input type="text" name="keyword"><br>
<!---
<label>College</label><select name="collegedd">
<option value="NONE">Not Specified</option>
<option value="ACES">ACES - Agricultural, Consumer and Environmental Sciences</option>
<option value="AHS">AHS - Applied Health Sciences</option>
<option value="ARMF">ARMF - Armed Forces</option>
<option value="AVI">AVI - Institute of Aviation</option>
<option value="CBA">CBA - College of Business</option>
<option value="ED">ED - College of Education</option>
<option value="ENG">ENG - College of Engineering</option>
<option value="ENVC">ENVC - Environmental Council</option>
<option value="FAA">FAA - Fine and Applied Arts</option>
<option value="GRAD">GRAD - Graduate College</option>
<option value="GS">GS - Division of General Studies</option>
<option value="LAS">LAS - Liberal Arts and Sciences</option>
<option value="LAW">LAW - College of Law</option>
<option value="LIS">LIS - Library and Information Sciences</option>
<option value="MDIA">MDIA - College of Media</option>
<option value="PAP">PAP - Provost Academic Programs</option>
<option value="SLER">SLER - School of Labor and Employee Relations</option>
<option value="SOCW">SOCW - School of Social Work</option>
<option value="VETM">VETM - Veterinary Medicine</option>
</select><br>--->
<label>Subject</label><select name="subjectdd">
<option value="NONE">Not Specified</option>
<option value="AAS">AAS - Asian American Studies</option>
<option value="ABE">ABE - Agricultural and Biological Engineering</option>
<option value="ACCY">ACCY - Accountancy</option>
<option value="ACE">ACE - Agricultural and Consumer Economics</option>
<option value="ACES">ACES - Agricultural, Consumer and Environmental Sciences</option>
<option value="ADV">ADV - Advertising</option>
<option value="AE">AE - Aerospace Engineering</option>
<option value="AFAS">AFAS - Air Force Aerospace Studies</option>
<option value="AFRO">AFRO - African American Studies</option>
<option value="AFST">AFST - African Studies</option>
<option value="AGCM">AGCM - Agricultural Communications</option>
<option value="AGED">AGED - Agricultural Education</option>
<option value="AHS">AHS - Applied Health Sciences Courses</option>
<option value="AIS">AIS - American Indian Studies</option>
<option value="ANSC">ANSC - Animal Sciences</option>
<option value="ANTH">ANTH - Anthropology</option>
<option value="ARAB">ARAB - Arabic</option>
<option value="ARCH">ARCH - Architecture</option>
<option value="ART">ART - Art</option>
<option value="ARTD">ARTD - Art--Design</option>
<option value="ARTE">ARTE - Art--Education</option>
<option value="ARTF">ARTF - Art--Foundation</option>
<option value="ARTH">ARTH - Art--History</option>
<option value="ARTS">ARTS - Art--Studio</option>
<option value="ASST">ASST - Asian Studies</option>
<option value="ASTR">ASTR - Astronomy</option>
<option value="ATMS">ATMS - Atmospheric Sciences</option>
<option value="AVI">AVI - Aviation</option>
<option value="BADM">BADM - Business Administration</option>
<option value="BASQ">BASQ - Basque</option>
<option value="BCS">BSC - Bosnian-Croatian-Serbian</option>
<option value="BIOC">BIOC - Biochemistry</option>
<option value="BIOE">BIOE - Bioengineering</option>
<option value="BIOL">BIOL - Biology</option>
<option value="BIOP">BIOP - Biophysics</option>
<option value="BMNA">BMNA - Bamana</option>
<option value="BTW">BTW - Business and Technical Writing</option>
<option value="BULG">BULG - Bulgarian</option>
<option value="BUS">BUS - Business</option>
<option value="CAS">CAS - Center for Advanced Study</option>
<option value="CATL">CATL - Catalan</option>
<option value="CB">CB - Comparative Biosciences</option>
<option value="CDB">CDB - Cell and Developmental Biology</option>
<option value="CEE">CEE - Civil and Environmental Engineering</option>
<option value="CHBE">CHBE - Chemical and Biomolecular Engineering</option>
<option value="CHEM">CHEM - Chemistry</option>
<option value="CHIN">CHIN - Chinese</option>
<option value="CHLH">CHLH - Community Health</option>
<option value="CHP">CHP - Campus Honors Program Courses</option>
<option value="CI">CI - Curriculum and Instruction</option>
<option value="CIC">CIC - Committee on Inst Cooperation</option>
<option value="CLCV">CLCV - Classical Civilization</option>
<option value="CMN">CMN - Communication</option>
<option value="CPSC">CPSC - Crop Sciences</option>
<option value="CS">CS - Computer Science</option>
<option value="CSE">CSE - Computational Science and Engineering</option>
<option value="CW">CW - Creative Writing</option>
<option value="CWL">CWL - Comparative and World Literature</option>
<option value="CZCH">CZCH - Czech</option>
<option value="DANC">DANC - Dance</option>
<option value="EALC">EALC - East Asian Language and Culture</option>
<option value="ECE">ECE - Electrical and Computer Engineering</option>
<option value="ECON">ECON - Economics</option>
<option value="EDPR">EDPR - Educational Practice</option>
<option value="EDUC">EDUC - Education</option>
<option value="EIL">EIL - English as an International Language</option>
<option value="ENG">ENG - Engineering</option>
<option value="ENGH">ENGH - Engineering Honors</option>
<option value="ENGL">ENGL - English</option>
<option value="ENSU">ENSU - Environmental Sustainability</option>
<option value="ENT">ENT - Entomology</option>
<option value="ENVS">ENVS - Environmental Studies</option>
<option value="EOL">EOL - Educational Organization and Leadership</option>
<option value="EPS">EPS - Educational Policy Studies</option>
<option value="EPSY">EPSY - Educational Psychology</option>
<option value="ESE">ESE - Earth, Society, and Environment</option>
<option value="ESL">ESL - English as a Second Language</option>
<option value="EURO">EURO - European Union Studies</option>
<option value="FAA">FAA - Fine and Applied Arts</option>
<option value="FIN">FIN - Finance</option>
<option value="FR">FR - French</option>
<option value="FSHN">FSHN - Food Science and Human Nutrition</option>
<option value="GC">GC - Graduate College</option>
<option value="GE">GE - General Engineering</option>
<option value="GEOG">GEOG - Geography</option>
<option value="GEOL">GEOL - Geology</option>
<option value="GER">GER - German</option>
<option value="GLBL">GLBL - Global Studies</option>
<option value="GMC">GMC - Germanic</option>
<option value="GRK">GRK - Greek</option>
<option value="GRKM">GRKM - Modern Greek</option>
<option value="GS">GS - General Studies</option>
<option value="GWS">GWS - Gender and Womens Studies</option>
<option value="HCD">HCD - Human and Community Development</option>
<option value="HDES">HDES - Human Dimensions of Environmental Systems</option>
<option value="HDFS">HDFS - Human Development and Family Studies</option>
<option value="HEBR">HEBR - Hebrew, Modern and Classic</option>
<option value="HIST">HIST - History</option>
<option value="HNDI">HNDI - Hindi</option>
<option value="HORT">HORT - Horticulture</option>
<option value="HRD">HRD - Human Resource Development</option>
<option value="HRE">HRE - Human Resource Education</option>
<option value="HUM">HUM - Humanities Courses</option>
<option value="IB">IB - Integrative Biology</option>
<option value="IE">IE - Industrial Engineering</option>
<option value="IHLT">IHLT - i-Health Program</option>
<option value="INFO">INFO - Informatics</option>
<option value="ITAL">ITAL - Italian</option>
<option value="JAPN">JAPN - Japanese</option>
<option value="JOUR">JOUR - Journailism</option>
<option value="JS">JS - Jewish Studies</option>
<option value="KIN">KIN - Kinesiology</option>
<option value="KOR">KOR - Korean</option>
<option value="LA">LA - Landscape Architecture</option>
<option value="LAS">LAS - Liberal Arts and Sciences</option>
<option value="LAST">LAST - Latin American and Caribbean Studies</option>
<option value="LAT">LAT - Latin</option>
<option value="LAW">LAW - Law</option>
<option value="LER">LER - Labor and Employment Relations</option>
<option value="LGLA">LGLA - Lingala</option>
<option value="LING">LING - Linguistics</option>
<option value="LIS">LIS - Library and Information Science</option>
<option value="LLS">LLS - Latina/Latino Studies</option>
<option value="MACS">MACS - Media and Cinema Studies</option>
<option value="MATH">MATH - Mathematics</option>
<option value="MBA">MBA - Regular MBA Program Administration</option>
<option value="MCB">MCB - Molecular and Cell Biology</option>
<option value="MDIA">MDIA - Media</option>
<option value="MDVL">MDVL - Medieval Studies</option>
<option value="ME">ME - Mechanical Engineering</option>
<option value="MICR">MICR - Microbiology</option>
<option value="MILS">MILS - Military Science</option>
<option value="MIP">MIP - Molecular and Integrative Physiology</option>
<option value="MSE">MSE - Materials Science and Engineering</option>
<option value="MSP">MSP - Medical Scholars Program</option>
<option value="MUS">MUS - Music</option>
<option value="MUSE">MUSE - Museum Studies</option>
<option value="NEUR">NEUR - Neuroscience</option>
<option value="NPRE">NPRE - Nuclear, Plasma, and Radiological Engineering</option>
<option value="NRES">NRES - Natural Resources and Environmental Sciences</option>
<option value="NS">NS - Naval Science</option>
<option value="NUTR">NUTR - Nutritional Sciences</option>
<option value="PATH">PATH - Pathobiology</option>
<option value="PBIO">PBIO - Plant Biology</option>
<option value="PERS">PERS - Persian</option>
<option value="PHIL">PHIL - Philosophy</option>
<option value="PHYS">PHYS - Physics</option>
<option value="PLPA">PLPA - Plant Pathology</option>
<option value="POL">POL - Polish</option>
<option value="PORT">PORT - Portuguese</option>
<option value="PS">PS - Political Science</option>
<option value="PSM">PSM - Professional Science Masters Program</option>
<option value="PSYC">PSYC - Psychology</option>
<option value="REES">REES - Russian, East European and Eurasian Studies</option>
<option value="REHB">REHB - Rehabilitation Counseling</option>
<option value="RHET">RHET - Rhetoric and Composition</option>
<option value="RLST">RLST - Religious Studies</option>
<option value="RMLG">RMLG - Romance Linguistics</option>
<option value="RSOC">RSOC - Rural Sociology</option>
<option value="RST">RST - Recreation, Sport, and Tourism</option>
<option value="RUSS">RUSS - Russian</option>
<option value="SAME">SAME - South Asian and Middle Eastern Studies</option>
<option value="SCAN">SCAN - Scandinavian</option>
<option value="SHS">SHS - Speech and Hearing Science</option>
<option value="SLAV">SLAV - Slavic</option>
<option value="SLCL">SLCL - Literatures, Cultures and Linguistics</option>
<option value="SLS">SLS - Second Language Studies</option>
<option value="SNSK">SNSK - Sanskrit</option>
<option value="SOC">SOC - Sociology</option>
<option value="SOCW">SOCW - Social Work</option>
<option value="SPAN">SPAN - Spanish</option>
<option value="SPED">SPED - Special Education</option>
<option value="STAT">STAT - Statistics</option>
<option value="SWAH">SWAH - Swahili</option>
<option value="TAM">TAM - Theoretical and Applied Mechanics</option>
<option value="TE">TE - Technology Entrepreneurship</option>
<option value="THEA">THEA - Theatre</option>
<option value="TMGT">TMGT - Technology and Management Courses</option>
<option value="TRST">TRST - Translation Studies</option>
<option value="TSM">TSM - Technical Systems Management</option>
<option value="TURK">TURK - Turkish</option>
<option value="UKR">UKR - Ukrainian</option>
<option value="UP">UP - Urban and Regional Planning</option>
<option value="VCM">VCM - Veterinary Clinical Medicine</option>
<option value="VM">VM - Veterinary Medicine Courses</option>
<option value="WLOF">WLOF - Wolof</option>
<option value="WRIT">WRIT - Writing Studies</option>
<option value="YDSH">YDSH - Yiddish</option>
<option value="ZULU">ZULU - Zulu</option>
</select><br>
<label>Credit Hours</label><input type="number" name="credits"><br>
<!---<label>Part of Term</label><input type="text" name="partofterm"><br>--->
<label>Start Time</label><input type="number" name="stime"><br>
<label>End Time</label><input type="number" name="etime"><br>
<label>Exact Time</label><input type="checkbox" name="cbtime"><br>
<label>Online</label><input type="checkbox" name="online"><br>
<input type="submit" value="Search" name="searchsubmit"><br><br>
</form>
</div>
</body>
  </div>
  <div id="footer"> &copy;2007 Keep it Simple &nbsp;<span class="separator">|</span>&nbsp; Design by <a href="http://www.realitysoftware.ca">Reality Software</a> </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
