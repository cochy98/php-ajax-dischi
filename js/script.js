const app = new Vue({
  el: '#app',
  data: {
    discList: []
  },
  /* Al momento della creazione della mia App, vado a fare una chiamata Axios e recupero le informazioni dall'API */
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/server/controller.php")
      .then((result) => {
        // handle success
        console.log("Recupero la lista dall'API");
        this.discList = result.data.results;
      })
      .catch((error) => {
        // handle error
        console.log(error);
      });
  },
});
