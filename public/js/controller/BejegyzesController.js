import FetchClass from "../model/FetchClass.js"
import BejegyzesekPublicView from "../view/BejegyzesekPublicView.js"

class BejegyzesController{

    constructor(){
        const f = new FetchClass(token);
        f.adatLeker('/api/bejegyzesek', this.adatokBetolt)
    }

    adatokBetolt(tomb){
        let szuloelem=$("article")
        new BejegyzesekPublicView(szuloelem, tomb)
    }
}
export default BejegyzesController