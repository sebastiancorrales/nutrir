const app = {
    url: "index.php?controller=beneficiario&action=",
    edit: false,
    get: async function () {
        let resp = await fetch(`${this.url}`);
        let res = await resp.json();
        console.log(res);
    },
    getOne: async function (id) {
        try {

        } catch (error) {
            console.log(error)
        }
    }
}

app.get();