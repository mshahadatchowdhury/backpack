<?php
/**
 * Description of History
 *
 * @author Md Shahadat Hossain Chowdhury
 */
class History {
    protected $id;
    protected $userid;
    protected $itemid;
    protected $backpackid;
    protected $type;
    protected $date;

    function __construct($id, $userid, $itemid, $backpackid, $type, $date) {
        $this->id = $id;
        $this->userid = $userid;
        $this->itemid = $itemid;
        $this->backpackid = $backpackid;
        $this->type = $type;
        $this->date = $date;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userid;
    }

    public function getItemid() {
        return $this->itemid;
    }

    public function getBackpackid() {
        return $this->backpackid;
    }

    public function getType() {
        return $this->type;
    }

    public function getDate() {
        return $this->date;
    }
}
?>