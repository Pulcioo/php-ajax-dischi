const app = new Vue(
    {
        el: '#vue-app',
        data() {
            return {

            }
        },
        mounted() {
            axios.get('http://localhost:8888/php-ajax-dischi/api.php').then((response) => {
                console.log(response);
            })
        }
    }
)