<?php

require './App/DB/Database.php';

class ItensVenda {
    public int $id;
    public int $venda_id;
    public int $peca_id;
    public int $quantidade;
    public float $subtotal;

    public function cadastrar() {
        $db = new Database('itens_venda');

        return $db->insert([
            'venda_id' => $this->venda_id,
            'peca_id' => $this->peca_id,
            'quantidade' => $this->quantidade,
            'subtotal' => $this->subtotal,
        ]);
    }

    public function listar($where = null, $order = null, $limit = null) {
        $db = new Database('itens_venda');
        return $db->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function listar_por_id($id) {
        $db = new Database('itens_venda');
        return $db->select('id = ' . $id)->fetchObject(self::class);
    }

    public function atualizar() {
        $db = new Database('itens_venda');
        return $db->update('id = ' . $this->id, [
            'venda_id' => $this->venda_id,
            'peca_id' => $this->peca_id,
            'quantidade' => $this->quantidade,
            'subtotal' => $this->subtotal,
        ]);
    }

    public function excluir() {
        $db = new Database('itens_venda');
        return $db->delete('id = ' . $this->id);
    }
}
