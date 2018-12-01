# MVC - Model-view-controller

Model-view-controller (MVC), é um padrão de arquitetura de software (Não confundir com um design pattern) que separa a representação da informação da interação do usuário com ele. O model consiste nos dados da aplicação, regras de negócios, lógica e funções. Uma view pode ser qualquer saída de representação dos dados, como uma tabela ou um diagrama. É possível ter várias visões do mesmo dado, como um gráfico de barras para gerenciamento e uma visão tabular para contadores. O controller faz a mediação da entrada, convertendo-a em comandos para o modelo ou visão. As ideias centrais por trás do MVC são a reusabilidade de código e separação de conceitos. – Wikipedia



![](https://i.imgur.com/HUhtjBp.png)


#### Model 
* Sempre que você pensar em manipulação de dados, pense em model. Ele é responsável pela leitura e escrita de dados, e também de suas validações.

#### View
* A camada de interação com o usuário. Ela apenas faz a  exibição dos dados, sendo ela por meio de um html ou xml.

#### Controller
* O responsável por receber todas as requisições do usuário. Seus métodos chamados actions são responsáveis por uma página, controlando qual model usar e qual view será mostrado ao usuário.


## Pseudocodigo

```

começacodigo():
	classe sintatica:
		começar():
			pegar valorArrayLexico(atual)	
			chama reservadas()
			se valorArrayLexico(atual) != nulo:
				mostrar erro sintatico
			se não:
				mostrar sintaticamente correto
		fim começar();

		reservadas():
			se valorArrayLexico(atual) == begin
				adiciona 1 a variavel
				pegar valorArrayLexico(atual)
				chama bloco()
				se valorArrayLexico(atual) == end
					remove 1 a variavel
					pegar valorArrayLexico(atual)
					chama bloco()
				se não
					resto = |variavel|
					se resto > 0
						mostrar erro sintatico de begins
					se resto < 0
						mostrar erro sintatico de ends

			se não
				mostrar erro sintatico de inical de begin
		fim reservadas();

		bloco():
			se valorArrayLexico(atual) = identificador
				pegar valorArrayLexico(atual)
				se valorArrayLexico(atual) = '='
					pegar valorArrayLexico(atual)
					se valorArrayLexico(atual) = identificador || numero
						pegar valorArrayLexico(atual)
						se valorArrayLexico(atual) = '+'
							pegar valorArrayLexico(atual)
							se valorArrayLexico(atual) = identificador || numero
								pegar valorArrayLexico(atual)
							se não
								mostrar erro sintatico de falta de identificador ou numero depois da soma
							chamar bloco()
						se não
							mostrar erro sintatico de soma
					se não
						mostrar erro sintatico de falta de identificador ou numero depois de atribuição
				se não
					mostrar erro sintatico de falta de atribuição
							
			se não se valorArrayLexico(atual) begin
				chama reseravadas()
			se nao se valorArrayLexico(atual) end ou nullo
				matar bloco()
			se nao
				mostrar erro sintatico de começar com identificador

		fim bloco();

termina codigo();

```


## Estrutura de arquivos

```
  MVC
  |
  |--assets/
  |  |--css/
  |  |--img/
  |  |--js/
  |  
  |--controllers/
  |  |--all controllers/
  |
  |--lib/
  |  |--autoloader.php/
  |
  |--models/
  |  |--all models/
  |
  |--views/
  |  |--all views/
  |
  |--index.php/
  |
```

## O que é esse repositório?

É um analisador simples Lexico e Sintatico usando os padrões MVC em PHP. Projeto para aprendizado dos padrões MVC e POO em PHP.

Todos os arquivos que estão disponíveis nesse repositório estão comentados para facilitar o entendimento do que está acontecendo no código e assim conseguir construir sua base de arquitetura MVC para facilitar na organização da sua aplicação.

## Licença


Este repositório está licenciado sob o MIT License - consulte o arquivo [LICENSE](LICENSE) para obter detalhes.
