<?php
include('assets/header.php');

// Function to get the recommended services based on user choices
function getRecommendedServices($choices)
{
    $recommendations = [];

    // Check the benefits seeking
    if (isset($choices['Seeking-Assistance'])) {
        switch ($choices['Seeking-Assistance']) {
            case 'medical assistance':
                $recommendations[] = "Recommended Service: YAKAP - Yaman sa Kalusugan";
                break;
            case 'death assistance':
                $recommendations[] = "Recommended Service: Sunshine (Damayan) Fund";
                break;
        }
    }

    // Check health coverage focus
    if (isset($choices['term']) && $choices['term'] === 'yes') {
        $recommendations[] = "Recommended Service: YAKAP - Yaman sa Kalusugan";
    }

    // Check medical services alignment
if (isset($choices['risk']) && is_array($choices['risk'])) {
    $medicalServices = [
        'diagnostic-test' => 'Diagnostic Test',
        'Consultation' => 'Consultation',
        'Physical Exam' => 'Physical Exam',
        'Admission Financial Assistance' => 'Admission Financial Assistance',
        'In-Patient Care' => 'In-Patient Care',
        'medicine-assistance' => 'Medicine Assistance',
        'others' => 'Others. Specify: ' . (isset($choices['risk-others']) ? $choices['risk-others'] : '')
    ];

    $selectedServices = [];
    foreach ($choices['risk'] as $riskLevel) {
        // Check if the key exists in the $medicalServices array
        if (isset($medicalServices[$riskLevel])) {
            $selectedServices[] = $medicalServices[$riskLevel];
        }
    }

    $recommendations[] = "Recommended Services: YAKAP - Yaman sa Kalusugan - " . implode(", ", $selectedServices);
}

    // Check income range
if (isset($choices['income-range'])) {
    $incomeRanges = [
        'P500 - 1,000' => 'P500 - 1,000',
        'P1,000 - 5,000' => 'P1,000 - 5,000',
        'P5,000 - 10,000' => 'P5,000 - 10,000',
        'P10,000 or more' => 'P10,000 or more',
    ];

    // Check if the key exists in the $incomeRanges array
    if (isset($incomeRanges[$choices['income-range']])) {
        $recommendations[] = "Recommended Service: Sunshine (Damayan) Fund - " . $incomeRanges[$choices['income-range']];
    }
}

    // Check financial protection inclination
    if (isset($choices['financial-protection']) && $choices['financial-protection'] === 'yes') {
        $recommendations[] = "Recommended Service: Sunshine (Damayan) Fund";
    }

    // Check current services availed
    if (isset($choices['current-services'])) {
        switch ($choices['current-services']) {
            case 'yes':
                $recommendations[] = "Recommended Service: Sunshine (Damayan) Fund - Yes, and has more than the required amount";
                break;
            case 'no':
                $recommendations[] = "Recommended Service: Sunshine (Damayan) Fund - No, it is less than the required amount";
                break;
        }
    }

    // Check age range
    if (isset($choices['age-range'])) {
        $recommendations[] = "Recommended Service: Sunshine (Damayan) Fund - " . $choices['age-range'];
    }

    // Check financial capability based on age
    if (isset($choices['financial-capability'])) {
        $recommendations[] = "Recommended Service: Sunshine (Damayan) Fund - " . $choices['financial-capability'];
    }

    // Check current health issues
if (isset($choices['health-issues']) && is_array($choices['health-issues'])) {
    $healthIssues = [
        'respiratory-conditions' => 'Respiratory Conditions (e.g., asthma, bronchitis, etc.)',
        'diabetes' => 'Diabetes',
        'gastrointestinal-issues' => 'Gastrointestinal Issues',
        'low-hemoglobin-count' => 'Low Hemoglobin Count',
        'bone-marrow-disorders' => 'Bone Marrow Disorders',
        'fracture' => 'Fracture',
        'pulmonary-conditions' => 'Pulmonary Conditions',
        'hypertension' => 'Hypertension',
        'others' => 'Others. Specify ____'
    ];

    $selectedHealthIssues = [];
    foreach ($choices['health-issues'] as $key => $value) {
        // Check if the key exists in the $healthIssues array
        if (isset($healthIssues[$key])) {
            $selectedHealthIssues[] = $healthIssues[$key];
        }
    }

    $recommendations[] = "Recommended Health Services: YAKAP - Yaman sa Kalusugan - " . implode(", ", $selectedHealthIssues);
}

    // Check medical consultations frequency
    if (isset($choices['medical-consultations'])) {
        $recommendations[] = "Recommended Service: YAKAP - Yaman sa Kalusugan - Engage in medical consultations on a monthly basis";
    }

    // Return the recommendations
    return $recommendations;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store user's choices in an array
    $userChoices = [];
    foreach ($_POST as $key => $value) {
        $userChoices[$key] = $value;
    }

    // Get the recommended services based on user choices
    $recommendedServices = getRecommendedServices($userChoices);

    // Display user's choices and recommended services
    echo '<div id="result-card">';
    echo "<h2>Your Choices:</h2>";
    echo "<ul>";

    foreach ($userChoices as $key => $value) {
        // If the choice is an array, format it as a comma-separated string
        if (is_array($value)) {
            $value = implode(", ", $value);
        }
        echo "<li>$key: $value</li>";
    }

    echo "</ul>";
    echo "<h2>Recommended Services:</h2>";
    echo "<ul>";

    foreach ($recommendedServices as $recommendation) {
        echo "<li>$recommendation</li>";
    }

    echo "</ul>";
    echo '</div>';
}
?>

<title>Member Benefits</title>

<!-- Add your CSS styles here -->
<link href="assets/css/style.css" rel="stylesheet">

<body>
    <div id="container">
        <div id="container-header">
            <h1>Member Benefits ASSESSMENT</h1>
        </div>
        <br>

        <form id="member-form" action="" method="post">
            <label id="assessment-label" for="financial-goal">1. What benefits are you seeking as a cooperative member?</label>
            <input type="radio" name="Seeking-Assistance" value="medical assistance"> Medical Assistance<br>
            <input type="radio" name="Seeking-Assistance" value="death assistance"> Death Assistance<br>
            <br>

            <label id="assessment-label" for="financial-goal">2. Are you focused on health coverage and medical benefits for yourself or your family? </label>
            <input type="radio" name="term" value="short-term"> Yes<br>
            <input type="radio" name="term" value="long-term"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">3. If yes, please indicate all the services that may align with your medical needs.</label>
            <input type="checkbox" name="risk[]" value="diagnostic-test"> Diagnostic Test<br>
            <input type="checkbox" name="risk[]" value="Consultation"> Consultation<br>
            <input type="checkbox" name="risk[]" value="Physical Exam"> Physical Exam<br>
            <input type="checkbox" name="risk[]" value="Admission Financial Assistance"> Admission Financial Assistance<br>
            <input type="checkbox" name="risk[]" value="In-Patient Care"> In-Patient Care<br>
            <input type="checkbox" name="risk[]" value="medicine-assistance"> Medicine Assistance<br>
            <input type="checkbox" name="risk[]" value="others"> Others. Specify: <input type="text" name="risk-others"><br>
            <br>
            <label id="assessment-label" for="financial-goal">4. Specify the income range that most likely reflects your annual earnings.</label>
            <input type="radio" name="income-range" value="P500 - 1,000"> P500 - 1,000<br>
            <input type="radio" name="income-range" value="P1,000 - 5,000"> P1,000 - 5,000<br>
            <input type="radio" name="income-range" value="P5,000 - 10,000"> P5,000 - 10,000<br>
            <input type="radio" name="income-range" value="P10,000 or more"> P10,000 or more<br>
            <br>

            <label id="assessment-label" for="financial-goal">5. Are you more inclined in prioritizing benefits that offer financial protection for your beneficiaries after your passing?</label>
            <input type="radio" name="financial-protection" value="yes"> Yes<br>
            <input type="radio" name="financial-protection" value="no"> No<br>
            <br>

            <label id="assessment-label" for="financial-goal">6. Are you currently availing services from the cooperative such as a share capital amounting to Php 2,500 and a savings deposit of Php 500?</label>
            <input type="radio" name="current-services" value="yes"> Yes, and has more than the required amount<br>
            <input type="radio" name="current-services" value="no"> No, it is less than the required amount<br>
            <br>

            <label id="assessment-label" for="financial-goal">7. Please specify your age range:</label>
            <input type="radio" name="age-range" value="18-49"> 18 - 49 years old<br>
            <input type="radio" name="age-range" value="50-59"> 50 - 59 years old<br>
            <input type="radio" name="age-range" value="60-68"> 60 - 68 years old<br>
            <br>

            <label id="assessment-label" for="financial-goal">8. Using your age as a reference point, which option best describes your financial capability. </label>
            <input type="radio" name="financial-capability" value="18-49-dividend"> 18-49 years old and can pay Php 100 monthly<br>
            <input type="radio" name="financial-capability" value="50-59-interest"> 50-59 years old and can pay Php 150 monthly<br>
            <input type="radio" name="financial-capability" value="60-68-interest"> 60-68 years old and can pay Php 225 monthly<br>
            <input type="radio" name="financial-capability" value="18-49-no-payment"> 18-49 years old and cannot pay Php 100 monthly<br>
            <input type="radio" name="financial-capability" value="50-59-no-payment"> 50-59 years old and cannot pay Php 150 monthly<br>
            <input type="radio" name="financial-capability" value="60-68-no-payment"> 60-68 years old and cannot pay Php 225 monthly<br>
            <br>

            <label id="assessment-label" for="financial-goal">9. What health issues are you currently experiencing?</label>
            <input type="checkbox" name="health-issues[]" value="respiratory-conditions"> Respiratory Conditions (e.g., asthma, bronchitis, etc.)<br>
            <input type="checkbox" name="health-issues[]" value="diabetes"> Diabetes<br>
            <input type="checkbox" name="health-issues[]" value="gastrointestinal-issues"> Gastrointestinal Issues<br>
            <input type="checkbox" name="health-issues[]" value="low-hemoglobin-count"> Low Hemoglobin Count<br>
            <input type="checkbox" name="health-issues[]" value="bone-marrow-disorders"> Bone Marrow Disorders<br>
            <input type="checkbox" name="health-issues[]" value="fracture"> Fracture <br>
            <input type="checkbox" name="health-issues[]" value="pulmonary-conditions"> Pulmonary Conditions<br>
            <input type="checkbox" name="health-issues[]" value="hypertension"> Hypertension<br>
            <input type="checkbox" name="health-issues[]" value="others"> Others. Specify ____<br>
            <br>

            <label id="assessment-label" for="financial-goal">10. Do you engage in medical consultations on a monthly basis?</label>
            <input type="radio" name="medical-consultations" value="yes"> Yes<br>
            <input type="radio" name="medical-consultations" value="no"> No<br>
            <br>

            <input id="submit-btn" type="submit" value="Submit">
            <a href="\CoopManual\servicephp\member.php" class="submit-btn">Go to Member Benefits Page</a>
        </form>
    </div>

    <!-- Add your JavaScript here if needed -->

</body>
<?php include('assets/footer.php') ?>