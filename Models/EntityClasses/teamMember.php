
class TeamMember
{
    public $id;
    public $name;
    public $teamId;
    public $roleId;
    public $roleName;
    public $foodPreferenceId;
    public $foodPreference;
    public $isAccomodationRequired;
    public $roomId;
    public $room;   
    
    public function __construct($mem)
    {
        $this->$id = $mem->$id;
        $this->$name = $mem->$name;
        $this->$teamId = $mem->$teamId;
        $this->$roleId = $mem->$roleId;
        $this->$roleName = $mem->$roleName;
        $this->$foodPreferenceId = $mem->$foodPreferenceId;
        $this->$foodPreference = $mem->$foodPreference;
        $this->$isAccomodationRequired = $mem->$isAccomodationRequired;
        $this->$roomId = $mem->$roomId;
        $this->$room = $mem->$room;
    }
}