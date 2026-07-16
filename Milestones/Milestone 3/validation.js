const form = document.getElementById('application-form');

form.addEventListener('submit', function (event) {
  const name = document.getElementById('full-name').value.trim();
  const email = document.getElementById('email').value.trim();
  const studentId = document.getElementById('student-id').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const researchArea = document.getElementById('research-area').value;
  const skills = document.getElementById('skills').value.trim();
  const whyInterested = document.getElementById('why-interested').value.trim();

  const standingUndergrad = document.getElementById('standing-undergrad');
  const standingGrad = document.getElementById('standing-grad');

  const dayMon = document.getElementById('day-mon');
  const dayTue = document.getElementById('day-tue');
  const dayWed = document.getElementById('day-wed');
  const dayThu = document.getElementById('day-thu');
  const dayFri = document.getElementById('day-fri');

  if (name === '') {
    alert('Please enter your full name.');
    event.preventDefault();
    return;
  }

  if (email === '' || email.indexOf('@') === -1) {
    alert('Please enter a valid email address.');
    event.preventDefault();
    return;
  }

  if (studentId === '' || studentId.length !== 9) {
    alert('Please enter your 9-digit KSU student ID.');
    event.preventDefault();
    return;
  }

  if (phone === '' || isNaN(phone) === true) {
    alert('Please enter your phone number using only numbers.');
    event.preventDefault();
    return;
  }

  if (standingUndergrad.checked === false && standingGrad.checked === false) {
    alert('Please select your class standing.');
    event.preventDefault();
    return;
  }

  if (researchArea === '') {
    alert('Please select a research area.');
    event.preventDefault();
    return;
  }

  if (dayMon.checked === false && dayTue.checked === false && dayWed.checked === false && dayThu.checked === false && dayFri.checked === false) {
    alert('Please select at least one available day.');
    event.preventDefault();
    return;
  }

  if (skills === '') {
    alert('Please describe your relevant skills or coursework.');
    event.preventDefault();
    return;
  }

  if (whyInterested === '') {
    alert('Please explain why you are interested in this position.');
    event.preventDefault();
    return;
  }
});