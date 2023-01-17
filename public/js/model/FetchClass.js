class FetchClass{
    #token
    constructor(token){
        this.#token=token
    }

    adatLeker(vegpont, callback) {
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.#token,
            }
        })
            .then((response) => response.json())
            .then((data) => {
                console.log('Success: ', data);
                callback(data);
            })
            .catch((error) => {
                console.error('Error: ', error);
            });
    }

    adatUj(vegpont, adat){
        fetch(vegpont, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": this.#token,
            },
            body: JSON.stringify(adat),
        })
        .then((response)=>response.json())
        .then((data)=>{
            console.log("Új adat: "+data);
        })
        .catch((error)=>{
            console.error("Error:" + error);
        })
    }

    adatModosit(vegpont, adat){
        console.log(adat);
        console.log("módosít: "+vegpont);
        vegpont+="/"+adat.id;
        fetch(vegpont, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": this.#token,
            },
            body: JSON.stringify(adat),
        })
        .then((response)=>response.json())
        .then((data)=>{
            console.log("modositottam: "+data.updatedAt);
        })
        .catch((error)=>{
            console.error("Error:" + error);
        })
    }

    adatTorol(vegpont, adat){
        console.log("töröltem:");
        console.log(adat);
        vegpont+="/"+adat.id;
        console.log(vegpont);
        fetch(vegpont, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": this.#token,
            },
        })
        .then()
        .then(()=>{
            console.log("sikeres törlés ");
        })
        .catch((error)=>{
            console.error("Error:" + error);
        })
    }

}
export default FetchClass