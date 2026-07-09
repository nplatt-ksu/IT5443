const statusSelect = document.getElementById('student-status');
const undergradSection = document.getElementById('undergrad-courses');
const gradSection = document.getElementById('grad-courses');
const evaluateBtn = document.getElementById('evaluate-btn');
const resultDiv = document.getElementById('result');

statusSelect.addEventListener('change', function () {
  undergradSection.hidden = true;
  gradSection.hidden = true;
  resultDiv.hidden = true;

  if (statusSelect.value === 'undergraduate') {
    undergradSection.hidden = false;
  } else if (statusSelect.value === 'graduate') {
    gradSection.hidden = false;
  }
});

function getGradePoint(letter) {
  if (letter === 'A') {
    return 4.0;
  } else if (letter === 'B') {
    return 3.0;
  } else if (letter === 'C') {
    return 2.0;
  } else if (letter === 'D') {
    return 1.0;
  } else if (letter === 'F') {
    return 0.0;
   }
}

evaluateBtn.addEventListener('click', function () {
  const name = document.getElementById('student-name').value.trim();
  const email = document.getElementById('student-email').value.trim();
  const status = statusSelect.value;

  if (name === '' || email === '' || status === '') {
    alert('Please fill out your name, email, and student status.');
    return;
  }

  let grade1, grade2, grade3, grade4, grade5;

  if (status === 'undergraduate') {
    grade1 = document.getElementById('ug-course-1').value;
    grade2 = document.getElementById('ug-course-2').value;
    grade3 = document.getElementById('ug-course-3').value;
    grade4 = document.getElementById('ug-course-4').value;
  } else {
    grade1 = document.getElementById('grad-course-1').value;
    grade2 = document.getElementById('grad-course-2').value;
    grade3 = document.getElementById('grad-course-3').value;
    grade4 = document.getElementById('grad-course-4').value;
  }

  if (grade1 === '' || grade2 === '' || grade3 === '' || grade4 === '') {
    alert('Please select a grade for every required course.');
    return;
  }

  const total = getGradePoint(grade1) + getGradePoint(grade2) + getGradePoint(grade3) + getGradePoint(grade4);
  const average = total / 4;

  let threshold;
  if (status === 'undergraduate') {
    threshold = 3.2;
  } else {
    threshold = 3.7;
  }

  let html = '';
  html += '<p>Average Grade Point: ' + average.toFixed(2) + '</p>';

  if (average > threshold) {
    html += '<p>Congratulations, ' + name + '! Based on your grades, you may qualify for a Summer Student Assistant position.</p>';
    html += '<p>You may continue to the application form to apply.</p>';
    html += '<p><a href="../Milestone 3/index.html">Continue to the Application Form</a></p>';
    resultDiv.className = 'result qualify';
  } else {
    html += '<p>Thank you for your interest, ' + name + '. Based on your grades, you do not currently meet the minimum requirement for this position.</p>';
    resultDiv.className = 'result not-qualify';
  }

  resultDiv.innerHTML = html;
  resultDiv.hidden = false;
});