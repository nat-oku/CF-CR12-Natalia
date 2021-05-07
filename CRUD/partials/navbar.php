<nav class="bg-dark text-light">
  <ul class="nav justify-content-center ">
    <a class="navbar-brand" href="index.php">Navbar</a>

    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="product-list.php">Offers' List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="bonus/webservices.php">Bonus Exercise</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="bonus/webservices.php">Bonus PHP</a>
    </li>
  </ul>

  <div class="container">
    <button class="btn btn-secondary" id="jokeBtn">Show joke</button>
    <span class="text-light" id="jokeOutput">
      JOKE:
      <!-- joke content -->
    </span>
  </div>

  <script>
    document.getElementById("jokeBtn").addEventListener("click", showJoke, false);

    function showJoke(){
      console.log('joke button works');
      let request = new XMLHttpRequest();
      request.open("GET", "partials/joke_api.php", true);

      request.onload = function() {
        console.log('onload works');
        if(this.status == 200) {
          console.log("status 200 -- works");
          let jokes = JSON.stringify(this.responseText);
          let jokeOutput = `${jokes}`
          document.getElementById("jokeOutput").innerHTML = jokeOutput;
          ;
        } 
      }

      request.send();
    }

  </script>


</nav>