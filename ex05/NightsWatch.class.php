<?PHP

class NightsWatch {
    private $members = array();

    public function recruit($new) {
        $this->members[] = $new;
    }

    public function fight() {
        foreach ($this->members as $member) {
            if ($member instanceof IFighter)
                $member->fight();
        }
    }
}

?>