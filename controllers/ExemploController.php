<?php
    // Exemplo de controller para chamar uma view desejada
    class ExemploController extends Controller{
        public function process($params){
            // Adicionar as variaveis title e description para serem mostradas na pagina
            $this->head['title'] = "MVC";
            $this->head['description'] = "Pagina inicial";
            // Chama o view para ser mostrado.
            $this->view = 'exemplo';
        }
    }
?>
