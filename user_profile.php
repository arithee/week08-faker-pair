<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">';
echo "<div class='container mt-4'>";
echo "<h2 class='mb-4'>Fake User Profiles (Philippines)</h2>";
echo "<table class='table table-bordered table-striped'>";
echo "<thead class='table-dark'><tr><th>Full Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Birthdate</th><th>Job Title</th></tr></thead><tbody>";


for ($i = 0; $i < 5; $i++) {
$fullname = $faker->name();
$email = $faker->email();
$phonenumber =  $faker->numerify('+639## ### ####');
$address = $faker->address();
$date = $faker->date('Y-m-d');
$jobtitle = $faker->jobTitle;


echo "<tr>";
echo "<td>($fullname)</td>";
echo "<td>($email)</td>";
echo "<td>($phonenumber)</td>";
echo "<td>($address)</td>";
echo "<td>($date)</td>";
echo "<td>($jobTitle)</td>";
echo "</tr>";
}
echo "</tbody></table></div>";
?>