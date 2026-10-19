<?php
class Planta {
    private string $nome;
    private string $especie;
    private float $aguaPorDia;

    public function __construct(string $nome, string $especie, int $aguaPorDia) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->aguaPorDia = $aguaPorDia;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getEspecie() : string {
        return $this->especie;
    }

    public function getAguaPorDia() : float {
        return $this->aguaPorDia;
    }

    public function calcularAguaSemanal() : float {
        return $this->aguaPorDia * 7;
    }
}