<?php
class Address {
    private $street;
    private $city;
    private $postcode;

    public function __construct(array $data = []) {
        $this->hydrate($data);
    }

    public function hydrate(array $data) {
        if (isset($data['street'])) {
            $this->street = $data['street'];
        }
        if (isset($data['city'])) {
            $this->city = $data['city'];
        }
        if (isset($data['postcode'])) {
            $this->postcode = $data['postcode'];
        }
    }

    // Getters
    public function getStreet() {
        return $this->street;
    }

    public function getCity() {
        return $this->city;
    }

    public function getPostcode() {
        return $this->postcode;
    }
}
?>