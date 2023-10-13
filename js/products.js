export default class Products{
    constructor() {

        this.data = {
         password:"kickPHP"

        }

        this.rootElem= document.querySelector('.products');
        this.items = this.rootElem.querySelector('.items');
        this.filter = this.rootElem.querySelector('.filter');
        this.nameSearch = this.filter.querySelector('.nameSearch');

    }

   async init(){
        this.nameSearch.addEventListener('input',() => {

            if (this.nameSearch.value.length>= 3){
        this.render();
            }
        })





       await this.render();
    }

    async render(){
        const data = await this.getData();


        const row = document.createElement ('div');
        row.classList.add('row', 'g-4');


        for (const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML =`
            <div class="card">
                <img src="images/${item.prodBillede}">    
                <h5 class="card-title">${item.prodNavn}</h5>
                <p class="card-text">${item.prodKortbes}</p>
                 <p class="card-text">Gerne: ${item.prodGerne}</p>
                 <p class="card-text"> Forfatter: ${item.prodForfatter}</p>
                <a href="bogdetaljer.php?prodid=${item.prodid}" class="btn btn-primary text-whitew-100">Se produkt</a>
            </div>
            
            `;

            row.appendChild(col);
        }


        this.items.innerHTML='';
        this.items.appendChild(row);
    }

    async getData() {
        this.data.nameSearch = this.nameSearch.value;


        const response = await fetch('api.php', {
            method: "POST",
            body:JSON.stringify(this.data)
        });
        return await response.json();
    }
}