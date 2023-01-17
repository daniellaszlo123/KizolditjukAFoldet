import FetchClass from "../model/FetchClass.js"
import BejegyzesekPublicView from "../view/BejegyzesekPublicView.js"

class BejegyzesController{
    #token
    constructor(){
        this.#token=document.querySelector('meta[name="csrf-token"]').getAttribute("content"); 
        const f = new FetchClass(this.#token);
        f.adatLeker('/api/bejegyzesek', this.adatokBetolt)
    }

    adatokBetolt(tomb){
        let szuloelem=document.querySelector("article")
        new BejegyzesekPublicView(szuloelem, tomb)
    }
}
export default BejegyzesController