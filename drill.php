<?php 

require('vendor/autoload.php');

$faker = Faker\Factory::create('en_PH');

$employeeIds = range(1, 200);
$officeIds = range(1, 50);
$transactionIds = range(1, 500);

$employees = [];

foreach ($employeeIds as $id) {
    $employees[] = [
        'id' => $id,
        'lastName' => $faker->lastName,
        'firstName' => $faker->firstName,
        'office_id' => $faker->randomElement($officeIds),
        'address' => $faker->address
    ];
}

$offices = [];

foreach ($officeIds as $id) {
    $offices[] = [
        'id' => $id,
        'name' => $faker->company,
        'contactNum' => $faker->phoneNumber,
        'email' => $faker->companyEmail,
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => 'Philippines',
        'postal' => $faker->postcode
    ];
}

$transactions = [];

foreach ($transactionIds as $id) {
    $transactions[] = [
        'id' => $id,
        'employee_id' => $faker->randomElement($employeeIds),
        'office_id' => $faker->randomElement($officeIds),
        'datelog' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
        'action' => $faker->randomElement(['Created', 'Updated', 'Deleted']),
        'remarks' => $faker->sentence,
        'documentcode' => strtoupper($faker->bothify('DOC-#######'))
    ];
}

echo "Employees:\n";
foreach ($employees as $employee) {
    echo implode(" | ", $employee) . "\n";
}

echo "\nOffices:\n";
foreach ($offices as $office) {
    echo implode(" | ", $office) . "\n";
}

echo "\nTransactions:\n";
foreach ($transactions as $transaction) {
    echo implode(" | ", $transaction) . "\n";
}

?>
