const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: []
        }
    },

    mounted() {
        axios.get('disc-list.json')
            .then(response => {
                this.discs = response.data;
            });
    },
}).mount('#app');