class BejegyzesPublicView{
    #elem
    constructor(szuloelem, elem){
        this.#elem=elem
        szuloelem.innerHTML+=`
        <tr>
                    <td>${elem.id}</td>
                    <td>${elem.tevekenyseg_nev}</td>
                    <td>${elem.osztaly_id}</td>
                    <td>${elem.allapot}</td>
                </tr>
            `;
    }
}
export default BejegyzesPublicView