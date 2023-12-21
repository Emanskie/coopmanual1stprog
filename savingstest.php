<?php
include('assets/header.php');

// Function to get the recommended savings service based on user choices
function getRecommendedSavingsService($choices)
{
    switch ($choices['savings-goal']) {
        case 'time-deposit':
            return "Recommended Savings Service: Time Deposit";
        case 'share-capital':
            return "Recommended Savings Service: Share Capital";
        case 'savings-deposit':
            return "Recommended Savings Service: Savings Deposit";
        default:
            return "No specific recommendation based on your choices.";
    }
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store user's choices in an array
    $userChoices = [];
    foreach ($_POST as $key => $value) {
        $userChoices[$key] = $value;
    }

    // Get the recommended savings service based on user choices
    $recommendedService = getRecommendedSavingsService($userChoices);

    // Display user's choices and recommended service
    echo '<div id="result-card"">';
    echo "<h2>Your Choices:</h2>";
    echo "<ul>";

    foreach ($userChoices as $key => $value) {
        echo "<li>$key: $value</li>";
    }

    echo "</ul>";
    echo "<h2>$recommendedService</h2>";
    echo '</div>';
}
?>

<title>Savings</title>

<!-- Add your CSS styles here -->
<link href="assets/css/style.css" rel="stylesheet">

<body>
    <div id="container">
        <div id="container-header">
            <h1>SAVINGS ASSESSMENT</h1>
        </div>
        <br>
        <form id="savings-form" action="" method="post">
            <label id="assessment-label" for="financial-goal">1. What is your main financial goal at this
                moment?</label>
            <input type="radio" name="savings-goal" value="time-deposit"> Savings for the future <br>
            <input type="radio" name="savings-goal" value="share-capital"> Grow wealth<br>
            <input type="radio" name="savings-goal" value="savings-deposit"> Future purchase-Savings Deposit<br>
            <input type="radio" name="savings-goal" value="share-capital"> Debt repayment<br>
            <input type="radio" name="savings-goal" value="savings-deposit"> Emergency fund<br>
            <br>

            <label id="assessment-label" for="financial-goal">2. Are you looking for short-term or long-term financial
                solutions?</label>
            <input type="radio" name="term" value="short-term"> Short-term savings<br>
            <input type="radio" name="term" value="long-term"> Long-term savings<br>
            <br>

            <label id="assessment-label" for="financial-goal">3. Are you more inclined towards conservative, low-risk
                options, or are you open
                to exploring higher-risk, potentially higher-reward investments?</label>
            <input type="radio" name="risk" value="low-risk"> Low risk but potentially lower return<br>
            <input type="radio" name="risk" value="moderate-risk"> Moderate risk but potentially moderate return<br>
            <input type="radio" name="risk" value="high-risk"> Higher potential return but with some potential risk<br>
            <br>

            <label id="assessment-label" for="financial-goal">4. Considering your financial goal, describe the
                importance of accessing your
                savings.</label>
            <input type="radio" name="access" value="easy-access"> Easy access to funds<br>
            <input type="radio" name="access" value="limited-access"> Limited access<br>
            <input type="radio" name="access" value="no-access"> No access unless membership is terminated<br>
            <br>

            <label id="assessment-label" id="assessment-label" for="financial-goal">5. Considering your financial goal,
                do you prefer to withdraw your savings at
                any time you want?</label>
            <input type="radio" name="withdraw" value="yes"> Yes<br>
            <input type="radio" name="withdraw" value="no"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">6. Are you interested in being a shareholder of the
                cooperative?</label>
            <input type="radio" name="shareholder" value="yes"> Yes<br>
            <input type="radio" name="shareholder" value="no"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">7. Do you have a specific time frame in mind for your
                savings goal?</label>
            <input type="radio" name="time-frame" value="yes"> Yes<br>
            <input type="radio" name="time-frame" value="no"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">8. Which do you prefer to get in return for your
                investment?</label>
            <input type="radio" name="investment-return" value="dividend"> Dividend per annum<br>
            <input type="radio" name="investment-return" value="interest"> Interest rate per annum<br>
            <br>

            <input id="submit-btn" type="submit" value="Submit">
            <a href="\CoopManual\servicephp\savings.php" class="submit-btn">Go to Savings Page</a>

        </form>
         <!-- Container to display answers -->
         <div id="answers-container"></div>
    </div>
</body>

    <!-- Add your JavaScript here if needed -->
    <script>
    function showAnswers() {
        // Display user's choices without submitting the form
        var formFields = document.getElementById('savings-form').elements;
        var choices = "<h2>Your Choices:</h2><ul>";

        for (var i = 0; i < formFields.length; i++) {
            if (formFields[i].type !== 'button') {
                choices += "<li>" + formFields[i].name + ": " + formFields[i].value + "</li>";
            }
        }

        choices += "</ul>";

        // Get the recommendations based on user's choices
        var recommendations = getRecommendations(formFields);
        var recommendationsText = "<h2>Savings Service Recommendations:</h2><ul>";

        for (var i = 0; i < recommendations.length; i++) {
            recommendationsText += "<li>" + recommendations[i] + "</li>";
        }

        recommendationsText += "</ul>";

        // Display the choices and recommendations below the submit button
        var resultContainer = document.getElementById('answers-container');  // Corrected ID here
        resultContainer.innerHTML = choices + recommendationsText;


        // Append the button to the result container
        resultContainer.appendChild(goToSavingsButton);
    }

    // Function to get recommendations based on user choices
    function getRecommendations(formFields) {
        // Map user choices to savings services
        var choicesMap = {
            'time-deposit': 'Time Deposit',
            'share-capital': 'Share Capital',
            'savings-deposit': 'Savings Deposit'
        };

        // Define questions and corresponding recommendations
        var questions = [
            'savings-goal',
            'term',
            'risk',
            'access',
            'withdraw',
            'shareholder',
            'time-frame',
            'investment-return'
        ];

        var recommendations = [];

        // Loop through each question and get the corresponding recommendation
        for (var i = 0; i < questions.length; i++) {
            var question = questions[i];
            var answer = formFields[question].value;

            if (choicesMap.hasOwnProperty(answer)) {
                recommendations.push(choicesMap[answer]);
            }
        }

        return recommendations;
    }
</script>
<?php include('assets/footer.php') ?>