<?php
class Person {
    private $firstName;
    private $lastName;
    private $age;
    private $addresses = [];

    public function __construct(array $data = []) {
        $this->hydrate($data);
    }

    public function hydrate(array $data) {
        if (isset($data['firstName'])) {
            $this->firstName = $data['firstName'];
        }
        if (isset($data['lastName'])) {
            $this->lastName = $data['lastName'];
        }
        if (isset($data['age'])) {
            $this->age = $data['age'];
        }
        if (isset($data['addresses']) && is_array($data['addresses'])) {
            foreach ($data['addresses'] as $addressData) {
                $this->addresses[] = new Address($addressData);
            }
        }
    }

    // Getters
    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAge() {
        return $this->age;
    }

    public function getAddresses() {
        return $this->addresses;
    }
}
?>