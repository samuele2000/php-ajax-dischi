var app = new Vue({
    el: '#app',

    data: {
        arraySong: []
    },

    created(){
        axios.get('http://localhost/Esercizi/php-ajax-dischi/ajax/api/integers.php')
            .then((res) =>{
                console.log(res.data);
                this.arraySong = res.data;
            })
    }
}) 