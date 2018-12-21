<?php
include_once "bdd.php";
class InterventionModel extends Database
{
    public function __construct()
    {
        Database::__construct();
    }

    public function create(Intervention $intervention)
    {
        $query = "INSERT INTO intervention (nom, bureau, probleme, description, date, etat)
                  VALUES (:nom, :bureau, :probleme, :description, :date, :etat)";
        $sql = $this->bdd->prepare($query);
        $sql->bindParam(':nom', $intervention->nom, PDO::PARAM_STR);
        $sql->bindParam(':bureau', $intervention->bureau, PDO::PARAM_STR);
        $sql->bindParam(':probleme', $intervention->probleme, PDO::PARAM_STR);
        $sql->bindParam(':description', $intervention->description, PDO::PARAM_STR);
        $sql->bindParam(':date', $intervention->date, PDO::PARAM_STR);
        $sql->bindParam(':etat', $intervention->etat, PDO::PARAM_STR);
        $result = $sql->execute();
        if ($result === TRUE)
        {
            return $this->bdd->lastInsertId();
        }
        return -1;
    }

    public function getAll()
    {
        $query = "SELECT * FROM intervention";
        $sql = $this->bdd->query($query);
        $interventions = $sql->fetchAll();
        $result = [];
        foreach ($interventions as $key=>$value)
        {
            $intervention = new Intervention($value["nom"], $value["bureau"], $value["probleme"], $value["description"]);
            $intervention->date=$value["date"];
            $intervention->etat=$value["etat"];
            $intervention->id=$value["id"];
            $result[] = $intervention;
        }
        return $result;
    }

    public function getbyId($id)
    {
        $query = "SELECT * FROM intervention
                  WHERE id = :id";
    }
}
?>