<?php

include "config.php";
//connextion bd

function connecter_db()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=' . DB, USER, PWD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


        return $dbh;
    } catch (PDOException  $e) {

        echo "Erreur de connexion a la base de donnees " . $e->getMessage();
    }
}


//ajouter un employer
function ajouter_employer($nom,$prenom,$email,$num,$departement_id,$chemin)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("insert into employer (nom,prenom,email,num,departement_id,chemin) values(?,?,?,?,?,?)");
        $rp->execute([$nom,$prenom,$email,$num,$departement_id,$chemin]);
    } catch (PDOException  $e) {
        echo "Erreur d'ajout de employer  " . $e->getMessage();
    }
}
// modifier un employer 

function modifier_employer($nom,$prenom,$email,$num,$id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update employer set nom=?,prenom=?,email=?,num=?  where id =?");
        $rp->execute([$nom,$prenom,$email,$num,$id]);
    } catch (PDOException  $e) {
        echo "Erreur de modifier de employer  " . $e->getMessage();
    }
}
//ajouter un employer
function ajouter_departement($nomdepartement)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("insert into departement (nomdepartement) values(?)");
        $rp->execute([$nomdepartement]);
    } catch (PDOException  $e) {
        echo "Erreur d'ajout de departement  " . $e->getMessage();
    }
}
// modifier un employer 

function modifier_departement($nomdepartement,$id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update departement set nomdepartement=? where id =?");
        $rp->execute([$nomdepartement,$id]);
    } catch (PDOException  $e) {
        echo "Erreur de modifier de employer  " . $e->getMessage();
    }
}
// ajouter un absence
function ajouter_absence($nombredheur,$detail,$employe_id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("insert into absence (nombredheur,detail,employe_id) values(?,?,?)");
        $rp->execute([$nombredheur,$detail,$employe_id]);
    } catch (PDOException  $e) {
        echo "Erreur d'ajout de employe  " . $e->getMessage();
    }
}
// modifier abdence
function modifier_absence($id,$nombredheur,$detail,$employe_id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update absence set nombredheur=?,detail=?,employe_id=? where id =?");
        $rp->execute([$id,$nombredheur,$detail,$employe_id]);
    } catch (PDOException  $e) {
        echo "Erreur de modifier de employe  " . $e->getMessage();
    }
}
function absenceEtemplpyer()
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select a.*,e.nom,e.prenom from absence a join employer e on a.employe_id=e.id order by e.id desc ");
        $rp->execute();

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de employer  " . $e->getMessage();
    }
}

//supprimer

function supprimer($id,$table)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("delete from $table where id =?");
        $rp->execute([$id]);
    } catch (PDOException  $e) {
        echo "Erreur de suppression de employer  " . $e->getMessage();
    }
}


// lister les produits 
function all($table)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from $table ");
        $rp->execute();

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de employer  " . $e->getMessage();
    }
}
function employerEtdepartement()
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select e.*,d.nomdepartement from employer e join departement d on d.id=e.departement_id ");
        $rp->execute();

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de employer  " . $e->getMessage();
    }
}

// modifier un produit 



// rechercher un produit par son id
function findById($id,$table)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from $table where id=? ");
        $rp->execute([$id]);

        return $rp->fetch();
    } catch (PDOException  $e) {
        echo "Erreur de selection de employer  " . $e->getMessage();
    }
}

//findByCondition("employer","employe_id=2")
function findByCondition($table,$condition)
{
    try {


        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("select * from $table where $condition ");
        //executer
        $rp->execute();
        $resultat = $rp->fetchAll(); //extraire tous 
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur dans all" . $e->getMessage();
    }
}
//rechercher un produit par son libelle 
function rechercher($mc)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from employer where nom like ? ");
        $rp->execute(["%$mc%"]);

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de recherche de employer  " . $e->getMessage();
    }
}
function rechercher_user_par_id($id){
    $cnx = connecter_db();

    $rp = $cnx->prepare("select * from employer e join departement d on e.id=d.id");

    $rp->execute(array($id));

    $resultat = $rp->fetch();

    return $resultat;
}
//ajouter un conge
function ajouter_conge($date_debut,$date_fin,$employe_id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("insert into conge (date_debut,date_fin,employe_id) values(?,?,?)");
        $rp->execute([$date_debut,$date_fin,$employe_id]);
        return $cnx->lastInsertId();
    } catch (PDOException  $e) {
        echo "Erreur d'ajout   " . $e->getMessage();
    }
}
// modifier abdence
function modifier_conge($id,$date_debut,$date_fin)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update conge set date_debut=?,date_fin=? where id =?");
        $rp->execute([$id,$date_debut,$date_fin]);
    } catch (PDOException  $e) {
        echo "Erreur de modifier de conge  " . $e->getMessage();
    }
}
function congeEtemplpyer($id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select c.*,e.nom,e.prenom from conge c join employer e on c.employe_id=e.id where c.id=? order by e.id desc ");
        $rp->execute([$id]);

        return $rp->fetch();
    } catch (PDOException  $e) {
        echo "Erreur de selection de employer  " . $e->getMessage();
    }
}
function employerEtdepartements()
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select e.id,e.nom,e.prenom,d.nomdepartement from employer e join departement 
        d on d.id=e.departement_id ");
        $rp->execute();

        return $rp->fetch();
    } catch (PDOException  $e) {
        echo "Erreur de selection de employer  " . $e->getMessage();
    }
}
// compter les employes
function countItems($item, $table){
    try{
        $cnx = connecter_db();
        $rp=$cnx->prepare("SELECT COUNT($item) FROM $table");
        $rp->execute();
        return $rp->fetchColumn();
    } catch (PDOException  $e) {
        echo "Erreur de selection de employer  " . $e->getMessage();
    }

}



?>