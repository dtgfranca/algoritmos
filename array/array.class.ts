export class Array
{
    private capacidade: number;
    private tamanho: number;
    private elementos: Array;

    constructor(capacidade: number)
    {
        this.capacidade = capacidade;
    }
    
    add(elemento:any)
    {
        for(let i =0; i < this.capacidade; i++){
            if(this.elementos[i] === null){
                this.elementos[i] = elemento;
                break;
            }
        }
    }
    
}