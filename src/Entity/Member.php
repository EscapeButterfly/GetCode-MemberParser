<?php


namespace GetCode\MemberParser\Entity;


class Member {

    private $fullName;
    private $address;
    private $city;
    private $state;
    private $zipCode;
    private $is_union;
    private $memberNumber;
    private $email;
    private $phone;

    /**
     * Member constructor.
     * @param        $fullName
     * @param        $address
     * @param        $city
     * @param        $state
     * @param        $zipCode
     * @param        $is_union
     * @param        $memberNumber
     * @param        $email
     * @param        $phone
     */
    public function __construct($fullName, $address, $city, $state, $zipCode, $is_union, $memberNumber, $email, $phone) {
        $this->fullName     = $fullName;
        $this->address      = $address;
        $this->city         = $city;
        $this->state        = $state;
        $this->zipCode      = $zipCode;
        $this->is_union     = $is_union;
        $this->memberNumber = $memberNumber;
        $this->email        = $email;
        $this->phone        = $phone;
    }

    /**
     * @return mixed
     */
    public function getFullName() {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address) {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city) {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state) {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getZipCode() {
        return $this->zipCode;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getIsUnion() {
        return $this->is_union;
    }

    /**
     * @param mixed $is_union
     */
    public function setIsUnion($is_union) {
        $this->is_union = $is_union;
    }

    /**
     * @return mixed
     */
    public function getMemberNumber() {
        return $this->memberNumber;
    }

    /**
     * @param mixed $memberNumber
     */
    public function setMemberNumber($memberNumber) {
        $this->memberNumber = $memberNumber;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function toString() {
        //TODO
    }

    public function toJson() {
        //TODO
    }
}