<div class="shadow">
  <nav class="text-light navBar p-1 d-flex flex-row justify-content-between">
    <a class="navbar-brand text-light fs-1 ms-3" href="index.php"><i class="fab fa-earlybirds"></i> META</a>

    <ul class="nav align-items-center text-light w-75">

      <li class="nav-item">
        <a class="nav-link text-light " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light " href="product-list.php">Offers' List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light " href="create.php">Add Offer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light " href="bonus/webservices.php">Bonus Exercise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light " href="bonus/webservices.php">Bonus PHP</a>
      </li>
    </ul>

  </nav>

  <div class="navBar pb-1 ps-3">
      <button class="btn btn-light" id="jokeBtn">Show joke</button>
      <span class="text-light" id="jokeOutput">
        <!-- joke content -->
      </span>
  </div>
</div>

<div class="card bg-dark text-white">
  <img src="../pictures/haseeb-jamil-3s85IxVDyXE-unsplash.jpg" class="card-img cardImg" alt="Beautiful mountains by night">
  <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
    <h5 class="card-title text-center">Welcome to Mount Everest Travel Agency</h5>
    <p class="card-text">META is your reliable parter for booking and organising hiking trips around the world.</p>
    <a class="btn btn-light" href="#offers">See our offers</a>
  </div>
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
