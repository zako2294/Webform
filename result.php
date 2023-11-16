<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $fullname = $_POST['fullname'];
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $quizDate = $_POST['quizDate'];
  $singleChoice = $_POST['singleChoice'];
  $multipleChoice = $_POST['multipleChoice'];
  $selectBox = $_POST['selectBox'];
  $codeTextarea = $_POST['codeTextarea'];

  // Create an array with the form data
  $formData = array(
    'fullname' => $fullname,
    'lastname' => $lastname,
    'firstname' => $firstname,
    'email' => $email,
    'quizDate' => $quizDate,
    'singleChoice' => $singleChoice,
    'multipleChoice' => $multipleChoice,
    'selectBox' => $selectBox,
    'codeTextarea' => $codeTextarea
  );

  // Print the form data using the print_r() function
  echo '<pre>';
  print_r($formData);
  echo '</pre>';
}
?>
