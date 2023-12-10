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
                    max-width: 100px;
                    height: auto;
                    display: block; /* Added this to center-align images within columns */
                    margin: auto; /* Center-align images within columns */
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
                    max-width: 100%;
                    height: auto;
                    display: block;
                    margin: auto;
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
                $selectedCategory = "msmeloan"; // Default category, change this based on your needs

                if (isset($_GET['category'])) {
                    $selectedCategory = $_GET['category'];
                }

                $result = $conn->query("SELECT id, name, image FROM loans WHERE category = '$selectedCategory'");

                echo "<div class='container mt-4'>";
                echo "<h2>MSME Loan</h2>";

                echo "<div class='card-deck'>";

                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<img src='/CoopManual/admin/uploads/{$row['image']}' class='card-img-top img-fluid mx-auto' alt='Image'>";
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