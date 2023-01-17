import FetchClass from "../model/FetchClass.js"
import BejegyzesekAdminView from "../view/BejegyzesekAdminView.js"

class BejegyzesAdminController{
    #token
    constructor(){
        this.#token=document.querySelector('meta[name="csrf-token"]').getAttribute("content"); 
        const f = new FetchClass(this.#token);
        f.adatLeker('/api/bejegyzesek', this.adatokBetolt)

        document.querySelector(window).on("torol", (event)=>{
            f.adatTorol("/api/torol", event.detail.id)
        })
    }

    adatokBetolt(tomb){
        let szuloelem=document.querySelector("article")
        new BejegyzesekAdminView(szuloelem, tomb)
    }
}
export default BejegyzesAdminController