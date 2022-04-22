const app = new Vue(
    {
        el: '#app',
        data: {
            discs: [],
        },
        created(){
            axios.get('http://localhost/php-ajax-dischi-/server/controller.php').then((result) => {
                this.discs = result.data.results;
                console.log(result.data.results);
            }).catch((error) => {
                console.log(error);
            })
        }
    }
)