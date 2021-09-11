<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;




    public function __construct(string $tp, string $dn)
    {
        $this->zeraNumConta(0);
        $this->setStatus(false);
        $this->setSaldo(0);
        $this->abrirConta($tp, $dn);
    }

    public function zeraNumConta($nc)
    {
        $this->numConta = $nc;
    }

    public function setNumConta()
    {
        $c = $this->getNumConta();
        if ($c == 0) {
            $c = $c + 1;
            $this->numConta = $c;
        }
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setTipo(string $tp)
    {
        switch ($tp) {
            case 'cp':
                $this->tipo = $tp;
                $this->setSaldo(150);
                break;

            case 'cc':
                $this->tipo = $tp;
                $this->setSaldo(50);
                break;

            default:
                echo "Favor informe cc ou cp";
                break;
        }
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setDono($dn)
    {
        $this->dono = $dn;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setSaldo($valor)
    {
        $this->saldo = $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setStatus(bool $st)
    {
        $this->status = $st;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function abrirConta(string $tp, string $dn)
    {

        $this->setStatus(true);
        $this->setTipo($tp);
        $this->setNumConta();
        $this->setDono($dn);
    }

    public function fecharConta()
    {
        $s = $this->getSaldo();

        if ($s < 0) {

            echo "Você tem débitos em aberto, não é possível encerrar a conta";
        }

        if ($s == 0) {

            $this->setStatus(false);
            echo "Conta ecerrada";
        }

        if ($s > 0) {
            echo "Você tem dinheiro em conta, favor sacar antes de fechar a conta";
        }
    }

    public function depositar($valor)
    {
        $st = $this->getStatus();
        $sd = $this->getSaldo();
        if ($st == false) {
            echo "Você não pode depositar em uma conta fechada";
        } else {

            $sd = $sd + $valor;
            $this->setSaldo($sd);
            echo "Valor depositado com sucesso";
        }
    }

    public function sacar($valor)
    {
        $st = $this->getStatus();
        $sd = $this->getSaldo();
        if ($st == false) {
            echo "Você não pode sacar dinheiro de uma conta fechada";
        }

        if ($valor > $sd) {
            echo "Seu saldo é insuficiente para efetuar o saque";
        } else {

            $sd = $sd - $valor;
            $this->setSaldo($sd);
            echo "Saque efetuado com sucesso";
        }
    }

    public function pagarMensal()
    { 
        $tp = $this->getTipo();
        $sd = $this->getSaldo();

        if ($tp == 'cc') {
            $sd = $sd - 12;
            $this->setSaldo($sd);
        }

        if ($tp == 'cp') {
            $sd = $sd - 20;
            $this->setSaldo($sd);
        }

    }
}
