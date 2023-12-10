<?php include('assets/header.php') ?>
    <title>Savings Category</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <div id="container">
        <h1>Savings Category</h1>

        <form action="process.php" method="post">
            <label for="financial-goal">1. What is your main financial goal at this moment?</label>
            <!-- Add other questions and input boxes here -->

            <!-- Example Input Box -->
            <input type="checkbox" name="savings-goal" value="time-deposit"> Savings for the future <br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Grow wealth<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Future purchase-Savings Deposit<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Debt repayment<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Emergency fund<br>

            <!-- Add other checkboxes and input boxes here -->

            <label for="financial-goal">2. Are you looking for short-term or long-term financial solutions?</label>

            <input type="checkbox" name="savings-goal" value="time-deposit"> Short -term savings<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Long-term savings<br>

            <label for="financial-goal">3. Are you more inclined towards conservative, low-risk options, or are you open to exploring higher-risk, potentially higher-reward investments?</label>

            <input type="checkbox" name="savings-goal" value="time-deposit"> Low risk but potentially lower return<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Moderate risk  but potentially moderate return<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Higher potential return but with some potential risk<br>

            <label for="financial-goal">4. Considering your financial goal, describe the importance of accessing your savings.</label>

            <input type="checkbox" name="savings-goal" value="time-deposit"> Easy access to funds<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Limited access<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> No access unless membership is terminated<br>

            <label for="financial-goal">5. Considering your financial goal, do you prefer to withdraw your savings at any time you want?</label>

            <input type="checkbox" name="savings-goal" value="time-deposit"> Yes<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> No<br>

            <label for="financial-goal">6. Are you interested in being a shareholder of the cooperative?</label>

            <input type="checkbox" name="savings-goal" value="time-deposit"> Yes<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> No<br>

            <label for="financial-goal">7. Do you have a specific time frame in mind for your savings goal?</label>

            <input type="checkbox" name="savings-goal" value="time-deposit"> Yes<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> No<br>

            <label for="financial-goal">8. Which do you prefer to get in return for your investment?</label>

            <input type="checkbox" name="savings-goal" value="time-deposit"> Dividend per annum<br>
            <input type="checkbox" name="savings-goal" value="time-deposit"> Interest rate per annum<br>
            



    



    
            <hr>
            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- Add your JavaScript here if needed -->

</body>
<?php include('assets/footer.php') ?>