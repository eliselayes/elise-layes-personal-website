<?php

namespace Site_perso\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId) {
        $sql = 'SELECT id, author, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY date_creation DESC';
        $comments = $this->executeRequest($sql, array($postId));
        return $comments;
    }

    public function postComment($postId, $author, $comment) {
        $sql = 'INSERT INTO comments(post_id, author, content, date_creation) VALUES(?, ?, ?, NOW())';
        $comments = $this->executeRequest($sql, array($postId, $author, $comment));
    }

    public function deleteCom($id) {
        $sql = 'DELETE FROM comments WHERE id = ?';
        $repoComment = $this->executeRequest($sql, array($id));
    }
}