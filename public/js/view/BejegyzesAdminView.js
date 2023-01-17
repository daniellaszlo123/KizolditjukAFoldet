
class BejegyzesAdminView{
    #elem
    constructor(szuloelem, elem){
        this.#elem=elem
        szuloelem.innerHTML+=`
        <tr>
            <td>${elem.id}</td>
            <td>${elem.tevekenyseg_nev}</td>
            <td>${elem.osztaly_id}</td>
            <td>${elem.allapot}</td>
            <td><button>Módosítás</button></td>
            <td><button>Törlés</button></td>
        </tr>
        `;

        this.divElem=szuloelem.children("div:last-child");
        this.torolElem=this.divElem.children("button")

        this.torolElem.on("click", ()=>{
            this.kattintasTrigger()
        })
    }

    kattintasTrigger(){
        const esemeny= new CustomEvent("torol", {detail:this.#elem})
        window.dispatchEvent(esemeny)
    }
}
export default BejegyzesAdminView