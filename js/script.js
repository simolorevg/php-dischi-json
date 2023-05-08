const { createApp } = Vue;
createApp({
    data() {
        return {
            disks: [],
        }
    },
    mounted() {
        console.log(this.disks);
        axios.get('http://localhost/Boolean-Esercizi/php-dischi-json/server.php').then((resp) => {
            console.log(resp);
        })
    },
}).mount('#app');