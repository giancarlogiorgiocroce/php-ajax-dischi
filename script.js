const app = new Vue ({
    el: '#app',
    data:{
        apiUrl: 'http://localhost/boolean-ex/php-ajax-dischi/api.php',
        apiArray: [],

    },
    mounted(){
        this.getApi();
    },
    methods:{
        getApi(){
            axios.get(this.apiUrl)
            .then(res => {
                this.apiArray = res.data;
            })
        }
    },
})