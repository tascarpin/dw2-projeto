<?php
namespace src\app\model\entity;

class Pedido
{
    private $idPedido;
    private $codigo;
    private $operadorCaixa;
    private $desconto;
    private $total;
    private $pagamento;
    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @return mixed
     */
    public function getOperadorCaixa()
    {
        return $this->operadorCaixa;
    }

    /**
     * @return mixed
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return mixed
     */
    public function getPagamento()
    {
        return $this->pagamento;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @param mixed $operadorCaixa
     */
    public function setOperadorCaixa($operadorCaixa)
    {
        $this->operadorCaixa = $operadorCaixa;
    }

    /**
     * @param mixed $desconto
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @param mixed $pagamento
     */
    public function setPagamento($pagamento)
    {
        $this->pagamento = $pagamento;
    }

    
    
}

