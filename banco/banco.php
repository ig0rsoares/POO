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


        if ($this->getSaldo() < 0) {

            echo "Você tem débitos em aberto, não é possível encerrar a conta";
        }

        if ($this->getSaldo() == 0) {

            $this->setStatus(false);
            echo "Conta ecerrada";
        }

        if ($this->getSaldo() > 0) {
            echo "Você tem dinheiro em conta, favor sacar antes de fechar a conta";
        }
    }

    public function depositar($valor)
    {
        if ($this->getStatus() == false) {
            echo "Você não pode depositar em uma conta fechada";
        } else {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "Valor depositado com sucesso";
        }
    }

    public function sacar($valor)
    {

        if ($this->getStatus() == false) {
            echo "Você não pode sacar dinheiro de uma conta fechada";
        }

        if ($valor > $this->getSaldo()) {
            echo "Seu saldo é insuficiente para efetuar o saque";
        } else {

            $this->setSaldo($this->getSaldo() - $valor);
            echo "Saque efetuado com sucesso";
        }
    }

    public function pagarMensal()
    {
        if ($this->getStatus() == false) {
            echo "Problemas com a conta";
        }

        if ($this->getTipo() == 'cc') {
            $this->setSaldo($this->getSaldo() - 12);
        }

        if ($this->getTipo() == 'cp') {
            $this->setSaldo($this->getSaldo() - 20);
        }
    }
}
