<?php
$pageTitle = "Student Eligibility Evaluator";
include '../includes/header.php';
?>
    <h1>Summer Student Assistant Eligibility Evaluator</h1>
    <p class="description">
      Fill out the form below to check whether you may qualify for a Summer Student Assistant position.
    </p>

    <form id="eligibility-form">
      <div class="form-group">
        <label for="student-name">Student Name</label>
        <input type="text" id="student-name" required>
      </div>

      <div class="form-group">
        <label for="student-email">Student Email</label>
        <input type="email" id="student-email" required>
      </div>

      <div class="form-group">
        <label for="student-status">Student Status</label>
        <select id="student-status" required>
          <option value="">-- Select Status --</option>
          <option value="undergraduate">Undergraduate</option>
          <option value="graduate">Graduate</option>
        </select>
      </div>

      <div id="undergrad-courses" class="course-section" hidden>
        <h2>Undergraduate Required Courses</h2>

        <div class="course-row">
          <label for="ug-course-1">CSE 3203 - Mobile System Overview</label>
          <select id="ug-course-1" class="grade-select">
            <option value="">Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
        </div>

        <div class="course-row">
          <label for="ug-course-2">IT 4213 - Mobile Web Development</label>
          <select id="ug-course-2" class="grade-select">
            <option value="">Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
        </div>

        <div class="course-row">
          <label for="ug-course-3">IT 1000 - IT Foundations</label>
          <select id="ug-course-3" class="grade-select">
            <option value="">Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
        </div>

        <div class="course-row">
          <label for="ug-course-4">IT 2500 - Beginning Database Management</label>
          <select id="ug-course-4" class="grade-select">
            <option value="">Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
        </div>
      </div>

      <div id="grad-courses" class="course-section" hidden>
        <h2>Graduate Required Courses</h2>

        <div class="course-row">
          <label for="grad-course-1">IT 7113 - Data Visualization</label>
          <select id="grad-course-1" class="grade-select">
            <option value="">Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
        </div>

        <div class="course-row">
          <label for="grad-course-2">IT 6713 - Business Intelligence</label>
          <select id="grad-course-2" class="grade-select">
            <option value="">Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
        </div>

        <div class="course-row">
          <label for="grad-course-3">IT 6521 - Advanced Database Administration</label>
          <select id="grad-course-3" class="grade-select">
            <option value="">Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
        </div>

        <div class="course-row">
          <label for="grad-course-4">IT 4872 - Cybersecurity and Log Management</label>
          <select id="grad-course-4" class="grade-select">
            <option value="">Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
          </select>
        </div>
      </div>

      <button type="button" id="evaluate-btn">Evaluate Eligibility</button>
    </form>

    <div id="result" class="result" hidden></div>
<?php
$pageScript = 'eligibility.js';
include '../includes/footer.php';
?>