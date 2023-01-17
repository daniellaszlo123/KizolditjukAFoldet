class BejegyzesPublicView{
    #elem
    constructor(szuloelem, elem){
        this.#elem=elem
        szuloelem.innerHTML=`
        <table>
            <thead>
                <th>id</th>
                <th>tevekenyseg_id</th>
                <th>osztaly_id</th>
                <th>allapot</th>
            </thead>
            <tbody>
                <tr>
                    <td>${elem.id}</td>
                    <td>${elem.tevekenyseg_id}</td>
                    <td>${elem.osztaly_id}</td>
                    <td>${elem.allapot}</td>
                </tr>
            </tbody>
        </table>`;
    }
}
export default BejegyzesPublicView