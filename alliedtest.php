<?php
include('assets/header.php');

// Function to get the recommended services based on user choices
function getRecommendedServices($choices)
{
    $recommendations = [];

    // Check if the keys exist before accessing them
    if (isset($choices['community-oriented']) && $choices['community-oriented'] === 'yes') {
        // Recommendations for community-oriented living
        $recommendations[] = "Recommended Service: Housing Cooperative";
    }

    if (isset($choices['insurance-type'])) {
        // Recommendations based on insurance type
        switch ($choices['insurance-type']) {
            case 'life-insurance':
                // Check specific life insurance plan
                if (isset($choices['life-insurance-plan'])) {
                    $recommendations[] = "Recommended Service: CLIMBS - " . getLifeInsurancePlan($choices['life-insurance-plan']);
                }
                break;

            case 'non-life-insurance':
                // Check specific non-life insurance plan
                if (isset($choices['non-life-insurance-plan'])) {
                    $recommendations[] = "Recommended Service: CLIMBS - " . getNonLifeInsurancePlan($choices['non-life-insurance-plan']);
                }
                break;

            // Add more cases as needed
        }
    }

    if (isset($choices['educational-services']) && $choices['educational-services'] === 'yes') {
        // Recommendations for educational services
        $recommendations[] = "Recommended Service: Coop Academy - " . getEducationalLevel($choices['educational-level']);
        $recommendations[] = "Recommended Service: Coop Academy - Develop skills in " . getSkillsToDevelop($choices['skills-to-develop']);
    }

    // Return the recommendations
    return $recommendations;
}

// Helper function to get the specific life insurance plan
function getLifeInsurancePlan($plan)
{
    // Define mappings or logic based on your specific plans
    $planMappings = [
        'coop-life-savings-plan' => 'Coop Life Savings Plan (CLSP)',
        'group-accidental-death' => 'Group Accidental Death Disablement and Dismemberment Insurance (GADDDI)',
        // Add more mappings as needed
    ];

    return $planMappings[$plan] ?? "Unknown Plan";
}

// Helper function to get the specific non-life insurance plan
function getNonLifeInsurancePlan($plan)
{
    // Define mappings or logic based on your specific plans
    $planMappings = [
        'home-assurance' => 'Home Assurance and Security',
        'motor-insurance' => 'Motor/Car Insurance (CPTL and Comprehensive)',
        'fire-insurance' => 'Fire Insurance',
        'contractual-payment' => 'Ensure Contractual Payment',
        // Add more mappings as needed
    ];

    return $planMappings[$plan] ?? "Unknown Plan";
}

// Helper function to get the recommended educational level
function getEducationalLevel($level)
{
    // Define mappings or logic based on your specific levels
    $levelMappings = [
        'universal-kinder' => 'Universal Kinder',
        'grade-school' => 'Grade School',
        'junior-high-school' => 'Junior High School',
        'senior-high-school' => 'Senior High School',
        // Add more mappings as needed
    ];

    // Check if the key exists before attempting to access it
    if (isset($levelMappings[$level])) {
        return $levelMappings[$level];
    }

    return "Unknown Level";
}

// Helper function to get the recommended skills to develop
function getSkillsToDevelop($skills)
{
    // Define mappings or logic based on your specific skills
    $skillsMappings = [
        'technological-advancements' => 'Technological Advancements Innovation',
        'business-management' => 'Business Management and Entrepreneurship',
        'cultural-understanding' => 'Cultural Understanding and Societal Analysis',
        'general-knowledge' => 'General Knowledge',
        // Add more mappings as needed
    ];

    $selectedSkills = [];

    // Check if $skills is an array
    if (is_array($skills)) {
        foreach ($skills as $skill) {
            // Check if the key exists before attempting to access it
            if (isset($skillsMappings[$skill])) {
                $selectedSkills[] = $skillsMappings[$skill];
            }
        }
    }

    return implode(", ", $selectedSkills);
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

<title>Allied Businesses</title>

<!-- Add your CSS styles here -->
<link href="assets/css/style.css" rel="stylesheet">

<body>
    <div id="container">
        <div id="container-header">
            <h1>Allied Businesses ASSESSMENT</h1>
        </div>
        <br>
        <form id="allied-businesses-form" action="" method="post">
            <label id="assessment-label" for="savings-goal">1. In which of the particular services are you most interested in?</label>
            <input type="radio" name="community-oriented" value="knowledge-sharing"> Knowledge-Sharing and Development<br>
            <input type="radio" name="financial-protection" value="financial-protection"> Financial Protection<br>
            <input type="radio" name="housing-ownership" value="collective-housing"> Collective Housing Ownership<br>
            <br>

            <label id="assessment-label" for="risk-focus">2. Are you focused on securing personal or business assets against potential risk?</label>
            <input type="radio" name="risk-focus" value="yes"> Yes<br>
            <input type="radio" name="risk-focus" value="no"> No<br>

            <label id="assessment-label" for="insurance-type">3. If yes, which particular insurance types are you inclined to avail?</label>
            <input type="radio" name="insurance-type" value="life-insurance"> Life Insurance (e.g., accident, death)<br>
            <input type="radio" name="insurance-type" value="non-life-insurance"> Non-Life Insurance (e.g., property)<br>
            <input type="radio" name="insurance-type" value="others"> Others<br>
            <br>

            <label id="assessment-label" for="life-insurance-plan">4. If you opt for Life Insurance, which specific life insurance plan would you choose to avail in the cooperative?</label>
            <input type="radio" name="life-insurance-plan" value="coop-life-savings-plan"> Coop Life Savings Plan (CLSP)<br>
            <input type="radio" name="life-insurance-plan" value="group-accidental-death"> Group Accidental Death Disablement and Dismemberment Insurance (GADDDI)<br>
            <input type="radio" name="life-insurance-plan" value="loan-protection-plan"> Loan Protection Plan (LPP)<br>
            <input type="radio" name="life-insurance-plan" value="group-accident-death"> Group Accident Death Disablement and Dismemberment Indemnity and Funeral Service Assistance (GADDDI-FUSA)<br>
            <input type="radio" name="life-insurance-plan" value="coop-family-plan"> Coop Family Plan (CFP)<br>
            <input type="radio" name="life-insurance-plan" value="group-life-accident"> Group Life and Accident with Fire Insurance (GLAFI)<br>
            <input type="radio" name="life-insurance-plan" value="others-life"> Others<br>
            <br>

            <label id="assessment-label" for="non-life-insurance-plan">5. If you opt for Non-Life Insurance, which specific non-life insurance plan would you choose to avail in the cooperative?</label>
            <input type="radio" name="non-life-insurance-plan" value="home-assurance"> Home Assurance and Security<br>
            <input type="radio" name="non-life-insurance-plan" value="motor-insurance"> Motor/Car Insurance (CPTL and Comprehensive)<br>
            <input type="radio" name="non-life-insurance-plan" value="fire-insurance"> Fire Insurance<br>
            <input type="radio" name="non-life-insurance-plan" value="contractual-payment"> Ensure Contractual Payment<br>
            <input type="radio" name="non-life-insurance-plan" value="others-non-life"> Others<br>
            <br>

            <label id="assessment-label" for="educational-services">6. Are you focused on seeking educational services that promote collaboration, skill development, and knowledge sharing?</label>
            <input type="radio" name="educational-services" value="yes"> Yes<br>
            <input type="radio" name="educational-services" value="no"> No<br>
            <br>

            <label id="assessment-label" for="educational-level">7. If yes, what educational level do you intend to enroll in?</label>
            <input type="radio" name="educational-level" value="universal-kinder"> Universal Kinder<br>
            <input type="radio" name="educational-level" value="grade-school"> Grade School<br>
            <input type="radio" name="educational-level" value="junior-high-school"> Junior High School<br>
            <input type="radio" name="educational-level" value="senior-high-school"> Senior High School<br>
            <input type="radio" name="educational-level" value="others-educational"> Others<br>
            <br>

            <label id="assessment-label" for="skills-to-develop">8. Are there any particular skills or knowledge areas you are looking to develop through educational services?</label>
            <input type="checkbox" name="skills-to-develop[]" value="technological-advancements"> Technological Advancements Innovation<br>
            <input type="checkbox" name="skills-to-develop[]" value="business-management"> Business Management and Entrepreneurship<br>
            <input type="checkbox" name="skills-to-develop[]" value="cultural-understanding"> Cultural Understanding and Societal Analysis<br>
            <input type="checkbox" name="skills-to-develop[]" value="general-knowledge"> General Knowledge<br>
            <input type="checkbox" name="skills-to-develop[]" value="others-skills"> Others<br>
            <br>

            <label id="assessment-label" for="community-oriented">9. Are you interested in a community-oriented living arrangement where residents collectively own and manage the property?</label>
            <input type="radio" name="community-oriented" value="yes-community"> Yes<br>
            <input type="radio" name="community-oriented" value="no-community"> No<br>
            <br>

            <label id="assessment-label" for="housing-type">10. If yes, which of the following housing types would you choose?</label>
            <input type="radio" name="housing-type" value="single-detached"> Single Detached<br>
            <input type="radio" name="housing-type" value="two-storey-single-detached"> Two Storey Single Detached<br>
            <input type="radio" name="housing-type" value="rowhouse"> Rowhouse<br>
            <input type="radio" name="housing-type" value="two-storey-duplex"> Two Storey Duplex<br>
            <input type="radio" name="housing-type" value="duplex"> Duplex<br>
            <input type="radio" name="housing-type" value="others-housing"> Others<br>
            <br>

            <input id="submit-btn" type="submit" value="Submit">
            <a href="\CoopManual\servicephp\alliedbusinesses.php" class="submit-btn">Go to Allied Businesses Page</a>
        </form>
    </div>

    <!-- Add your JavaScript here if needed -->

</body>
<?php include('assets/footer.php') ?>