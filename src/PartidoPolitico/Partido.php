<?php

namespace PartidoPolitico;

use Candidato\Candidato;

class Partido
{
    /**
     * ENCAPSULAMENTO
     * - Atributos privados, contralando assim, acesso a suas propriedades.
     * - Representa o ENCAPSULAMENTO, protegendo os dados da classe, sendo acessivel apenas por quem metodos especificos.
     */
    private string $name;
    private string $acronym;
    private array $candidatos;
    private Candidato $president;

    public function __construct($name, $acronym, Candidato $president) {
        $this->name = $name;
        $this->acronym = $acronym;
        $this->candidatos = [];
        $this->president = $president;
    }

    public function addCandidato(Candidato $candidato): void {
        $this->candidatos[] = $candidato;
    }

    /**
     * POLIMORFISMO
     * - Retorna informações da pessoa.
     * - Mesmo classe, mas sempre ira retornar objetos diferentes
     * - Representa o POLIMORFISMO, muito embora e um metodo de uma classe, cada Pessoa e um objeto diferente do mesmo tipo
     */
    public function getPartidoInfo(): string
    {
        return json_encode([
            "name" => $this->name,
            "acronym" => $this->acronym,
            "president" => $this->president->getPessoaInfo(),
            "candidatos" => array_map(
                fn(Candidato $c) => $c->getPessoaInfo(),
                $this->candidatos
            ),
        ], JSON_PRETTY_PRINT);
    }

}