<?php
/**
 * Description of Backpack
 *
 * @author Md Shahadat Hossain Chowdhury
 */
class Backpack {
    protected $id;
    protected $maxWeightCap;
    protected $maxSizeCap;
    protected $totalWeight;
    protected $totalSize;

    private $backpack = array();

    function __construct($id, $maxWeightCap, $maxSizeCap, $totalWeight, $totalSize, $created, $updated) {
        $this->id = $id;
        $this->maxWeightCap = $maxWeightCap;
        $this->maxSizeCap = $maxSizeCap;
        $this->totalWeight = $totalWeight;
        $this->totalSize = $totalSize;
        $this->created = new \DateTime("now");
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getMaxWeightCap() {
        return $this->maxWeightCap;
    }

    public function setMaxWeightCap($maxWeightCap) {
        $this->maxWeightCap = $maxWeightCap;
    }

    public function getMaxSizeCap() {
        return $this->maxSizeCap;
    }

    public function setMaxSizeCap($maxSizeCap) {
        $this->maxSizeCap = $maxSizeCap;
    }

    public function getTotalWeight() {
        return $this->totalWeight;
    }

    public function setTotalWeight($totalWeight) {
        $this->totalWeight = $totalWeight;
    }

    public function getTotalSize() {
        return $this->totalSize;
    }

    public function setTotalSize($totalSize) {
        $this->totalSize = $totalSize;
    }

    public function add($item){
        $itemArr = array('id' => $item->id,
                         'name' => $item->name,
                         'description' => $item->description,
                         'weight' => $item->weight,
                         'size' => $item->size
                         );

        if(isCapable()){
            array_push($backpack, $itemArr);
            return true;
        }
        else
            return false;
    }

    public function remove($itemid){
        $arrIndex = getArrayIndex($itemid);
        if($arrIndex >= 0){
            array_splice($backpack, $arrIndex, 1);
            return true;
        }
        else
            return false;
    }

    public function find($itemName){
        $result = array();
        foreach($backpack as $key => $value){
            if ( $value["name"] == '$itemName' )
                array_push($result, $value);
        }
        return $result;
    }

    public function showAll(){
        foreach($backpack as $key => $value){
            echo 
        }
    }

    private function isCapable($item){
        if(($this->maxWeightCap - $this->totalWeight >= $item->weight) && ($this->maxSizeCap - $this->totalSize >= $item->size)){
            return true;
        }
        else
            return false;
    }

    private function getArrayIndex($itemid){
        foreach($backpack as $key => $value){
            if ( $value["id"] === $itemid )
                return $key;
        }
    }
}
?>