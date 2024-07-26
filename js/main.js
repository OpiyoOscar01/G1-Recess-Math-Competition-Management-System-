(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });
    
})(jQuery);


document.addEventListener("DOMContentLoaded", function() {
const uploadSchoolsButton = document.querySelector("#upload-schools-button");
const uploadQuestionsButton = document.querySelector("#upload-questions-button");
const setChallengeParametersButton = document.querySelector("#set-challenge-parameters-button");
const viewChallengesButton = document.querySelector("#view-challenges-button");
const viewReportsButton = document.querySelector("#view-reports-button");

uploadSchoolsButton.addEventListener("click", uploadSchools);
uploadQuestionsButton.addEventListener("click", uploadQuestions);
setChallengeParametersButton.addEventListener("click", setChallengeParameters);
viewChallengesButton.addEventListener("click", viewChallenges);


viewReportsButton.addEventListener("click", viewReports);
} );
function uploadSchools() {
  // Code to upload schools to the database
}

function uploadQuestions() {
  // Code to upload questions to the database
}

function setChallengeParameters() {
  // Code to set challenge parameters (date, duration, number of questions)
}

function viewChallenges() {
  // Code to display challenges in the table
}

function viewReports() {
  // Code to display reports in the table
}

// Function to display challenges in the table
function displayChallenges(challenges) {
  const challengesTable = document.querySelector("#challenges-table");
  challengesTable.innerHTML = "";
  challenges.forEach((challenge) => {
    const challengeRow = document.createElement("tr");
    challengeRow.innerHTML = `
      <td>${challenge.name}</td>
      <td>${challenge.startDate}</td>
      <td>${challenge.endDate}</td>
      <td>${challenge.duration}</td>
      <td>${challenge.numberOfQuestions}</td>
    `;
    challengesTable.appendChild(challengeRow);
  });
}

// Function to display reports in the table
function displayReports(reports) {
  const reportsTable = document.querySelector("#reports-table");
  reportsTable.innerHTML = "";
  reports.forEach((report) => {
    const reportRow = document.createElement("tr");
    reportRow.innerHTML = `
      <td>${report.challengeName}</td>
      <td>${report.participantName}</td>
      <td>${report.score}</td>
      <td>${report.timeTaken}</td>
    `;
    reportsTable.appendChild(reportRow);
  });
}


// Add event listeners to buttons
document.addEventListener("DOMContentLoaded", function() {
    const registerButton = document.querySelector("#register-button");
    const viewChallengesButton = document.querySelector("#view-challenges-button");
    const attemptChallengeButton = document.querySelector("#attempt-challenge-button");
    
    registerButton.addEventListener("click", register);
    viewChallengesButton.addEventListener("click", viewChallenges);
    attemptChallengeButton.addEventListener("click", attemptChallenge);
});

// Register function
function register() {
    // Code to register pupil
}

// View Challenges function
function viewChallenges() {
    // Code to display challenges
}

// Attempt Challenge function
function attemptChallenge() {
    // Code to attempt challenge
}


// Get the filter options select element
const filterSelect = document.querySelector('.filter-options select');

// Get the challenges list element
const challengesList = document.querySelector('.challenges-list');

// Add event listener to the filter select element
filterSelect.addEventListener('change', filterChallenges);

// Function to filter challenges
function filterChallenges() {
  const filterValue = filterSelect.value;
  const challenges = challengesList.children;

  // Loop through each challenge element
  for (let i = 0; i < challenges.length; i++) {
    const challenge = challenges[i];
    const startDate = challenge.querySelector('.start-date').textContent;
    const endDate = challenge.querySelector('.end-date').textContent;
    const challengeName = challenge.querySelector('h3').textContent;
    const challengeStatus = challenge.querySelector('.status').textContent;

    // Filter challenges based on the selected option
    switch (filterValue) {
      case 'date':
        if (startDate >= filterValue) {
          challenge.style.display = 'block';
        } else {
          challenge.style.display = 'none';
        }
        break;
      case 'name':
        if (challengeName.includes(filterValue)) {
          challenge.style.display = 'block';
        } else {
          challenge.style.display = 'none';
        }
        break;
      case 'status':
        if (challengeStatus === filterValue) {
          challenge.style.display = 'block';
        } else {
          challenge.style.display = 'none';
        }
        break;
    }
  }
}



// Get the attempt challenge container element
const attemptChallengeContainer = document.querySelector('.attempt-challenge-container');

// Get the start challenge button element
const startChallengeButton = document.querySelector('.btn-start-challenge');

// Get the timer element
const timerElement = document.querySelector('#time-remaining');

// Get the question container element
const questionContainer = document.querySelector('.question-container');

// Get the options element
const optionsElement = document.querySelector('#options');

// Get the submit button element
const submitButton = document.querySelector('.btn-submit');

// Get the navigation buttons elements
const prevButton = document.querySelector('.btn-prev');
const nextButton = document.querySelector('.btn-next');
const skipButton = document.querySelector('.btn-skip');

// Set the timer interval
let timerInterval = null;

// Set the current question index
let currentQuestionIndex = 0;

// Set the questions array
const questions = [
  {
    question: 'Question 1',
    options: ['A) Option A', 'B) Option B', 'C) Option C', 'D) Option D'],
    answer: 'A'
  },
  {
    question: 'Question 2',
    options: ['A) Option A', 'B) Option B', 'C) Option C', 'D) Option D'],
    answer: 'B'
  },
  // Add more questions here
];

// Function to start the challenge
function startChallenge() {
  // Set the timer interval
  timerInterval = setInterval(decrementTimer, 1000);

  // Show the first question
  showQuestion(currentQuestionIndex);
}

// Function to decrement the timer
function decrementTimer() {
  const timeRemaining = parseInt(timerElement.textContent);
  if (timeRemaining > 0) {
    timerElement.textContent = timeRemaining - 1;
  } else {
    clearInterval(timerInterval);
    // Show the next question or end the challenge
  }
}

// Function to show a question
function showQuestion(index) {
  const question = questions[index];
  questionContainer.innerHTML = `
    <p id="question-text">${question.question}</p>
    <ul id="options">
      ${question.options.map((option) => `<li><input type="radio" name="option" value="${option}">${option}</li>`).join('')}
    </ul>
  `;
}

// Function to submit an answer
function submitAnswer() {
  const selectedOption = optionsElement.querySelector('input[type="radio"]:checked');
  const answer = selectedOption.value;
  const correctAnswer = questions[currentQuestionIndex].answer;
  if (answer === correctAnswer) {
    // Show the next question
    currentQuestionIndex++;
    showQuestion(currentQuestionIndex);
  } else {
    // Show an error message
  }
}

// Add event listeners
startChallengeButton.addEventListener('click', startChallenge);
submitButton.addEventListener('click', submitAnswer);
prevButton.addEventListener('click', previousQuestion);
nextButton.addEventListener('click', nextQuestion);
skipButton.addEventListener('click', skipQuestion);



// Get the reports container element
const reportsContainer = document.querySelector('.reports-container');

// Get the reports list element
const reportsList = document.querySelector('.reports-list');

// Function to add a report to the list
function addReport(report) {
  const reportHTML = `
    <div class="report">
      <h3>${report.name}</h3>
      <p>
        <span class="score">Score: ${report.score}%</span>
        <span class="time-taken">Time taken: ${report.timeTaken} minutes</span>
        <span class="date-completed">Date completed: ${report.dateCompleted}</span>
      </p>
      <button class="btn-orange btn-download-report">Download PDF Report</button>
    </div>
  `;
  reportsList.innerHTML += reportHTML;
}

// Function to download a report as a PDF
function downloadReport(report) {
  // Generate the PDF report content
  const reportContent = `
    <h1>${report.name}</h1>
    <p>Score: ${report.score}%</p>
    <p>Time taken: ${report.timeTaken} minutes</p>
    <p>Date completed: ${report.dateCompleted}</p>
  `;

  // Create a blob for the report content
  const blob = new Blob([reportContent], { type: 'application/pdf' });

  // Create a link to download the report
  const link = document.createElement('a');
  link.href = URL.createObjectURL(blob);
  link.download = `${report.name}.pdf`;
  link.click();
}

// Add event listeners to the download report buttons
reportsList.addEventListener('click', (e) => {
  if (e.target.classList.contains('btn-download-report')) {
    const report = e.target.closest('.report');
    const reportData = {
      name: report.querySelector('h3').textContent,
      score: report.querySelector('.score').textContent,
      timeTaken: report.querySelector('.time-taken').textContent,
      dateCompleted: report.querySelector('.date-completed').textContent
    };
    downloadReport(reportData);
  }
});

// Add sample reports to the list
addReport({
  name: 'Challenge 1',
  score: '80%',
  timeTaken: '25 minutes',
  dateCompleted: '2024-06-20'
});
addReport({
  name: 'Challenge 2',
  score: '90%',
  timeTaken: '30 minutes',
  dateCompleted: '2024-06-22'
});
// Add more reports here

