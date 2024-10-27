<?php

class HomeController extends RenderView
{

    public function index(){//Exibindo página
        $bd = new UserModel();

        $this->loadView('home',[
            'usuarios' => $bd->fetch()
        ]);
    }

    public function store(){//Cadastrando registros
        $bd = new UserModel();
        
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuario (name,email) VALUES ('$name','$email');";

        $bd->query($sql);

        header('Location: home');
    }

    public function edit($id){//Redirecionando para edição
        $bd = new UserModel();

        $this->loadView('editar',[
            'id' => $id[0],
            'dados' => $bd->fetchById($id[0])
        ]);
    }

    public function update($id){//Atualizando registros
        $bd = new UserModel();

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE usuario SET name='$name', email='$email' WHERE id='$id[0]'";

        $bd->query($sql);
        
        header('Location: ../home');
    }

    public function delete($id){//Deletando registros
        $bd = new UserModel();

        $sql = "DELETE FROM usuario WHERE id='$id[0]'";

        $bd->query($sql);
        
        header('Location: ../home');
    }

}