<header>
  <nav class="navbar navbar-light">
    <div class="container-fluid px-5">
      <a class="navbar-brand" href="#">
        <img src="img/logo-small.svg" alt="Spotify Logo" />
      </a>
      <div class="d-flex">
        <select class="form-select me-2" @change="getGenre">
          <option value="" selected>All</option>
          <option value="Rock">Rock</option>
          <option value="Pop">Pop</option>
          <option value="Jazz">Jazz</option>
          <option value="Metal">Metal</option>
        </select>
        <button class="btn btn-outline-success" type="submit" @click="changeGenre">Search</button>
      </div>
    </div>
  </nav>
</header>
