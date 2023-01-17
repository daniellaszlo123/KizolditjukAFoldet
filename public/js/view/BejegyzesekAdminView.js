import BejegyzesAdminView from "./BejegyzesAdminView.js";

class BejegyzesekAdminView{
    constructor(szuloelem, tomb){
        this.container=szuloelem
        this.container.innerHTML=`
        <table>
            <thead>
                <th>id</th>
                <th>tevekenyseg_id</th>
                <th>osztaly_id</th>
                <th>allapot</th>
            </thead>
            <tbody id="test">
            </tbody>
        </table>`;
        tomb.forEach(bejegyzes => {
            new BejegyzesAdminView(document.getElementById("test"), bejegyzes);        
        });
    }
}
export default BejegyzesekAdminView