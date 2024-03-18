<?php

namespace app\models\admin;

use app\models\Model;

class Upload extends Model
{
    protected $table = 'uploads';

    public function findByProductId($productId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE product_id = :product_id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['product_id' => $productId]);
        return $stmt->fetch();
    }

    public $session = 'user_logged';

    public $user_id = 'user_id';
}