<?php



// report d'erreur sur le code
 error_reporting(E_ALL);
 ini_set('display_errors', 'On');

//connexion a la base de donnée en pdo
$bdd_adresse = "localhost";
$bdd_name = "jpo";
$bdd_identifiant = "root";
$bdd_motdepasse = "";



function get_formation(){
global $bdd_adresse, $bdd_identifiant, $bdd_motdepasse, $bdd_name;
$resultat = array();
    try {
        $pdo = new PDO("mysql:host=$bdd_adresse;dbname=$bdd_name", $bdd_identifiant, $bdd_motdepasse);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = $pdo->prepare("select * FROM formation");
       
        $sql->execute();
        $resultat =$sql->fetchAll();

       return $resultat;
    } catch(PDOException $e) {
        return $e->getMessage();
    }
    return $resultat;
}

function get_trajet($id_formation){
    global $bdd_adresse, $bdd_identifiant, $bdd_motdepasse, $bdd_name;
    $resultat = array();
        try {
            $pdo = new PDO("mysql:host=$bdd_adresse;dbname=$bdd_name", $bdd_identifiant, $bdd_motdepasse);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $sql = $pdo->prepare("select s.trajet AS trajet , numerosalle FROM salle AS s inner join formation AS f on f.id_salle= s.id Where f.id= ?");
            
            
            $sql->execute([$id_formation]);
            $resultat =$sql->fetchAll();
    
           return $resultat;
        } catch(PDOException $e) {
            return $e->getMessage();
        }
        return $resultat;

    }