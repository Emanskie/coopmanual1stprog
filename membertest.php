<?php include('assets/header.php') ?>

<title>Member Benefits</title>

<!-- Add your CSS styles here -->
<link href="assets/css/style.css" rel="stylesheet">

<body>
    <div id="container">
        <div id="container-header">
            <h1>Member Benefits ASSESSMENT</h1>
        </div>
        <br>

        <form action="\CoopManual\servicephp\member.php" method="post">
            <label id="assessment-label" for="financial-goal">1. What benefits are you seeking as a cooperative member?</label>
            <input type="radio" name="savings-goal" value="time-deposit"> Medical Assistance<br>
            <input type="radio" name="savings-goal" value="share-capital"> Death Assistance<br>
            <br>

            <label id="assessment-label" for="financial-goal">2. Are you focused on health coverage and medical benefits for yourself or your family? </label>
            <input type="radio" name="term" value="short-term"> Yes<br>
            <input type="radio" name="term" value="long-term"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">3. If yes, please indicate all the services that may align with your medical needs.</label>
            <input type="radio" name="risk" value="low-risk"> Diagnostic Test<br>
            <input type="radio" name="risk" value="moderate-risk"> Consultation<br>
            <input type="radio" name="risk" value="high-risk"> Physical Exam<br>
            <input type="radio" name="risk" value="high-risk"> Admission Financial Assistance<br>
            <input type="radio" name="risk" value="high-risk"> In-Patient Care<br>
            <input type="radio" name="risk" value="high-risk"> Medicine Assistance<br>
            <input type="radio" name="risk" value="high-risk"> Others<br>
            <br>

            <label id="assessment-label" for="financial-goal">4. Specify the income range that most likely reflects your annual earnings.</label>
            <input type="radio" name="access" value="easy-access"> P500 - 1,000<br>
            <input type="radio" name="access" value="limited-access"> P1,000 - 5,000<br>
            <input type="radio" name="access" value="no-access"> P5,000 - 10,000<br>
            <input type="radio" name="access" value="no-access"> P10,000 or more<br>
            <br>

            <label id="assessment-label" id="assessment-label" for="financial-goal">5. Are you more inclined in prioritizing benefits that offer financial protection for your beneficiaries after your passing?</label>
            <input type="radio" name="withdraw" value="yes"> Yes<br>
            <input type="radio" name="withdraw" value="no"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">6. Are you currently availing services from the cooperative such as a share capital amounting to Php 2,500 and a savings deposit of Php 500?</label>
            <input type="radio" name="shareholder" value="yes"> Yes, and has more than the required amount<br>
            <input type="radio" name="shareholder" value="no"> No, it is less than the required amount<br>
            <br>

            <label id="assessment-label" for="financial-goal">7. Please specify your age range:</label>
            <input type="radio" name="time-frame" value="yes"> 18 - 49 years old<br>
            <input type="radio" name="time-frame" value="no"> 50 - 59 years old<br>
            <input type="radio" name="time-frame" value="no"> 60 - 68 years old<br>
            <br>

            <label id="assessment-label" for="financial-goal">8. Using your age as a reference point, which option best describes your financial capability. </label>
            <input type="radio" name="investment-return" value="dividend"> 18-49 years old and can pay Php 100 monthly<br>
            <input type="radio" name="investment-return" value="interest"> 50-59 years old and can pay Php 150 monthly<br>
            <input type="radio" name="investment-return" value="interest"> 60-68 years old and can pay Php 225 monthly<br>
            <input type="radio" name="investment-return" value="interest"> 18-49 years old and cannot pay Php100 monthly<br>
            <input type="radio" name="investment-return" value="interest"> 50-59 years old and cannot pay Php 150 monthly<br>
            <input type="radio" name="investment-return" value="interest"> 60-68 years old and cannot pay Php 225 monthly<br>
            <br>

            <label id="assessment-label" for="financial-goal">9. What health issues are you currently experiencing?</label>
            <input type="radio" name="investment-return" value="dividend"> Respiratory Conditions (e.g., asthma, bronchitis, etc.)<br>
            <input type="radio" name="investment-return" value="interest"> Diabetes<br>
            <input type="radio" name="investment-return" value="interest"> Gastrointestinal Issues<br>
            <input type="radio" name="investment-return" value="interest"> Low Hemoglobin Count<br>
            <input type="radio" name="investment-return" value="interest"> Bone Marrow Disorders<br>
            <input type="radio" name="investment-return" value="interest"> Fracture <br>
            <input type="radio" name="investment-return" value="interest"> Pulmonary Conditions<br>
            <input type="radio" name="investment-return" value="interest"> Hypertension<br>
            <br>

            <label id="assessment-label" for="financial-goal">10. Do you engage in medical consultations on a monthly basis?</label>
            <input type="radio" name="investment-return" value="dividend"> Yes<br>
            <input type="radio" name="investment-return" value="interest"> No<br>
            <br>

            <input id="submit-btn" type="submit" value="Submit">
        </form>
    </div>

    <!-- Add your JavaScript here if needed -->

</body>
<?php include('assets/footer.php') ?>