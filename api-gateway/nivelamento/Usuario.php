<?php
namespace Nivelamento;

// use Exception;

class Usuario {

    // private, public, protected

    private $nome;
    private $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;

        // $e = new Exception("Teste");
    }

    public function getNome(): ?string {
        return $this->nome;
    }

    public function getIdade(): ?int {
        return $this->idade;
    }
}