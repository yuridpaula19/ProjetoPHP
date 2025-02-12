<?php

require './App/DB/Database.php';

class Fornecedor {
    public int $id;
    public string $nome;
    public string $telefone;
    public string $email;

    public function cadastrar() {
        $db = new Database('fornecedores');

        return $db->insert([
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email,
        ]);
    }

    public function listar($where = null, $order = null, $limit = null) {
        $db = new Database('fornecedores');
        return $db->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function listar_por_id($id) {
        $db = new Database('fornecedores');
        return $db->select('id = ' . $id)->fetchObject(self::class);
    }

    public function atualizar() {
        $db = new Database('fornecedores');
        return $db->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email,
        ]);
    }

    public function excluir() {
        $db = new Database('fornecedores');
        return $db->delete('id = ' . $this->id);
    }
}
