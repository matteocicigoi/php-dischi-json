const { createApp } = Vue;

createApp({
    data(){
        return {
            dischi : []
        }
    },
    methods: {
        getJson(){
            axios.get('api.php').then((response) => {
                this.dischi = response.data;
            });
        }
    },
    created(){
        this.getJson();
    }
}).mount('#app');