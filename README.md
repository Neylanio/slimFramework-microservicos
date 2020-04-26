Sobre
Um projeto que simula uma api-gateway, onde, internamente, ela sabe quais serviços e suas urls para execução de algum recurso.

O cliente pode solicitar os serviços de Somar, subtração, multiplicação e divisão de 2 números, os quais passam por uma pre-validação dos parâmetros enviados através do serviço de validação de números.

URL	Método	Resposta Sucesso
/somar	POST	- resultado -> Resultado da soma
/subtrair	POST	- resultado -> Resultado da subtração
/multiplicar	POST	- resultado -> Resultado da multiplicação
/dividir	POST	- resultado -> Resultado da divisão
Todas as rotas, devem aceitam os seguintes parâmetros:

valor1 -> Number
valor1 -> Number
Caso algum serviço não esteja funcionando, a api retornará a mensagem de "Recurso temporariamente indisponível". Caso você não envie os valores como Number, a api retornará "BadRequest".

Teconologias
Para execução:
NodeJS 12.9.1;
Yarn 1.19.1;
Na construção:
PHP ^7
SlimFramework ^3;
Como executar
Como nesse repositório são 6 "servidores", você precisará de 6 instâncias de terminal, abra-os e em cada um, você vai em uma pasta diferente.

Testando
Para testar, basta você abrir algum aplicativo como Insomnia ou GetPostman e simular a requisição da api com o seguinte body:

{
  "valor1": 10,
  "valor2": 5
}
Altere os valores conforme necessitar.
