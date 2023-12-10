<?php include('assets/header.php') ?>

<title>Allied Businesses</title>

<!-- Add your CSS styles here -->
<link href="assets/css/style.css" rel="stylesheet">

<body>
    <div id="container">
        <div id="container-header">
            <h1>Allied Businesses ASSESSMENT</h1>
        </div>
        <br>

        <form action="\CoopManual\servicephp\alliedbusinesses.php" method="post">
            <label id="assessment-label" for="financial-goal">1. In which of the particular services are you most interested in?</label>
            <input type="radio" name="savings-goal" value="time-deposit"> Knowledge-Sharing and Development<br>
            <input type="radio" name="savings-goal" value="share-capital"> Financial Protection<br>
            <input type="radio" name="savings-goal" value="savings-deposit"> Collective Housing Ownership<br>
            <br>

            <label id="assessment-label" for="financial-goal">2. Are you focused on securing personal or business assets against potential risk?</label>
            <input type="radio" name="term" value="short-term"> Yes<br>
            <input type="radio" name="term" value="long-term"> No<br>

            <label id="assessment-label" for="financial-goal">3. If yes, which particular insurance types are you inclined to avail? </label>
            <input type="radio" name="risk" value="low-risk"> Life Insurance (e.g., accident, death)<br>
            <input type="radio" name="risk" value="moderate-risk"> Non-Life Insurance (e.g., property)<br>
            <input type="radio" name="risk" value="high-risk"> Others<br>
            <br>

            <label id="assessment-label" for="financial-goal">4. If you opt for Life Insurance, which specific life insurance plan would you choose to avail in the cooperative?</label>
            <input type="radio" name="access" value="easy-access"> Coop Life Savings Plan (CLSP)<br>
            <input type="radio" name="access" value="limited-access"> Group Accidental Death Disablement and Dismemberment Insurance (GADDDI)<br>
            <input type="radio" name="access" value="no-access"> Loan Protection Plan (LPP)<br>
            <input type="radio" name="access" value="no-access"> Group Accident Death Disablement and Dismemberment Indemnity and Funeral Service Assistance (GADDDI-FUSA)<br>
            <input type="radio" name="access" value="no-access"> Coop Family Plan (CFP)<br>
            <input type="radio" name="access" value="no-access"> Group Life and Accident with Fire Insurance (GLAFI)<br>
            <input type="radio" name="access" value="no-access"> Others<br>
            <br>

            <label id="assessment-label" id="assessment-label" for="financial-goal">5. If you opt for Non-Life Insurance, which specific non-life insurance plan would you choose to avail in the cooperative?</label>
            <input type="radio" name="withdraw" value="yes"> Home Assurance and Security<br>
            <input type="radio" name="withdraw" value="no"> Motor/Car Insurance (CPTL and Comprehensive)<br>
            <input type="radio" name="withdraw" value="no"> Fire Insurance<br>
            <input type="radio" name="withdraw" value="no"> Ensure Contractual Payment<br>
            <input type="radio" name="withdraw" value="no"> Others<br>
            <br>

            <label id="assessment-label" for="financial-goal">6. Are you focused on seeking educational services that promote collaboration, skill development, and knowledge sharing? </label>
            <input type="radio" name="shareholder" value="yes"> Yes<br>
            <input type="radio" name="shareholder" value="no"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">7. If yes, what educational level do you intend to enroll in?</label>
            <input type="radio" name="time-frame" value="yes"> Universal Kinder<br>
            <input type="radio" name="time-frame" value="no"> Grade School<br>
            <input type="radio" name="time-frame" value="no"> Junior High School<br>
            <input type="radio" name="time-frame" value="no"> Senior High School<br>
            <input type="radio" name="time-frame" value="no"> Others<br>
            <br>

            <label id="assessment-label" for="financial-goal">8. Are there any particular skills or knowledge areas you are looking to develop through educational services?</label>
            <input type="radio" name="investment-return" value="dividend"> Technological Advancements Innovatio<br>
            <input type="radio" name="investment-return" value="interest"> Business Management and Entrepreneurship<br>
            <input type="radio" name="investment-return" value="interest"> Cultural Understanding and Societal Analysis<br>
            <input type="radio" name="investment-return" value="interest"> General Knowledge<br>
            <input type="radio" name="investment-return" value="interest"> Others<br>
            <br>

            <label id="assessment-label" for="financial-goal">9. Are you interested in a community-oriented living arrangement where residents collectively own and manage the property?</label>
            <input type="radio" name="investment-return" value="dividend"> Yes<br>
            <input type="radio" name="investment-return" value="interest"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">10. If yes, which of the following housing types would you choose?</label>
            <input type="radio" name="investment-return" value="dividend"> Single Detached<br>
            <input type="radio" name="investment-return" value="interest"> Two Storey Single Detached<br>
            <input type="radio" name="investment-return" value="interest"> Rowhouse<br>
            <input type="radio" name="investment-return" value="interest"> Two Storey Duplex<br>
            <input type="radio" name="investment-return" value="interest"> Duplex<br>
            <input type="radio" name="investment-return" value="interest"> Others<br>
            <br>

            <input id="submit-btn" type="submit" value="Submit">
        </form>
    </div>

    <!-- Add your JavaScript here if needed -->

</body>
<?php include('assets/footer.php') ?>