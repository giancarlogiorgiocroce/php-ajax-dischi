const app = new Vue ({
    el: '#app',
    data:{
        apiUrl: 'http://localhost/boolean-ex/php-ajax-dischi/api.php',
        apiArray: [],

        genreValue: '',
        genreArray: [],

    },
    mounted(){
        this.getApi();
    },
    methods:{
        getApi(){
            axios.get(this.apiUrl)
            .then(res => {
                this.apiArray = res.data;
            });
            // this.genreArrayGenerator();
        },
        // genreArrayGenerator(){
        //     if(this.apiArray.length > 0){
        //         this.apiArray.forEach(obj => {
        //             console.log(obj);
        //             if(!this.genreArray.includes(obj.genre)){
        //                 this.genreArray.push(obj.genre);
        //             }
        //         });
        //     }else if(this.apiArray.length == 0){
        //         console.log('oh no');
        //     }
        // },
    },
})