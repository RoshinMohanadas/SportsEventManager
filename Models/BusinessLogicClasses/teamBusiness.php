include_once("Models/EntityClasses/team.php")

class teamBusiness
{
    public function getTeam($id)
    {
        $team = new Team();
        $team->$id = $id;
        $this->$name = "Team Team";
        $this->$count = 6;
        $this->$collegeId = 1;
        $this->$college = "NIT Warangal";
        $this->$genderId = 2;
        $this->$gender = "Female";
        $this->$sportId = 2;
        $this->$sportName = "Kabadi";
        $this->$teamEmailId = "sportsmanager@nitw.in";
        $this->$teamMembers = $team->$teamMembers;


        return new Team();
    }
}