<?php

require './App/DB/Database.php';

class Venda {
    public int $id;
    public string $data_venda;
    public float $total;

    public function cadastrar() {
        $db = new Database('vendas');

        return $db->insert([
            'total' => $this->total
        ]);
    }

    public function listar($where = null, $order = null, $limit = null) {
        $db = new Database('vendas');
        return $db->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function listar_por_id($id) {
        $db = new Database('vendas');
        return $db->select('id = ' . $id)->fetchObject(self::class);
    }

    public function atualizar() {
        $db = new Database('vendas');
        return $db->update('id = ' . $this->id, [
            'total' => $this->total
        ]);
    }

    public function excluir() {
        $db = new Database('vendas');
        return $db->delete('id = ' . $this->id);
    }
}
