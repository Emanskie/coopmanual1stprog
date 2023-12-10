<?php include('assets/header.php') ?>
<title>Pre-Assessment Test</title>
<!-- Add your CSS styles here -->
</head>

<body>
    <div id="container">
        <div id="container-header">
            <h1>PRE-ASSESSMENT TEST</h1>
        </div>
        <div id="ass-form">
            <form action="javascript:void(0);" method="post" id="category-form" onsubmit="redirectToCategory()">
                <label for="category-select">Select Assessment:</label>
                <select name="category" id="category-select">
                    <option value="savingstest.php">Savings</option>
                    <option value="loanstest.php">Cash and Loans</option>
                    <option value="alliedtest.php">Allied Businesses</option>
                    <option value="membertest.php">Member Benefits</option>
                </select>
                <input id="submit-btn" type="submit" value="Go to Assessment Test">
            </form>
        </div>
    </div>

    <script>
        function redirectToCategory() {
            var selectedCategory = document.getElementById("category-select").value;
            window.location.href = selectedCategory;
        }
    </script>

</body>
<?php include('assets/footer.php') ?>