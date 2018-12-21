<?php
class UserModel extends Database
{
    public function create($nom, $password)
    {
        $query = "INSERT INTO user (nom, password)
        VALUES (:nom, :password)";
        $sql = $this->bdd->prepare($query);
        $sql->bindParam(':nom', $nom, PDO::PARAM_STR);
        $sql->bindParam(':password', sha1($password), PDO::PARAM_STR);
        $result = $sql->execute();
    }

    public function get($nom, $password)
    {
        $query = "SELECT * FROM user WHERE nom == :nom AND password == :password";
        $sql = $this->bdd->prepare($query);
        $sql->bindParam(':nom', $nom, PDO::PARAM_STR);
        $sql->bindParam(':password', sha1($password), PDO::PARAM_STR);
        $result = $sql->execute();
        $users = $sql->fetchAll();
        if (count($users) !=1 )
        {
            return NULL;
        }
        return $users[0];
    }
}