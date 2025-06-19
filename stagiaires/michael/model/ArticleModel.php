<?php
# model/ArticleModel.php

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


