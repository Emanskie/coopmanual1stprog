<?php include('assets/header.php') ?>

<title>Savings</title>

<!-- Add your CSS styles here -->
<link href="assets/css/style.css" rel="stylesheet">

<body>
    <div id="container">
        <div id="container-header">
            <h1>SAVINGS ASSESSMENT</h1>
        </div>
        <br>

        <form action="\CoopManual\servicephp\savings.php" method="post">
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
        </form>
    </div>

    <!-- Add your JavaScript here if needed -->

</body>
<?php include('assets/footer.php') ?>