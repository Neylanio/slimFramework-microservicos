define({ "api": [
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "./apidoc/main.js",
    "group": "E:\\xampp\\htdocs\\parouimpar\\apidoc\\main.js",
    "groupTitle": "E:\\xampp\\htdocs\\parouimpar\\apidoc\\main.js",
    "name": ""
  },
  {
    "type": "POST",
    "url": "/operacao",
    "title": "Teste Par ou Impar",
    "version": "1.0.0",
    "description": "<p>Microsserviço que provê dados para o API Gateway</p>",
    "group": "Testes_Numéricos",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "valor",
            "description": "<p>Valor a ser testada</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example:",
          "content": "{\n  \"valor\": 11\n}",
          "type": "JSON"
        }
      ]
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "resultado",
            "description": "<p>Resultado da operação</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "erro",
            "description": "<p>Deu erro em alguma coisa</p>"
          }
        ]
      }
    },
    "filename": "./index.php",
    "groupTitle": "Testes_Numéricos",
    "name": "PostOperacao"
  }
] });
