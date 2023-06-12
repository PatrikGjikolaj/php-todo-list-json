const { createApp } = Vue;

createApp({
    
    data() {
        return {
            apiUrl: "api.php",
            toDo: [],
            toDoBtn: [],
        }
    },
    methods: {
        chiamata() {
            console.log("Stampo lista array in html");
            axios.get(this.apiUrl).then((response) => {
                this.toDoBtn = response.data;
    
            });
        }
    },
    mounted() {
        console.log("App caricata");

        axios.get(this.apiUrl).then((response) => {
            console.log("Dati ricevuti: ", response.data);
            this.toDo = response.data;

        });
    }

}).mount("#app");