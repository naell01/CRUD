<?php

class UsuarioDAO{ 
    
    public function create(Usuario $usuario){
        try{
            $ql = "INSERT INTO usuario (nome,sobrenome,idade,sexo)
            VALUES(:nome,:sobrenome,:idade,:sexo)";
            
            $p_sql = Conexao::getConexao()->prepare($ql);
            $p_sql ->bindValue(":nome",$usuario->getNome());
            $p_sql ->bindValue(":sobrenome",$usuario->getsobrenome());
            $p_sql ->bindValue(":iade",$usuario->getidade());
            $p_sql ->bindValue(":sexo",$usuario->getsexo());

            return $p_sql->execute();
        }catch(Exception $e){
            print "Erro ao inserir um usuário <br>".$e.'<br>';

        }
        
        }

        public function read(){
            try{
                $sql = "SELECT * FROM usuario order by nome"
            }catch
        }
    }
}    