<?php
/**
 * Description of Item
 *
 * @author Md Shahadat Hossain Chowdhury
 */
class Item {
    protected $id;
    protected $name;
    protected $description;
    protected $weight;
    protected $size;

    function __construct($id, $name, $description, $weight, $size) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->weight = $weight;
        $this->size = $size;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function __toString(){
        return "Id = " . $this->id . ",Name = " . $this->name . ", Description = " . $this->description . ", Weight = " . $this->weight . ", Size = " . $this->size;
    }
}
?>
