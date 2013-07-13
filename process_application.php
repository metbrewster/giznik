<?php
session_start();
ob_start();

if (isset($_POST['q13']) && $_POST['q13'] == 'c') {
	
						if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6']) && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9']) && isset($_POST['q10']) && isset($_POST['q11']) && isset($_POST['q12'])) {
							$question_1_answer = $_POST['q1'];
							$question_2_answer = $_POST['q2'];
							$question_3_answer = $_POST['q3'];
							$question_4_answer = $_POST['q4'];
							$question_5_answer = $_POST['q5'];
							$question_6_answer = $_POST['q6'];
							$question_7_answer = $_POST['q7'];
							$question_8_answer = $_POST['q8'];
							$question_9_answer = $_POST['q9'];
							$question_10_answer = $_POST['q10'];
							$question_11_answer = $_POST['q11'];
							$question_12_answer = $_POST['q12'];
						} else {
							$_SESSION['process_issue'] = 1;
							header("Location: apply.php?error=tqm");
						}
	
	
	
	
	
										$total_correct = 0;
										
										if ($question_1_answer == 'd') $total_correct++;
										if ($question_2_answer == 'b') $total_correct++;
										if ($question_3_answer == 'c') $total_correct++;
										if ($question_4_answer == 'b') $total_correct++;
										if ($question_5_answer == 'a') $total_correct++;
										
										if ($question_6_answer == 'b') $total_correct++;
										if ($question_7_answer == 'b') $total_correct++;
										if ($question_8_answer == 'c') $total_correct++;
										if ($question_9_answer == 'b') $total_correct++;
										
										if ($question_10_answer == 'a') $total_correct++;
										if ($question_11_answer == 'a') $total_correct++;
										if ($question_12_answer == 'd') $total_correct++;
										
										if ($total_correct > 10) {
											$_SESSION['quiz_marker'] = 1;
											$_SESSION['quiz_count'] = $total_correct;
											echo "scored: ".$_SESSION['quiz_count'];
           // die();
											header("Location: apply.php?c=1");
										} else {
											$_SESSION['quiz_marker'] = 0;
											$_SESSION['quiz_count'] = $total_correct;
           $_SESSION['Failed'] = 1;
											header("Location: apply.php");
										}

} else {
	$_SESSION['veri'] = false;
	header("Location: apply.php?error=vff");
}
?>