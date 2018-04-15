<?php

namespace sukawarna;

class model_bidang {

    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function select() {
        $stmt = $this->pdo->query('SELECT "idBidang", "namaBidang" '
            . 'FROM bidang '
            . 'ORDER BY "namaBidang"');
        $bidang = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $bidang[] = [
                'id' => $row['idBidang'],
                'namaBidang' => $row['namaBidang']
            ];
        }
        return $bidang;
    }

    public function insert_bidang($id, $namaBidang) {
        // prepare statement for insert
        $sql = 'INSERT INTO bidang VALUES(:id,:namaBidang)';
        $stmt = $this->pdo->prepare($sql);

        // pass values to the statement
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':namaBidang', $namaBidang);

        // execute the insert statement
        $stmt->execute();
    }

    public function update_bidang($id, $namaBidang) {
        // sql statement to update a row in the bidang table
        $sql = 'UPDATE bidang '
            . 'SET "idBidang" = :id, '
            . '"namaBidang" = :namaBidang '
            . 'WHERE "idBidang" = :id';

        $stmt = $this->pdo->prepare($sql);

        // bind values to the statement
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':namaBidang', $namaBidang);
        // update data in the database
        $stmt->execute();
    }

    public function delete_bidang($id) {
        // sql statement to update a row in the bidang table
        $sql = 'DELETE FROM bidang '
            . 'WHERE "idBidang" = :id';

        $stmt = $this->pdo->prepare($sql);

        // bind values to the statement
        $stmt->bindValue(':id', $id);
        // update data in the database
        $stmt->execute();
    }

} // end model

?>