<?php

require './App/DB/Database.php';
    class Peca{
        public int $id_peca;
        public string $nome;
        public string $modelo_carro;
        public float $preco;
        public int $estoque;



        public function cadastrar(){

            $db = new Database('peca');

            $res = $db->insert(
                [
                    'nome' => $this->nome,
                    'modelo_carro' => $this->modelo_carro,
                    'preco' => $this->preco,
                    'estoque' => $this->estoque,
                ]
                );

            return $res;
        }

        public function listar($where = null, $order = null, $limit = null){
            $db = new Database('peca');
            $res = $db->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS,self::class);
            return $res;
        }
        public function listar_por_id($id){
            $db = new Database('peca');
            $res = $db->select('id_peca = ' . $id)->fetchObject(self::class);
            return $res;
        }

        public function atualizar(){
            $db = new Database('peca');
            $res = $db->update(
                'id_peca = ' . $this->id_peca,
                [
                    'nome' => $this->nome,
                    'modelo_carro' => $this->modelo_carro,
                    'preco' => $this->preco,
                    'estoque' => $this->estoque,
                ]
            );
            return $res;
        }

        public function excluir(){
            $db = new Database('peca');
            $res = $db->delete('id_peca = ' . $this->id_peca);
            return $res;
        }

    }
    // $colab = new Categoria();
    // $colab->descricao = 'teste';
    // $colab->cor = 'teste';
    // $colab->icone = 'teste';

    // echo '<pre>';
    // print_r($colab);
    // echo '</pre>';

    // $res = $colab->cadastrar();
    // echo '<br>';
    // echo $res;

    // $lista = $colab->listar();

    // echo '<pre>';
    // print_r($lista);
    // echo '</pre>';

    // foreach($lista as $lis){
    //     echo $lis->descricao . " | " . $lis->cor . " | " . $lis->icone;
    //     echo '<br>';
    // }

    // $cat = new Categoria();
    // $retorno = $cat->listar_por_id(1);
    // $cat->id_categoria = 2;
    // $retorno = $cat->excluir();
    // echo '<br>';

    // if($retorno){
    //     echo 'Excluido com sucesso';
    // }else{
    //     echo 'Erro ao excluir';
    // }
    // echo '<br>';
    // print_r($retorno);

    // $retorno->descricao = 'Novo';
    // $retorno->cor = 'Novo';
    // $retorno->icone = 'Novo';
    // $tja = $retorno->atualizar();
    // echo '<br>';
    // print_r($tja);


?>