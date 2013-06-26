<?php

if (isset($_SESSION['veri']) && $_SESSION['veri'] === false) {
	echo "<div class='uiBoxRed pam mtl'><b>Although you may have answered the questions correct, you did not meet the verification requirement</b><br><p>Remember, when answering the verification question, use the order of operations to work out the correct answer</p></div>";
	unset($_SESSION['veri']);
	die();
	// The user did not pass verify stage
} else if (isset($_SESSION['process_issue']) && $_SESSION['process_issue'] == 1) {
	echo "MISSING QUIZ"; die();
	// The user did not answer all the questions
} else if (isset($_SESSION['quiz_marker']) && $_SESSION['quiz_marker'] == 0) {
	echo "PASSED QUIZ"; die();
	// the user failed the quiz
} else if (isset($_SESSION['quiz_marker']) && $_SESSION['quiz_marker'] == 1) {
	echo "FAILED QUIZ"; die();
	// the user passed the quiz
} else {

?>

<style type="text/css">
	.application .question { border-bottom: 1px solid #eee; padding: 20px 0; }
</style>
<div class='inner exam'>
	<h1>Please complete the following questions.</h1>
	<form action='process_application.php' method='post' class='application'>
		<div class='question'><span>1. In order to remain an active pilot, how many flights must you complete per month?</span><br>
   <input type="radio" name="q1" id="q1a" value="a" />
   <label for="q1a"> 1</label><br>
   <input type="radio" name="q1" id="q1b" value="b" />
   <label for="q1b"> 4</label><br>
   <input type="radio" name="q1" id="q1c" value="c" />
   <label for="q1c"> 2</label><br>
   <input type="radio" name="q1" id="q1d" value="d" />
   <label for="q1d"> 3</label><br>
		</div>
		<div class='question'><span>2. What is the maximum vertical speed at touchdown we enforce?</span><br>
   <input type="radio" name="q2" id="q2a" value="a" />
   <label for="q2a"> -400 fpm</label><br>
   <input type="radio" name="q2" id="q2b" value="b" />
   <label for="q2b"> -500 fpm</label><br>
   <input type="radio" name="q2" id="q2c" value="c" />
   <label for="q2c"> -200 fpm</label><br>
   <input type="radio" name="q2" id="q2d" value="d" />
   <label for="q2d"> -100 fpm</label><br>
		</div>
		<div class='question'><span>3. As a VFR (Visual Flight Rules) pilot in the United States of America, what is the maximum altitude you are allowed to cruise at?</span><br />
   <input type="radio" name="q3" id="q3a" value="a" />
   <label for="q3a"> 18,500 ft</label><br>
   <input type="radio" name="q3" id="q3b" value="b" />
   <label for="q3b"> 10,500 ft</label><br>
   <input type="radio" name="q3" id="q3c" value="c" />
   <label for="q3c"> 17,500 ft</label><br>
   <input type="radio" name="q3" id="q3d" value="d" />
   <label for="q3d"> 18,000 ft</label><br>
  </div>
		<div class='question'><span>4. In the United States of America, at what altitude is the "flight level" system incorporated?</span><br />
   <input type="radio" name="q4" id="q4a" value="a" />
   <label for="q4a"> 10,000 ft</label><br>
   <input type="radio" name="q4" id="q4b" value="b" />
   <label for="q4b"> 18,000 ft</label><br>
   <input type="radio" name="q4" id="q4c" value="c" />
   <label for="q4c"> 24,000 ft</label><br>
   <input type="radio" name="q4" id="q4d" value="d" />
   <label for="q4d"> 16,000 ft</label><br></div>
		<div class='question' style='border-bottom: none;'><span>5. According to the ICAO airport designation system, what letter do the United States of America airport designators begin with?</span><br />
   <input type="radio" name="q5" id="q5a" value="a" />
   <label for="q5a"> K</label><br>
   <input type="radio" name="q5" id="q5b" value="b" />
   <label for="q5b"> E</label><br>
   <input type="radio" name="q5" id="q5c" value="c" />
   <label for="q5c"> L</label><br>
   <input type="radio" name="q5" id="q5d" value="d" />
   <label for="q5d"> C</label><br>
  </div>
		<hr>
		<div class='question'><span>Questions 6-9 involve this METAR:<br> KBOS 210154Z 22009KT 10SM CLR 01/M08 A2981 RMK A02 SLP095 T00111078</span></div>
		<div class='question'><span>6. What is the dewpoint in the given METAR?</span><br />
   <input type="radio" name="q6" id="q6a" value="a" />
   <label for="q6a"> 1 C</label><br>
   <input type="radio" name="q6" id="q6b" value="b" />
   <label for="q6b"> -8 C</label><br>
   <input type="radio" name="q6" id="q6c" value="c" />
   <label for="q6c"> -22 C</label><br>
   <input type="radio" name="q6" id="q6d" value="d" />
   <label for="q6d"> 8 C</label><br>
  </div>
		<div class='question'><span>7. What is the visibility indicated in the METAR?</span><br />
   <input type="radio" name="q7" id="q7a" value="a" />
   <label for="q7a"> 22 statute miles</label><br>
   <input type="radio" name="q7" id="q7b" value="b" />
   <label for="q7b"> 10 statute miles</label><br>
   <input type="radio" name="q7" id="q7c" value="c" />
   <label for="q7c"> 95 statute miles</label><br>
   <input type="radio" name="q7" id="q7d" value="d" />
   <label for="q7d"> 8 statute miles</label><br>
  </div>
		<div class='question'><span>8. At what time was the METAR updated?</span><br />
   <input type="radio" name="q8" id="q8a" value="a" />
   <label for="q8a"> 2101 Zulu</label><br>
   <input type="radio" name="q8" id="q8b" value="b" />
   <label for="q8b"> 2200 Zulu</label><br>
   <input type="radio" name="q8" id="q8c" value="c" />
   <label for="q8c"> 0154 Zulu</label><br>
   <input type="radio" name="q8" id="q8d" value="d" />
   <label for="q8d"> 2981 Zulu</label><br>
  </div>
		<div class='question' style='border-bottom: none;'><span>9. What are the sky conditions in the METAR?</span><br />
   <input type="radio" name="q9" id="q9a" value="a" />
   <label for="q9a"> Overcast at 8,000ft</label><br>
   <input type="radio" name="q9" id="q9b" value="b" />
   <label for="q9b"> Skies clear</label><br>
   <input type="radio" name="q9" id="q9c" value="c" />
   <label for="q9c"> Few at 10,000ft</label><br>
   <input type="radio" name="q9" id="q9d" value="d" />
   <label for="q9d"> Broken at 100ft</label><br>
  </div>
		<hr>
		<div class='question'><span>10. For an IFR westbound flight, which of the following is an appropriate cruising altitude?</span><br />
   <input type="radio" name="q10" id="q10a" value="a" />
   <label for="q10a"> FL380</label><br>
   <input type="radio" name="q10" id="q10b" value="b" />
   <label for="q10b"> FL350</label><br>
   <input type="radio" name="q10" id="q10c" value="c" />
   <label for="q10c"> FL365</label><br>
   <input type="radio" name="q10" id="q10d" value="d" />
   <label for="q10d"> FL390</label><br>
  </div>
		<div class='question'><span>11. In the United States of America, what is the largest classification of airspace?</span><br />
   <input type="radio" name="q11" id="q11a" value="a" />
   <label for="q11a"> Class A</label><br>
   <input type="radio" name="q11" id="q11b" value="b" />
   <label for="q11b"> Class B</label><br>
   <input type="radio" name="q11" id="q11c" value="c" />
   <label for="q11c"> Class C</label><br>
   <input type="radio" name="q11" id="q11d" value="d" />
   <label for="q11d"> Class B</label><br>
  </div>
		<div class='question'><span>12. In the United States of America, which of the following classifications of airspaces is not towered?</span><br />
   <input type="radio" name="q12" id="q12a" value="a" />
   <label for="q12a"> Class B</label><br>
   <input type="radio" name="q12" id="q12b" value="b" />
   <label for="q12b"> Class D</label><br>
   <input type="radio" name="q12" id="q12c" value="c" />
   <label for="q12c"> Class C</label><br>
   <input type="radio" name="q12" id="q12d" value="d" />
   <label for="q12d"> Class A</label><br>
  </div>
		<hr>
		<span style='color: #cc0000;'>Please allow 1 to 3 (one to three) business days for your exam to be graded.</span>
		<hr>
		<div class='question'><span>For verification purposes, choose the correct answer.</span><br />
			"What is two plus five multipled by three"<br>
   <input type="radio" name="q13" id="q13a" value="a" />
   <label for="q13a"> 20</label><br>
   <input type="radio" name="q13" id="q13b" value="b" />
   <label for="q13b"> 21</label><br>
   <input type="radio" name="q13" id="q13c" value="c" />
   <label for="q13c"> 17</label><br>
   <input type="radio" name="q13" id="q13d" value="d" />
   <label for="q13d"> 8</label><br>
  </div>
  <hr>
  <input type='submit' value='submit for processing' style='margin-bottom: 30px;'>
	</form>
</div>

<?php } ?>