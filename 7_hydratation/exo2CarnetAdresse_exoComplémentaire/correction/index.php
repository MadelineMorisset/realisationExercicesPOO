<?php
require_once 'address.php';
require_once 'person.php';

$data = [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'age' => 30,
    'addresses' => [
        [
            'street' => '123 Main St',
            'city' => 'Springfield',
            'postcode' => '12345'
        ],
        [
            'street' => '456 Elm St',
            'city' => 'Shelbyville',
            'postcode' => '67890'
        ]
    ]
];

$person = new Person($data);

// Affichage des informations
echo 'First Name: ' . $person->getFirstName() . PHP_EOL;
echo 'Last Name: ' . $person->getLastName() . PHP_EOL;
echo 'Age: ' . $person->getAge() . PHP_EOL;
echo 'Addresses: ' . PHP_EOL;
foreach ($person->getAddresses() as $address) {
    echo ' - ' . $address->getStreet() . ', ' . $address->getCity() . ' ' . $address->getPostcode() . PHP_EOL;
}
?>