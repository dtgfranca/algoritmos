export class Array
{
    private total: number;
    private tamanho: number;
    private elementos: Array;
 
    adiciona(elemento:any)
    {   
        this.elementos[this.total] = elemento;
        this.total++;
      
    }

    adicionaNaPosicao(posicao:number, elemento: any)
    {

        for(let i = this.total -1; i >= posicao ; i -=1){
       
            this.elementos[i+1] = this.elementos[i];
        }
        this.elementos[posicao]  = elemento;
        this.total++;
    }
    remover(posicao:number)
    {
        for(let i = posicao; i < this.tamanho; i++){
            this.elementos[i-1] = this.elementos[i];
        }
        this.total--;
    }
    contem(elemento: any): boolean
    {
        for(let i=0;  i < this.total; i++){
            if(this.elementos[i]===elemento){
                return true;
            }
            return false;
        }
    }
    listar()
    {
        return this.elementos;
    }
    
}