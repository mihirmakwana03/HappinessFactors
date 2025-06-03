<!-- <div data-tf-live="01JWTPRS8EBXH1KXX4SN55RT7W"></div>
<script src="//embed.typeform.com/next/embed.js"></script> -->

<head>
    {{-- Other head elements like title, meta tags, etc. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<div class="quiz-container">
    <div id="quiz-title">Emotional Wellness Quiz</div>
    <div id="question-area">
        <div id="question-number"></div>
        <div id="question-text"></div>
        <div id="options">
            <!-- Options will be dynamically inserted here -->
        </div>
    </div>
    <div class="button-container">
        <button id="prev-button" style="display: none;">Previous</button>
        <button id="submit-button" style="display: none;">Submit</button>
        <button id="next-button" style="display: none;">Next</button>
    </div>
    
    <div id="results-area" style="display: none;">
        <div id="total-score"></div>
        <div id="rating"></div>
        <div id="rating-details"></div>
        <div class="social-links">
            <p>Connect with us:</p>
            <div class="social-icons-grid mb-4">
                <a href="https://www.facebook.com/HappinessFactors/" target="_blank" data-toggle="tooltip" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/happinessfaster" target="_blank" data-toggle="tooltip" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/happinessfactors/" target="_blank" data-toggle="tooltip" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/happinessfactors/" target="_blank" data-toggle="tooltip" title="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCicqa9p-mkaO5wUL2lllkrQ" target="_blank" data-toggle="tooltip" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.tumblr.com/happinessfactors" target="_blank" data-toggle="tooltip" title="Tumblr">
                    <i class="fab fa-tumblr"></i>
                </a>
            </div>
        </div>
        <button id="home-button" style="display: none;" class="btn btn-primary">Go to Homepage</button>
    </div>
</div>

<style>
    body {
        font-family: 'Helvetica Neue', sans-serif; /* More modern font */
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f4f7f6; /* Lighter background */
        margin: 0;
        overflow: hidden; /* Hide overflow during animations */
    }
    .quiz-container {
        background-color: #ffffff; /* White background */
        padding: 40px;
        border-radius: 8px; /* Slightly less rounded */
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); /* Softer shadow */
        text-align: center;
        max-width: 700px; /* Wider container */
        width: 90%;
        box-sizing: border-box; /* Include padding in width */
        position: relative; /* For absolute positioning of question area */
    }
    #quiz-title {
        font-size: 32px; /* Larger title */
        font-weight: 700; /* Bolder */
        margin-bottom: 30px;
        color: #333;
    }
    #question-area {
        margin-bottom: 30px;
        min-height: 150px; /* More space for questions */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center; /* Center content vertically */
        opacity: 1;
        transition: opacity 0.5s ease-in-out; /* Fade animation */
    }
    #question-area.fade-out {
        opacity: 0;
    }
    #question-area.fade-in {
        opacity: 1;
    }
    #question-number {
        font-size: 16px; /* Smaller question number */
        color: #777; /* More subtle color */
        margin-bottom: 15px;
    }
    #question-text {
        font-size: 24px; /* Larger question text */
        font-weight: 600; /* Semi-bold */
        margin-bottom: 30px;
        color: #000;
        line-height: 1.4; /* Improve readability */
    }
    #options {
        display: flex;
        flex-direction: column; /* Stack options vertically */
        gap: 12px; /* Space between options */
        width: 100%; /* Make options take full width */
        align-items: center; /* Center options */
    }
    #options label {
        background-color: #f9f9f9; /* Light gray background */
        padding: 15px 20px; /* More padding */
        border-radius: 6px; /* Slightly rounded */
        cursor: pointer;
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        width: 100%; /* Full width options */
        text-align: left; /* Align text left */
        border: 1px solid #eee; /* Subtle border */
        box-sizing: border-box;
    }
    #options label:hover {
        background-color: #e9e9e9; /* Darker hover */
        border-color: #ddd;
    }
    #options input[type="radio"] {
        display: none; /* Hide the default radio button */
    }
    #options input[type="radio"]:checked + label {
        background-color: #007bff; /* Primary blue */
        color: white;
        border-color: #007bff;
    }

    .button-container {
        display: flex;
        justify-content: space-between; /* Space out buttons */
        margin-top: 20px; /* Space above the button container */
    }

    .button-container button {
        padding: 12px 25px; /* More padding */
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, opacity 0.3s ease; /* Smooth transition */
        border: none; /* Remove default border */
    }

    #next-button,
    #submit-button {
        background-color: #17a2b8; /* Info blue color */
        color: white;
    }
    #next-button:hover:not(:disabled),
    #submit-button:hover:not(:disabled) {
        background-color: #138496; /* Darker hover for info blue */
    }

    #prev-button {
        background-color: #6c757d; /* Secondary gray color */
        color: white;
    }
    #prev-button:hover:not(:disabled) {
        background-color: #5a6268; /* Darker hover for gray */
    }

    .button-container button:disabled {
        opacity: 0.5; /* Indicate disabled state */
        cursor: not-allowed;
    }

    #results-area {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee; /* Separator line */
    }
    #total-score {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }
    #rating {
         font-size: 22px;
         font-weight: bold;
         color: #007bff;
         margin-bottom: 20px;
    }
    #rating-details {
        font-size: 18px;
        color: #555;
        line-height: 1.5;
    }

    .social-links {
        margin-top: 30px;
    }

    .social-links p {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
    }

     /* Social Icons Grid Styles from footer */
    .social-icons-grid {
        display: flex;
        justify-content: center;
        gap: 15px; /* Space between icons */
        margin-bottom: 1.5rem; /* Added margin below social icons */
    }

    .social-icons-grid a {
        font-size: 24px; /* Icon size */
        transition: all 0.3s ease; /* Transition for all properties */
        background-color: #ffffff; /* White background */
        border-radius: 50%; /* Circular background */
        width: 40px; /* Fixed width */
        height: 40px; /* Fixed height */
        display: inline-flex; /* Use flexbox for centering */
        justify-content: center; /* Center icon horizontally */
        align-items: center; /* Center icon vertically */
        text-decoration: none; /* Remove underline */
        box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Subtle shadow for depth */
        border: 1px solid #ddd; /* Subtle border */
    }

    /* Default icon color */
    .social-icons-grid a i {
        color: #555; /* Default grey color for icons */
        transition: color 0.3s ease; /* Smooth color transition */
    }

    /* Specific brand colors for icons */
    .social-icons-grid a .fa-facebook-f { color: #1877F2; } /* Facebook Blue */
    .social-icons-grid a .fa-twitter { color: #1DA1F2; } /* Twitter Blue (optional, based on image it looks grey) */
    .social-icons-grid a .fa-instagram { color: #C13584; } /* Instagram Pink */
    .social-icons-grid a .fa-linkedin { color: #0077B5; } /* LinkedIn Blue */
    .social-icons-grid a .fa-youtube { color: #FF0000; } /* YouTube Red */
    .social-icons-grid a .fa-tumblr { color: #36465D; } /* Tumblr Dark Blue */
    /* Keeping other icons grey as per image */

    .social-icons-grid a:hover {
        background-color: #f0f0f0; /* Light grey background on hover */
        border-color: #ccc; /* Darker border on hover */
    }

     .social-icons-grid a:hover i {
         color: #333; /* Darken icon on hover */
     }

     /* Style for the new Home button */
    #home-button {
        background-color: #28a745; /* Green color */
        color: white;
        border: none;
        padding: 12px 25px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 20px; /* Space above the button */
    }

    #home-button:hover {
        background-color: #218838; /* Darker green on hover */
    }

    /* Added keyframes for animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeOut {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(-20px); }
    }

    .fade-in-animation {
        animation: fadeIn 0.6s ease-out forwards;
    }

    .fade-out-animation {
        animation: fadeOut 0.6s ease-out forwards;
    }

</style>

<script>
    const questions = [
        { text: "How would you rate your ability to develop and maintain relationships?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        { text: "How well do you accept your mistakes?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        { text: "Do you like constructive criticism?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        { text: "Are you able to laugh at life?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        { text: "How good do you feel about yourself?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "How would you rate your self love?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "You get an unexpected challenge, how do feel about it?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you have your life under control?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "How well do you handle stress?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Are you grounded?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "How is your energy level?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you take time regularly to unwind?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you have control over your life?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you set priorities regularly?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you achieve goals regularly?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Are you well aware of your strengths?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Are you well aware of your weaknesses?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you feel good about your future?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "How good are you at expressing your feelings?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you look forward to the future?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] }
    ];

    const ratings = [
        { range: [20, 40], text: "You need to put serious efforts to get emotionally well, before it derails your life." },
        { range: [41, 60], text: "You need to make efforts to get emotionally well." },
        { range: [61, 80], text: "You have average emotional wellness & need some work." },
        { range: [81, 100], text: "You are on the right path. With little effort, you can achieve your dream life" }
    ];

    let currentQuestionIndex = 0;
    let userAnswers = new Array(questions.length).fill(null); // Use an array to store answers

    const questionNumberEl = document.getElementById('question-number');
    const questionTextEl = document.getElementById('question-text');
    const optionsEl = document.getElementById('options');
    const nextButton = document.getElementById('next-button');
    const prevButton = document.getElementById('prev-button');
    const submitButton = document.getElementById('submit-button');
    const homeButton = document.getElementById('home-button');
    const questionAreaEl = document.getElementById('question-area');
    const resultsAreaEl = document.getElementById('results-area');
    const totalScoreEl = document.getElementById('total-score');
    const ratingEl = document.getElementById('rating');
    const ratingDetailsEl = document.getElementById('rating-details');

    function displayQuestion() {
        // Apply fade-out animation before changing content
        questionAreaEl.classList.remove('fade-in-animation');
        questionAreaEl.classList.add('fade-out-animation');

        // Wait for animation to finish before updating content and fading in
        setTimeout(() => {
            const question = questions[currentQuestionIndex];
            questionNumberEl.textContent = `Question ${currentQuestionIndex + 1} of ${questions.length}`;
            questionTextEl.textContent = question.text;
            optionsEl.innerHTML = ''; // Clear previous options

            question.options.forEach(option => {
                const input = document.createElement('input');
                input.type = 'radio';
                input.name = 'question' + currentQuestionIndex;
                input.id = 'option' + currentQuestionIndex + '-' + option.value;
                input.value = option.value;

                const label = document.createElement('label');
                label.htmlFor = 'option' + currentQuestionIndex + '-' + option.value;
                label.textContent = option.text;

                optionsEl.appendChild(input);
                optionsEl.appendChild(label);

                // Pre-select the option if an answer for this question exists
                if (userAnswers[currentQuestionIndex] !== null && parseInt(userAnswers[currentQuestionIndex]) === option.value) {
                    input.checked = true;
                }
            });

            // Add event listener to handle option selection (auto-advance or enable submit)
            optionsEl.removeEventListener('change', handleOptionSelection); // Prevent duplicate listeners
            optionsEl.addEventListener('change', handleOptionSelection);

            // Update button visibility
            updateButtonVisibility();

            // Apply fade-in animation after updating content
            questionAreaEl.classList.remove('fade-out-animation');
            questionAreaEl.classList.add('fade-in-animation');

        }, 600); // Match timeout to animation duration
    }

    function handleOptionSelection(event) {
        const selectedOption = event.target;
        if (selectedOption.type === 'radio') {
            userAnswers[currentQuestionIndex] = parseInt(selectedOption.value);

            // If it's the last question, enable the submit button
            if (currentQuestionIndex === questions.length - 1) {
                submitButton.disabled = false;
            } else {
                 // Auto-advance to the next question for all other questions
                currentQuestionIndex++;
                displayQuestion();
            }
        }
    }

    function goToPreviousQuestion() {
        if (currentQuestionIndex > 0) {
            currentQuestionIndex--;
            displayQuestion();
        }
    }

    function updateButtonVisibility() {
        // Hide Next and Submit buttons by default
        nextButton.style.display = 'none';
        submitButton.style.display = 'none';

        // Show/hide Previous button
        if (currentQuestionIndex > 0) {
            prevButton.style.display = 'inline-block';
        } else {
            prevButton.style.display = 'none';
        }

        // Show Submit button on the last question if an option is selected
        if (currentQuestionIndex === questions.length - 1) {
             submitButton.style.display = 'inline-block';
             // Disable submit button initially if no option is selected
             if (userAnswers[currentQuestionIndex] === null) {
                 submitButton.disabled = true;
             } else {
                 submitButton.disabled = false;
             }
        } else if (currentQuestionIndex < questions.length - 1) {
            // Auto-advance means Next button is not needed except possibly for debugging
            // nextButton.style.display = 'inline-block';
        }

         // Hide quiz buttons and show home button on the results page
        if (currentQuestionIndex >= questions.length) {
            prevButton.style.display = 'none';
            nextButton.style.display = 'none';
            submitButton.style.display = 'none';
            homeButton.style.display = 'inline-block'; // Show home button
        } else {
             homeButton.style.display = 'none'; // Hide home button during quiz
        }
    }

    function calculateScore() {
        // Calculate score only from questions that have been answered
        return userAnswers.reduce((sum, score) => sum + (score || 0), 0);
    }

    function getRating(score) {
        for (const rating of ratings) {
            if (score >= rating.range[0] && score <= rating.range[1]) {
                return rating.text;
            }
        }
        return "Score out of range."; // Should not happen if ranges cover 20-100
    }

     function getRatingLabel(score) {
        if (score >= 81) return 'Excellent';
        else if (score >= 61) return 'Very Good';
        else if (score >= 41) return 'Good';
        else if (score >= 20) return 'Fair';
        else return 'Poor'; // Scores below 20 or with unanswered questions
    }

    function showResults() {
        questionAreaEl.style.display = 'none'; // Hide question area instantly
        nextButton.style.display = 'none'; // Hide button instantly
        prevButton.style.display = 'none'; // Hide previous button
        submitButton.style.display = 'none'; // Hide submit button

        const totalScore = calculateScore();
        totalScoreEl.textContent = `Total Score: ${totalScore}`;
        ratingDetailsEl.textContent = getRating(totalScore);
        ratingEl.textContent = `Rating: ${getRatingLabel(totalScore)}`;

        // Add a slight delay before showing results with fade-in
        resultsAreaEl.style.opacity = 0; // Start hidden
        resultsAreaEl.style.display = 'block'; // Make it block to allow fade-in
        resultsAreaEl.classList.add('fade-in-animation'); // Apply fade-in animation

        // Show the home button after results are displayed
        homeButton.style.display = 'inline-block'; // Show home button
    }

    function goToHomePage() {
        window.location.href = '/'; // Redirect to home page
    }

    //nextButton.addEventListener('click', nextQuestion); // Removed auto-advance
    prevButton.addEventListener('click', goToPreviousQuestion);
    homeButton.addEventListener('click', goToHomePage);
    submitButton.addEventListener('click', showResults);

    // Initial display with fade-in animation
    questionAreaEl.classList.add('fade-in-animation');
    displayQuestion();


    // Tooltip for social icons
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
