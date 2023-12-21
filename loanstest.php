<?php
include('assets/header.php');

// Function to get the recommended loan services based on user choices
function getRecommendedLoanServices($choices)
{
    $services = [];

    switch ($choices['savings-goal']) {
        case 'time-deposit':
            $services[] = "MIGS - Micro Loan, Educational Loan, GAP, Enhanced Petty Cash Loan, Personal Loan, Medical Emergency Loan, Back-to-Back Loan, Enhanced Car Financing Loan, Incentive Loan";
            break;
        case 'share-capital':
            $services[] = "Entrepreneur Member - MSME 1";
            break;
        case 'savings-deposit':
            $services[] = "Employed - MSME 2, Incentive Loan";
            $services[] = "Pensioners - Pensioner’s Loan";
            break;
        default:
            break;
    }

    switch ($choices['term']) {
        case 'short-term':
            $services[] = "For small businesses or personal needs - Micro loan, MSME 1, Enhanced Petty Cash Loan, Personal Loan, Educational Loan, Medical Emergency Loan, Gap Loan";
            $services[] = "For unexpected medical expenses - Pensioner’s Loan, Salary Loan";
            break;
        case 'long-term':
            $services[] = "For purchasing gadgets and appliances - Enhanced Car Financing Loan";
            $services[] = "For asset/equipment acquisition, working capital, business expansion - Credit line loan, MSME 2, MSME 1";
            $services[] = "For employees looking to borrow against their salary or bonuses - Salary Loan, Bonus/Incentive Loan, LGU Salary Loan";
            $services[] = "For purchasing or refinancing a vehicle - Enhanced Car Financing Loan";
            $services[] = "For secured financing using existing assets - Back-to-Back Loan";
            $services[] = "For educational expenses - Educational Loan";
            $services[] = "For retired individuals with a pension - Pensioner’s Loan";
            break;
        default:
            break;
    }

    switch ($choices['risk']) {
        case 'low-risk':
            $services[] = "Excellent - Personal Loans, Enhanced Car Financing Loans, or Gadget and Appliance Loans, MSME Loan";
            break;
        case 'moderate-risk':
            $services[] = "Good - Personal Loans, Enhanced Petty Cash Loans, or Bonus/Incentive Loan, Educational Loan, Salary Loan";
            break;
        case 'high-risk':
            $services[] = "Fair - Micro Loan, Pensioner’s Loan";
            $services[] = "Poor - Personal Loan, LGU Salary Loan";
            break;
        default:
            break;
    }

    switch ($choices['access']) {
        case 'easy-access':
            $services[] = "Easy access to funds - Micro Loan, Enhanced Petty Cash Loan, Personal Loan, Educational Loan, Medical Emergency Loan, Gap Loan";
            break;
        case 'limited-access':
            $services[] = "Limited access - Time Deposit";
            break;
        case 'no-access':
            $services[] = "No access unless membership is terminated - Share Capital";
            break;
        default:
            break;
    }

    switch ($choices['withdraw']) {
        case 'yes':
            $services[] = "Yes - Savings Deposit, Micro Loan, MSME 1, MSME 2, Educational Loan, GAP, Enhanced Petty Cash Loan, Personal Loan, Salary Loan, LGU Salary Loan, Pensioner’s Loan, Medical Emergency Loan, Back-to-Back Loan, Enhanced Car Financing Loan";
            break;
        case 'no':
            $services[] = "No - Time Deposit, Share Capital";
            break;
        default:
            break;
    }

    switch ($choices['shareholder']) {
        case 'yes':
            $services[] = "Yes - Share Capital";
            break;
        case 'no':
            break;
        default:
            break;
    }

    switch ($choices['time-frame']) {
        case 'yes':
            $services[] = "Yes - Time Deposit";
            break;
        case 'no':
            break;
        default:
            break;
    }

    switch ($choices['investment-return']) {
        case 'dividend':
            $services[] = "Dividend per annum - Share Capital";
            break;
        case 'interest':
            $services[] = "Interest rate per annum - Savings Deposit, Time Deposit";
            break;
        default:
            break;
    }

    // Choose the best 5 services based on popularity and relevance
    $bestServices = array_slice($services, 0, 5);
    
    return $bestServices;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store user's choices in an array
    $userChoices = [];
    foreach ($_POST as $key => $value) {
        $userChoices[$key] = $value;
    }

    // Get the recommended loan services based on user choices
    $recommendedServices = getRecommendedLoanServices($userChoices);

    // Display user's choices and recommended services
    echo '<div id="result-card">';
    echo "<h2>Your Choices:</h2>";
    echo "<ul>";

    foreach ($userChoices as $key => $value) {
        echo "<li>$key: $value</li>";
    }

    echo "</ul>";
    echo "<h2>Recommended Loan Services:</h2><ul>";

    foreach ($recommendedServices as $service) {
        echo "<li>$service</li>";
    }

    echo "</ul>";
    echo '</div>';
}
?>
<title>Cash and Loans</title>

<!-- Add your CSS styles here -->
<link href="assets/css/style.css" rel="stylesheet">

<body>
    <div id="container">
        <div id="container-header">
            <h1>Cash and Loans ASSESSMENT</h1>
        </div>
        <br>

        <form id="loan-form" action="" method="post">
            <label id="assessment-label" for="financial-goal">1. Please check all following that is applicable to you.</label>
            <input type="radio" name="savings-goal" value="time-deposit"> MIGS  <br>
            <input type="radio" name="savings-goal" value="share-capital"> Entrepreneur Members<br>
            <input type="radio" name="savings-goal" value="savings-deposit"> Employed<br>
            <input type="radio" name="savings-goal" value="share-capital"> Pensioners<br>
            <br>

            <label id="assessment-label" for="financial-goal">2. Please specify the purpose of your loan</label>
            <input type="radio" name="term" value="short-term"> For small businesses or personal needs<br>
            <input type="radio" name="term" value="long-term"> For unexpected medical expenses<br>
            <input type="radio" name="term" value="long-term"> For purchasing gadgets and appliances<br>
            <input type="radio" name="term" value="long-term"> For asset/equipment acquisition, working capital, business expansion<br>
            <input type="radio" name="term" value="long-term"> For employees looking to borrow against their salary or bonuses<br>
            <input type="radio" name="term" value="long-term"> For purchasing or refinancing a vehicle<br>
            <input type="radio" name="term" value="long-term"> For secured financing using existing assets<br>
            <input type="radio" name="term" value="long-term"> For educational expenses<br>
            <input type="radio" name="term" value="long-term"> For retired individuals with a pension<br>
            <br>

            <label id="assessment-label" for="financial-goal">3. How would you describe your credit history if there is any? </label>
            <input type="radio" name="risk" value="low-risk"> Excellent<br>
            <input type="radio" name="risk" value="moderate-risk"> Good<br>
            <input type="radio" name="risk" value="high-risk"> Fair<br>
            <input type="radio" name="risk" value="high-risk"> Poor<br>
            <br>

            <label id="assessment-label" for="financial-goal">4. How much (maximum) finance do you need for your specific needs?</label>
            <input type="radio" name="access" value="easy-access"> P5000.00- P100000.00<br>
            <input type="radio" name="access" value="limited-access"> P100000.00- P500000.00<br>
            <input type="radio" name="access" value="no-access"> P500000.00- 2000000.00<br>
            <input type="radio" name="access" value="no-access"> P2000000.00- P20000000.00<br>
            <br>

            <label id="assessment-label" id="assessment-label" for="financial-goal">5. What frequency do you prefer to pay your loan?</label>
            <input type="radio" name="withdraw" value="yes"> Daily<br>
            <input type="radio" name="withdraw" value="no"> Monthly<br>
            <input type="radio" name="withdraw" value="no"> Lumpsum<br>
            <br>

            <label id="assessment-label" for="financial-goal">6. What is your estimated maximum range capacity to repay the loan, considering your income and other financial obligations? </label>
            <input type="radio" name="shareholder" value="yes"> Less than 1 year<br>
            <input type="radio" name="shareholder" value="no"> 1 year<br>
            <input type="radio" name="shareholder" value="no"> 2 years<br>
            <input type="radio" name="shareholder" value="no"> 3 years<br>
            <input type="radio" name="shareholder" value="no"> 5 years<br>
            <br>

            <label id="assessment-label" for="financial-goal">7. How urgently do you need the loan funds? Identify the number of days/month.</label>
            <input type="radio" name="time-frame" value="yes"> 1-2 days<br>
            <input type="radio" name="time-frame" value="no"> Max of 7 days<br>
            <input type="radio" name="time-frame" value="no"> Max of 1 month<br>
            <br>

            <label id="assessment-label" for="financial-goal">8. Do you prefer no collateral loans? </label>
            <input type="radio" name="investment-return" value="dividend"> Yes<br>
            <input type="radio" name="investment-return" value="interest"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">9.  If yes, are you able to provide collateral for the loan? </label>
            <input type="radio" name="investment-return" value="dividend"> Yes<br>
            <input type="radio" name="investment-return" value="interest"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">10. Do you have a co-maker? </label>
            <input type="radio" name="investment-return" value="dividend"> Yes<br>
            <input type="radio" name="investment-return" value="interest"> No<br>
            <br>

            <input id="submit-btn" type="submit" value="Submit">
            <a href="\CoopManual\servicephp\cashandloans.php" class="submit-btn">Go to Cash and Loans Page</a>
        </form>
    </div>

    <!-- Add your JavaScript here if needed -->

</body>
<?php include('assets/footer.php') ?>