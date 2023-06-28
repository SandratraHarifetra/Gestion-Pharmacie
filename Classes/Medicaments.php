<?php

class Medicaments
{

    private $ListesMedicaments;
    private $AjouterMedicaments;
    private $SupprimerMedicaments;
    private $ModifierMedicaments;


    public function __construct($BaseDeDonnee){
        $this->ListesMedicaments = $BaseDeDonnee->prepare("SELECT * FROM Medicaments ORDER BY Id");
        $this->AjouterMedicaments = $BaseDeDonnee->prepare("INSERT INTO Medicaments VALUES ('', :NomMedicament, :Libelle, :Prix)");
        $this->SupprimerMedicaments = $BaseDeDonnee->prepare("DELETE FROM Medicaments WHERE Id=?");
        $this->ModifierMedicaments = $BaseDeDonnee->prepare("UPDATE Medicaments SET NomMedicament = ?, Libelle = ?, Prix = ? WHERE Id = ?");
    }
// Les fonctions à utiliser
    // Inserer
    public function Inserer($NomMedicament, $Libelle, $Prix){
        $this->AjouterMedicaments->execute([':NomMedicament' => $NomMedicament, ":Libelle" => $Libelle, ":Prix" => $Prix]);
    }

    // Lister
    public function Lister(){
        // $Data = array();
		$i=0;
		$this->ListesMedicaments->execute();
        // $ligne = $this->ListesMedicaments->fetch();
        // var_dump($ligne);
		$ligne = $this->ListesMedicaments->fetch();
        return $ligne;
    }

    // Modifier
    public function Modifier($NomMedicament, $Libelle, $Prix){
        $this->ModifierMedicaments->execute([$NomMedicament, $Libelle, $Prix]);
    }


    // Supprimer
    public function Supprimer($Id){
        $this->SupprimerMedicaments->execute([$Id]);
    }

}