<?php
$errors = array();

$fullName = isset($_POST['full-name']) ? trim($_POST['full-name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$studentId = isset($_POST['student-id']) ? trim($_POST['student-id']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$standing = isset($_POST['standing']) ? $_POST['standing'] : '';
$researchArea = isset($_POST['research-area']) ? $_POST['research-area'] : '';
$gpa = isset($_POST['gpa']) ? trim($_POST['gpa']) : '';
$skills = isset($_POST['skills']) ? trim($_POST['skills']) : '';
$whyInterested = isset($_POST['why-interested']) ? trim($_POST['why-interested']) : '';
$days = isset($_POST['days']) ? $_POST['days'] : array();

if ($fullName === '') {
  $errors[] = 'Please enter your full name.';
}

if ($email === '' || strpos($email, '@') === false) {
  $errors[] = 'Please enter a valid email address.';
}

if ($studentId === '' || strlen($studentId) !== 9) {
  $errors[] = 'Please enter your 9-digit KSU student ID.';
}

if ($phone === '') {
  $errors[] = 'Please enter your phone number.';
}

if ($standing !== 'Undergraduate' && $standing !== 'Graduate') {
  $errors[] = 'Please select your class standing.';
}

if ($researchArea === '') {
  $errors[] = 'Please select a research area.';
}

if (count($days) === 0) {
  $errors[] = 'Please select at least one available day.';
}

if ($gpa === '' || !is_numeric($gpa) || $gpa < 0 || $gpa > 4.0) {
  $errors[] = 'Please enter a valid GPA between 0.0 and 4.0.';
}

if ($skills === '') {
  $errors[] = 'Please describe your relevant skills or coursework.';
}

if ($whyInterested === '') {
  $errors[] = 'Please explain why you are interested in this position.';
}

$pageTitle = (count($errors) > 0) ? "Application Error" : "Application Confirmation";
include '../includes/header.php';
?>

<?php if (count($errors) > 0) { ?>
  <h1>There Was a Problem With Your Application</h1>
  <p class="description">Please correct the following and try again:</p>
  <ul class="error-list">
    <?php foreach ($errors as $error) { ?>
      <li><?php echo htmlspecialchars($error); ?></li>
    <?php } ?>
  </ul>
  <p><a href="research-assistant-application.php">Back to Application Form</a></p>
<?php } else { ?>
  <h1>Application Submitted Successfully</h1>
  <p class="description">Thank you, <?php echo htmlspecialchars($fullName); ?>. Your Faculty Research Assistant Application has been received. Below is a summary of the information you submitted.</p>

  <table class="confirmation-table">
    <tr>
      <th>Application Item</th>
      <th>Your Response</th>
    </tr>
    <tr>
      <td>Full Name</td>
      <td><?php echo htmlspecialchars($fullName); ?></td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td><?php echo htmlspecialchars($email); ?></td>
    </tr>
    <tr>
      <td>Student ID</td>
      <td><?php echo htmlspecialchars($studentId); ?></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><?php echo htmlspecialchars($phone); ?></td>
    </tr>
    <tr>
      <td>Class Standing</td>
      <td><?php echo htmlspecialchars($standing); ?></td>
    </tr>
    <tr>
      <td>Research Area of Interest</td>
      <td><?php echo htmlspecialchars($researchArea); ?></td>
    </tr>
    <tr>
      <td>Days Available</td>
      <td><?php echo htmlspecialchars(implode(', ', $days)); ?></td>
    </tr>
    <tr>
      <td>Current GPA</td>
      <td><?php echo htmlspecialchars($gpa); ?></td>
    </tr>
    <tr>
      <td>Relevant Skills / Coursework</td>
      <td><?php echo nl2br(htmlspecialchars($skills)); ?></td>
    </tr>
    <tr>
      <td>Reason for Interest</td>
      <td><?php echo nl2br(htmlspecialchars($whyInterested)); ?></td>
    </tr>
  </table>
<?php } ?>

<?php include '../includes/footer.php'; ?>