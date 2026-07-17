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

  let errorMessage = '';

  if (name === '') {
    errorMessage = errorMessage + 'Please enter your full name.\n';
  }

  if (email === '' || email.indexOf('@') === -1) {
    errorMessage = errorMessage + 'Please enter a valid email address.\n';
  }

  if (studentId === '' || studentId.length !== 9) {
    errorMessage = errorMessage + 'Please enter your 9-digit KSU student ID.\n';
  }

  if (phone === '' || isNaN(phone) === true) {
    errorMessage = errorMessage + 'Please enter your phone number using only numbers.\n';
  }

  if (standingUndergrad.checked === false && standingGrad.checked === false) {
    errorMessage = errorMessage + 'Please select your class standing.\n';
  }

  if (researchArea === '') {
    errorMessage = errorMessage + 'Please select a research area.\n';
  }

  if (dayMon.checked === false && dayTue.checked === false && dayWed.checked === false && dayThu.checked === false && dayFri.checked === false) {
    errorMessage = errorMessage + 'Please select at least one available day.\n';
  }

  if (skills === '') {
    errorMessage = errorMessage + 'Please describe your relevant skills or coursework.\n';
  }

  if (whyInterested === '') {
    errorMessage = errorMessage + 'Please explain why you are interested in this position.\n';
  }

  if (errorMessage !== '') {
    alert(errorMessage);
    event.preventDefault();
  }
});