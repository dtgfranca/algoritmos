<?php

namespace Diego\Algoritmos\BinaryHeap;

use function Webmozart\Assert\Tests\StaticAnalysis\integer;

class BinaryHeap
{
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
    ///
    ### max-heap[4.2.8,7,1,53,6]
    public function execute(array $array): array
    {
        $parent = 0;
        foreach ($array as $i => $value) {
            die("pai" . $this->parent($i) . "\n" . "Filho Esquerdo:" . $this->left($this->parent($i)) . "\n" ."Filho direito: {$this->right($this->parent($i))} \n");
        }
        return [];
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
