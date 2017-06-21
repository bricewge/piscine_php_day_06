<?PHP

class UnholyFactory {
    private $absorbed = array();

    public function absorb($unit) {
        if (get_parent_class($unit) != "Fighter")
            echo "(Factory can't absorb this, it's not a fighter)\n";
        elseif (isset($this->absorbed[$unit->type]))
            echo "(Factory already absorbed a fighter of type ".$unit->type.")\n";
        else {
            $this->absorbed[$unit->type] = $unit;
            echo "(Factory absorbed a fighter of type ".$unit->type.")\n";
        }
    }

    public function fabricate($type) {
        if ($this->absorbed[$type]) {
            echo "(Factory fabricates a fighter of type "."$type".")\n";
            return $this->absorbed[$type];
        }
        else
            echo "(Factory hasn't absorbed any fighter of type "."$type".")\n";
    }

}
?>