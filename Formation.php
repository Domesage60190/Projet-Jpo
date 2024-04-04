<?php

class Formation extends database {

$_POST=$FormationList

    public $id = 0;
    public $nomSection= '';
    public $id_salle = 0;


    public function __construct() {
        parent::__construct();
    }
    
    
    public function showFormationList() {
        $FormationList = array();
        $query = 'SELECT `id`, `Formation` FROM `' . TABLEPREFIX . 'Formation`';
        $showFormationList = $this->db->query($query);
        if (is_object($showFormationList)) {
            $FormationList = $showFormationList->fetchAll(PDO::FETCH_OBJ);
        }
        return $FormationList;
    }

    public function __destruct() {
        parent::__destruct();
    }

    foreach ($allFormation as $role) { ?>
        <option value="<?= $role['ID'] ?>"><?= $role['label'] ?></option>
      <?php 
      } 
}