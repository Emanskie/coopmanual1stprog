<?php include('assets/header.php') ?>

<title>Cash and Loans</title>

<!-- Add your CSS styles here -->
<link href="assets/css/style.css" rel="stylesheet">

<body>
    <div id="container">
        <div id="container-header">
            <h1>Cash and Loans ASSESSMENT</h1>
        </div>
        <br>

        <form action="\CoopManual\servicephp\cashandloans.php" method="post">
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
        </form>
    </div>

    <!-- Add your JavaScript here if needed -->

</body>
<?php include('assets/footer.php') ?>