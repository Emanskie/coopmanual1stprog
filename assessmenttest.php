<?php include('assets/header.php') ?>
    <title>Pre-Assessment Test</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <div id="container">
        <h1>Pre-Assessment Test</h1>

        <form action="javascript:void(0);" method="post" id="category-form" onsubmit="redirectToCategory()">
            <label for="category-select">Select Category:</label>
            <select name="category" id="category-select">
                <option value="savingstest.php">Savings</option>
                <option value="loanstest.php">Cash and Loans</option>
                <option value="alliedtest.php">Allied Businesses</option>
                <option value="membertest.php">Member Benefits</option>
            </select>
            <input type="submit" value="Go to Category">
        </form>
    </div>

    <script>
        function redirectToCategory() {
            var selectedCategory = document.getElementById("category-select").value;
            window.location.href = selectedCategory;
        }
    </script>

</body>
<?php include('assets/footer.php') ?>