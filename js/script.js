const { createApp } = Vue;
createApp({
    data() {
        return {
            disks: [],
            clickedResponse: []
        }
    },
    mounted() {
        console.log(this.disks);
        axios.get('http://localhost/Boolean-Esercizi/php-dischi-json/server.php').then((resp) => {
            this.disks = resp.data.results;
        });
    },
    methods: {
        isClicked(item) {
            axios.get('http://localhost/Boolean-Esercizi/php-dischi-json/server.php', { params: { id: item } }).then((resp) => {
                this.clickedResponse = resp.data.results;
            })
            console.log(this.clickedResponse);
        }
    }
}).mount('#app');