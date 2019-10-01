
class Team
{
    public $id;
    public $name;
    public $count;
    public $collegeId;
    public $college;
    public $genderId;
    public $gender;
    public $sportId;
    public $sportName;
    public $teamEmailId;
    public $teamMembers;

    public function __construct($team)
    {
        $this->id = $team->$id;
        $this->$name = $team->$name;
        $this->$count = $team->$collegeId;
        $this->$collegeId = $team->$collegeId;
        $this->$college = $team->$college;
        $this->$genderId = $team->$genderId;
        $this->$gender = $team->$gender;
        $this->$sportId = $team->$sportId;
        $this->$sportName = $team->$sportName;
        $this->$teamEmailId = $team->$teamEmailId;
        $this->$teamMembers = $team->$teamMembers;

    }
}