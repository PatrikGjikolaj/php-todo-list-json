const { createApp } = Vue;

createApp({
    
    data() {
        return {
            apiUrl: "api.php",
            toDo: [],
            newTask: "",
        }
    },
    methods: {
        chiamata() {
            console.log("Stampo lista array in html");
            axios.get(this.apiUrl).then((response) => {
                this.toDo = response.data;
    
            });
        },
        deleteItem(c) {
        console.log("Hai cliccato sull'item", c);

        const data = { deleteIndex: c };

        this.sendData(data);
        },
        addNewTask() {
            const data = { newTask: this.newTask };

            this.sendData(data);
        },
        deleteAllTasks() {
            const data = { deleteAll: true };

            this.sendData(data);
        },
        sendData(data) {
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                console.log("Dati ricevuti: ", response.data);
                this.toDo = response.data;
                this.newTask = [];
            });
    }},
    mounted() {
        // this.chiamata();
    }

}).mount("#app");
