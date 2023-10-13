export default class Users{
    constructor() {
        this.rootElem= document.querySelector('users');
    }

    init(){
        this rendar();
    }

    async rendar(){
        const data = await this.getData();


        const row = document.createElement ('div');
        row.classList.add('row');


        for (const item of data){
            const col = document.createElement('div');
            col.classList.add('col-6');

            col.innerHTML =
                <div></div>
            ;
        }
    }

    async getData () {
        const response = await fetch('usere.json');
        return await response.json();
    }





}