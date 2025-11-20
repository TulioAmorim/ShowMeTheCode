<?php

namespace Candidato;

use Address\Address;
use Candidato\Pessoa;

class Candidato extends Pessoa // Exemplo de Herança, Candidato e uma Pessoa, herda todos os atributos e metodos da classe pai Pessoa.
{
    /**
     * ENCAPSULAMENTO:
     * - Propriedades PRIVATE protegem os dados internos
     * - Acesso controlado atraves de métodos públicos ou privados
     */
    private bool $literate;
    private int $candidateNumber;
    private Address $pollingAddress; // Exemplo de composicao??, um candidato nao e um tipo de endereco, mas no contexto, tem um de `Address` nele.

    public function __construct($name, $nationality, $age, $gender, $literate, $candidateNumber, Address $pollingAddress)
    {
        parent::__construct($name, $nationality, $age, $gender);
        $this->literate = $literate;
        $this->candidateNumber = $candidateNumber;
        $this->pollingAddress = $pollingAddress;
    }

    public function getLiterate() {
        return $this->literate ? "SIM" : "NAO";
    }

    // Setter
    public function setLiterate(bool $literate): void {
        $this->literate = $literate;
    }

    /**
     * ENCAPSULAMENTO:
     * Acesso controlado atraves de métodos públicos ou privados
     * @return int
     */
    public function getCandidateNumber(): int
    {
        return $this->candidateNumber;
    }
}