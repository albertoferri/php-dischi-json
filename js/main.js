const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: []
        }
    },

    mounted() {
        axios.get('./server.php')
            .then(response => {
                this.discs = response.data;
            });
    },
}).mount('#app');