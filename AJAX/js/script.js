const app = new Vue({
    el: '#app',
    data: {
        album: [],
    },
    created() {
        const ApiURL = 'http://localhost/php-ajax-dischi/database.php';
        axios.get(ApiURL)
            .then(result => {
                console.log(result.data);
                this.info = result.data;
            })
            .catch(error => {
                console.log(error);
            })
    }
});