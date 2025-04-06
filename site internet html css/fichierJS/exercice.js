

class Personnage {
    constructor(name,attaque,vie,precision){
        this.name = name;
        this.attaque=attaque;
        this.vie =vie ;
        this.precision = precision;
    }
    
    Prec(){
        return Math.random() < this.precision;
    }
    getAttack(adversaire){
        if(this.Prec()){
            console.log(adversaire.name + " attaque ")
            console.log("ça touche")
            this.vie = this.vie - adversaire.attaque
            return console.log('il reste ' + this.vie +'points de vie a ' + this.name )

        }else{
            console.log(adversaire.name + " attaque ")
            console.log("L'attaque de " + adversaire.name + " échouer")
            return console.log('il reste ' + this.vie +' points de vie a ' + this.name)

        }
        
    }
    
}
let max = new Personnage("max",3,20,0.6)
let mathis = new Personnage("mathis",3,20,0.5)

while(max.vie > 0 && mathis.vie>0){
    max.getAttack(mathis)
    if(max.vie>0){
    mathis.getAttack(max)
    }else{
        console.log("max a perdu")
    }
    if(mathis.vie<0){
        console.log("mathis a perdu")
    }
}

