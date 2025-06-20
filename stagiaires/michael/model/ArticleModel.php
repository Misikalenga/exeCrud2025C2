<?php
# model/ArticleModel.php

/**
 * @param PDO $connect
 * @return array
 * Récupère les articles publiés sur la
 * page d'accueil par date de publication descendante
 */
function getArticlesPublished(PDO $connect): array
{
    // requête préparée (non obligatoire, car pas d'entrée utilisateur)
    $request = $connect->prepare("
    SELECT a.`idarticle`, a.`title`, a.`slug`, SUBSTRING(a.`articletext`,1,300) AS `articletext`, a.`articlepublished`, a.`articledatepublished`, u.`login`, u.`username`
    FROM `article` a 
        INNER JOIN `user` u 
            ON a.`user_iduser`= u.`iduser`
    WHERE a.`articlepublished`=1 
    ORDER BY a.`articledatepublished` DESC ;
");
    try{
        $request->execute();
        $results = $request->fetchAll();
        $request->closeCursor();
        return $results;
    }catch (Exception $e){
        die($e->getMessage());
    }
}


/**
 * @param PDO $connect
 * @return array
 * Récupère les articles pour l'administration
 * par publication ascendante et
 * date de publication descendante
 */
function getAllArticles(PDO $connect): array
{
    // requête préparée (non obligatoire, car pas d'entrée utilisateur)
    $request = $connect->prepare("
    SELECT a.`idarticle`, a.`title`, a.`slug`, SUBSTRING(a.`articletext`,1,100) AS `articletext`, a.`articlepublished`, a.`articledatepublished`, u.`login`, u.`username`
    FROM `article` a 
        INNER JOIN `user` u 
            ON a.`user_iduser`= u.`iduser`
    ORDER BY a.`articlepublished` ASC,
             a.`articledatepublished` DESC ;
");
    try{
        $request->execute();
        $results = $request->fetchAll();
        $request->closeCursor();
        return $results;
    }catch (Exception $e){
        die($e->getMessage());
    }
}

/**
 * @param PDO $connect
 * @param int $id
 * @return bool
 * Suppression d'un article via son id
 */
function deleteArticleById(PDO $connect, int $id): bool
{
    $sql = "DELETE FROM `article` WHERE `idarticle`=?";
    $request = $connect->prepare($sql);
    try{
        $request->execute([$id]);
        $request->closeCursor();
        return true;
    }catch(Exception $e){
        die($e->getMessage());
    }
}