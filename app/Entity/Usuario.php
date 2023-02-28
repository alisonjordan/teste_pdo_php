<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Usuario{

  /**
   * Identificador único do usuário
   * @var integer
   */
  public $id;

  /**
   * Nome do usuário
   * @var string
   */
  public $nome;

   /**
   * Sobrenome do usuário
   * @var string
   */
  public $sobrenome;

   /**
   * Email do usuário
   * @var string
   */
  public $email;

  /**
   * Senha do usuário
   * @var string
   */
  public $senha;

  /**
   * Método responsável por cadastrar um usuário no banco
   * @return boolean
   */
  public function cadastrar(){
    
    //INSERIR UM USUÁRIO NO BANCO
    $obDatabase = new Database('usuarios');
    $this->id = $obDatabase->insert([
                                      'nome'    => $this->nome,
                                      'sobrenome' => $this->sobrenome,
                                      'email'     => $this->email,
                                      'senha'      => $this->senha
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar o usuário no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('usuarios'))->update('id = '.$this->id,[
                                                                  'nome'    => $this->nome,
                                                                  'sobrenome' => $this->sobrenome,
                                                                  'email'     => $this->email,
                                                                  'senha'      => $this->senha
                                                              ]);
  }

  /**
   * Método responsável por excluir o usuário do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('usuarios'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as vagas do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getUsuarios($where = null, $order = null, $limit = null){
    return (new Database('usuarios'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar um usuario com base em seu ID
   * @param  integer $id
   * @return Usuario
   */
  public static function getUsuario($id){
    return (new Database('usuarios'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}