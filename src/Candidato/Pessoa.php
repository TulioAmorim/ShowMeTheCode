<?php

namespace Candidato;

abstract class Pessoa
{
    /**
     * ENCAPSULAMENTO
     * - Atributos privados, contralando assim, acesso a suas propriedades.
     * - Representa o ENCAPSULAMENTO, protegendo os dados da classe, sendo acessivel apenas por quem metodos especificos.
     */
    private string $name;
    private string $nationality;
    private int $age;
    private string $gender;

    public function __construct($name, $nationality, $age, $gender)
    {
        $this->name = $name;
        $this->nationality = $nationality;
        $this->age = $age;
        $this->gender = $gender;
    }

    /**
     * POLIMORFISMO
     * - Retorna informações da pessoa.
     * - Mesmo classe, mas sempre ira retornar objetos diferentes
     * - Representa o POLIMORFISMO, muito embora e um metodo de uma classe, cada Pessoa e um objeto diferente do mesmo tipo
     */
    public function getPessoaInfo(): string
    {
        return json_encode([
            "name" => $this->name,
            "nationality" => $this->nationality,
            "age" => $this->age,
            "gender" => $this->gender,
        ], JSON_PRETTY_PRINT);
    }
}
