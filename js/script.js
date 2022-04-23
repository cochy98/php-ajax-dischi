const app = new Vue({
  el: '#app',
  data: {
    discList: [],
    selectedGenre: ''
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
  methods: {
    /* Questo metodo setta il nuovo valore per 'selectedGenre' */
    getGenre(v) {
      this.selectedGenre = v.target.options[v.target.options.selectedIndex].value;
    },
    changeGenre() {
      console.log('ok, mostro solo i brani corrispondenti al genere selezionato: ' + this.selectedGenre);
      /* Resetto il mio array contentente i dischi prima di fare la chiamata all'API */
      this.discList = [];

      /* Faccio una nuova chiamata axios all'API filtrando il genere selezionato */
      axios
        .get(`http://localhost/php-ajax-dischi/server/controller.php?genre=${this.selectedGenre}`)
        .then((result) => {
          // handle success
          console.log("Recupero la lista dall'API filtrata per il genere selezionato");
          this.discList = result.data.results;
        })
        .catch((error) => {
          // handle error
          console.log(error);
        });
    }
  },
});
