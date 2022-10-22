<?php

namespace Diego\Algoritmos\BinaryHeap;

use function Webmozart\Assert\Tests\StaticAnalysis\integer;

class BinaryHeap
{
    private array $data;

    public function __construct()
    {
        (new swoole_http_server)
        $this->data = [];
    }
    /// binaryhead ->Estrutura de dados que armazena em uma arvore
    /// Uma binary heap pode ser  min -head ou max-heap
    /// Temos uma min -heap uma arvore para ququlquer nó o filho tem um valor mairo do que o pai
    /// maxheap acontece ao contrario do min-heap
    /// Binary heap é uma implementação é o priority queue
    /// uma binary hepa pode ser armazenada em uma lista simples(array)
    /// não precisa de uma arvore binária
    /// Um padrão para ser distribuido em uma fila  apartir de um nó é:
    /// Esquerda -> l(2i+1)
    /// Direita (2i+2)
    /// Calculando o indice do nó pai:
    /// P((i-1/2))
    ///parei 12:31min
    ### max-heap[4.2.8,7,1,53,6]
    public function execute(array $array): array
    {
        $parent = 0;
        echo "#############inicio ########### \n";
        foreach ($array as $i => $value) {
            print_r($this->insert($i, $array));

//            echo("pai: " . $array[$this->parent($i)] . "\n" . "Filho Esquerdo:" . $array[$this->left($i)] . "\n" ."Filho direito: {$array[$this->right($i)]} \n");
//            if( $array[$this->parent($i)] < $array[$this->left($i)] ) {
//                $temp =   $array[$this->left($i)];
//                $array[$this->left($i)] = $array[$this->parent($i)] ;
//                $array[$this->parent($i)] =$temp;
//            }
//            if( $array[$this->parent($i)] < $array[$this->right($i)] ) {
//                $temp =   $array[$this->right($i)];
//                $array[$this->right($i)] = $array[$this->parent($i)] ;
//                $array[$this->parent($i)] =$temp;
//            }
//            echo("pai: " . $array[$this->parent($i)] . "\n" . "Filho Esquerdo:" . $array[$this->left($i)] . "\n" ."Filho direito: {$array[$this->right($i)]} \n");
//            echo "################## \n";


//            if(isbigger($i,$p)) {
//                swap($i,$p);
//            }
        }
        return [];
    }

    private function insert(int $value, array $array): array
    {
        $this->data[$value] = $array[$value];
        $i = count($this->data) - 1;
        $parent = $this->parent($i);
        if ($this->data[$this->parent($i)] < $this->data[$this->left($i)]) {
            $temp = $this->data[$this->left($i)];
            $this->data[$this->left($i)] = $this->data[$this->parent($i)];
            $this->data[$this->parent($i)] = $temp;
        }
        if ($this->data[$this->parent($i)] < $this->data[$this->right($i)]) {
            $temp = $this->data[$this->right($i)];
            $this->data[$this->right($i)] = $this->data[$this->parent($i)];
            $this->data[$this->parent($i)] = $temp;
        }
        return $this->data;

    }

    private function parent($i): int
    {
        return (int)abs(($i - 1) / 2);
    }

    private function left(int $i): int
    {
        return (int)abs(2 * $i + 1);
    }

    private function right(int $i): int
    {
        return (int)abs(2 * $i + 2);
    }
}
