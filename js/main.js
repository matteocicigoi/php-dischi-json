const { createApp } = Vue;

createApp({
    data(){
        return {
            dischi : [],
            info : []
        }
    },
    methods: {
        // informazioni dei dischi
        getJson(arg = false){
            // recupera più informazioni di un disco
            if(arg !== false){
                if(arg === this.info[0]){
                    this.info = [];
                    return;
                }
                axios.get('api.php?info=' + arg).then((response) => {
                    this.info = [arg, response.data];
                });
                return;
            }
            axios.get('api.php').then((response) => {
                this.dischi = response.data;
            });
        }
    },
    created(){
        this.getJson();
    }
}).mount('#app');