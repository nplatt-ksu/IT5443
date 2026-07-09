<?php
$pageTitle = "Faculty Research Assistant Application";
include '../includes/header.php';
?>
  <h1>Faculty Research Assistant Application</h1>
  <p class="description">
    Use this form to apply for a Faculty Research Assistant position at the Robin and Doug Shore Innovation Center. Faculty members will review your application to match you with a research opportunity that fits your background and availability.
  </p>
  <p class="description">
    Please fill out every field below. Fields marked with an asterisk (*) are required. When you submit the form, your responses will be checked, and a confirmation of your submitted information will be shown to you.
  </p>

  <form id="application-form" action="process-application.php" method="post">
    <div class="form-group">
      <label for="full-name">Full Name *</label>
      <input type="text" id="full-name" name="full-name">
    </div>

    <div class="form-group">
      <label for="email">KSU Email Address *</label>
      <input type="text" id="email" name="email">
    </div>

    <div class="form-group">
      <label for="student-id">Student ID (9 digits) *</label>
      <input type="text" id="student-id" name="student-id">
    </div>

    <div class="form-group">
      <label for="phone">Phone Number *</label>
      <input type="text" id="phone" name="phone">
    </div>

    <div class="form-group">
      <label>Class Standing *</label>
      <label class="radio-label"><input type="radio" id="standing-undergrad" name="standing" value="Undergraduate"> Undergraduate</label>
      <label class="radio-label"><input type="radio" id="standing-grad" name="standing" value="Graduate"> Graduate</label>
    </div>

    <div class="form-group">
      <label for="research-area">Research Area of Interest *</label>
      <select id="research-area" name="research-area">
        <option value="">-- Select Research Area --</option>
        <option value="Cybersecurity">Cybersecurity</option>
        <option value="Data Science and AI">Data Science and AI</option>
        <option value="Robotics">Robotics</option>
        <option value="Bioinformatics">Bioinformatics</option>
        <option value="Web and Mobile Development">Web and Mobile Development</option>
        <option value="Cloud Computing">Cloud Computing</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <div class="form-group">
      <label>Days Available *</label>
      <label class="checkbox-label"><input type="checkbox" id="day-mon" name="days[]" value="Monday"> Monday</label>
      <label class="checkbox-label"><input type="checkbox" id="day-tue" name="days[]" value="Tuesday"> Tuesday</label>
      <label class="checkbox-label"><input type="checkbox" id="day-wed" name="days[]" value="Wednesday"> Wednesday</label>
      <label class="checkbox-label"><input type="checkbox" id="day-thu" name="days[]" value="Thursday"> Thursday</label>
      <label class="checkbox-label"><input type="checkbox" id="day-fri" name="days[]" value="Friday"> Friday</label>
    </div>

    <div class="form-group">
      <label for="gpa">Current GPA (0.0 - 4.0) *</label>
      <input type="text" id="gpa" name="gpa">
    </div>

    <div class="form-group">
      <label for="skills">Relevant Skills / Coursework *</label>
      <textarea id="skills" name="skills" rows="4"></textarea>
    </div>

    <div class="form-group">
      <label for="why-interested">Why are you interested in this position? *</label>
      <textarea id="why-interested" name="why-interested" rows="4"></textarea>
    </div>

    <button type="submit" id="submit-btn">Submit Application</button>
    <button type="reset" id="reset-btn">Reset</button>
  </form>

<?php
$pageScript = 'validation.js';
include '../includes/footer.php';
?>