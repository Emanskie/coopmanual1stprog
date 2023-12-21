<?php include('header.php') ?>
<!-- End Header -->
        <style>
                body {
                    background-color: #f8f9fa;
                }

                .container-card {
                    background-color: #ffffff;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    margin-top: 50px;
                    text-align: center;
                }

                .table img {
                    max-width: none;
                    width: 200%;
                    height: auto;
                    display: block; /* Added this to center-align images within columns */
                    margin: 0 auto; /* Center-align images within columns */
                    transform: translateX(-50%); /* Center using transform */
                    
                }
                .card-deck {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                }

                .card {
                    margin: 10px;
                    text-align: center;
                }

                .card img {
                     max-width: none;
                      width: 300%; /* Set the desired width, for example, 300% of the parent container */
                     height: auto;
                     display: block;
                     position: relative;
                     left: 50%;
                     transform: translateX(-50%);
                }
                
            </style>
        </head>

        <body>
        <div class="container center-align">
        <div class="container-card">
            <!-- Display Images -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                // Assuming you have a database connection here
                $conn = new mysqli("localhost", "root", "", "coop");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from the database based on the selected category
                $selectedCategory = "laboratorycoop"; // Default category, change this based on your needs

                if (isset($_GET['category'])) {
                    $selectedCategory = $_GET['category'];
                }

                $result = $conn->query("SELECT id, name, image FROM savings WHERE category = '$selectedCategory'");

                echo "<div class='container mt-4'>";

                echo "<div class='card-deck'>";
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";

                    // Display the name as the heading
                    if (!empty($row['name'])) {
                        echo "<h2>{$row['name']}</h2>";
                    }

                    echo "<img src='/CoopManual/admin/uploads/{$row['image']}' class='card-img-top mx-auto img-fluid' alt='Image'>";
                    echo "</div>";
                }

                echo "</div>";
                echo "</div>";

                $conn->close();
                ?>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>



 <!-- ======= Footer ======= -->
 <?php include('footer.php') ?>