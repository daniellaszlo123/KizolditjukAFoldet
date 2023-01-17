import BejegyzesPublicView from "./BejegyzesPublicView.js"

class BejegyzesekPublicView{
    constructor(szuloelem, tomb){
        this.container=szuloelem
        tomb.forEach(bejegyzes => {
            new BejegyzesPublicView(this.container, bejegyzes);        
        });
    }
}
export default BejegyzesekPublicView