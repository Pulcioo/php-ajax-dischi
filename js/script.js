const app = new Vue({
    el: '#vue-app',
    data() {
        return {
            albums: [],
        }
    },
    mounted() {
        axios.get('http://localhost:8888/php-ajax-dischi/api.php').then((response) => {
            console.log(response);
            if (response.status === 200) {
                this.albums = response.data;
            }
        }).catch(error => console.log(error));
    }
})