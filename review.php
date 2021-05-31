<?php 
// Deklasari class review
class Review {
    private $menuName;
    // private $userName;
    private $userId;
    private $body;

    public function __construct($menuName, $userId, $body)
    {
        $this->menuName = $menuName;
        // $this->userName = $userName;
        $this->userId = $userId;
        $this->body = $body;
    }

    public function getMenuName()
    {
        return $this->menuName;
    }

    public function getBody()
    {
        return $this->body;
    }

    // NEW
    public function getuser($users)
    {
        foreach($users as $user) {
            // if($user->getName() == $this->userName) {
            if ($user->getId() == $this->userId) {    
                return $user;
            }
        }
    }
}
?>