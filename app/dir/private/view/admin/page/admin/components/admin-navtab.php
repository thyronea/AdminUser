<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container">

    <!-- User's Dropdown Menu-->
    <div class="dropdown mt-2">
      <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
        </svg>
      </a>
      <ul class="dropdown-menu">
        <li ><a class="dropdown-item"><small>Group ID: <b><?=$_SESSION["groupID"];?></b></small></a></li>
        <li><hr class="dropdown-divider" /></li>
        <li ><a class="dropdown-item" href="../settings/index.php?userID=<?=$_SESSION['userID'];?>"><small><?=htmlspecialchars($_SESSION['fname']); ?> <?=htmlspecialchars($_SESSION['lname']); ?></small></a></li>
        <li><hr class="dropdown-divider" /></li>
        <li><a class="dropdown-item" value="logout" href="/../private/access/logout-process.php"><small>Logout</small></a></li>
      </ul>
    </div>

    <nav class="navbar bg-body-tertiary">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">

          <!--Home-->
          <li data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Home" class="nav-item" role="presentation">
            <a class="nav-link" style="color: black; text-decoration: none;" href="../../index.php?$_GET">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-house-heart" viewBox="0 0 16 16">
                <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z"/>
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
              </svg>
            </a>
          </li>

          <!--Admin-->
          <li data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Admin" class="nav-item" role="presentation">
            <a class="nav-link active" style="color: black; text-decoration: none;" href="index.php?$_GET">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
              </svg>
            </a>
          </li>

        </ul>
      </div>
    </nav>

    <ul></ul>
    <ul></ul>
    <ul></ul>
    <ul></ul>
    <ul></ul>
    <ul></ul>

    <!-- Main Search Box -->
    <div class="col-md-4">
     <form class="" action="../../search-page.php" method="get">
       <div class="input-group input-group-sm">
         <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['']; }?>" class="form-control" placeholder="Search" required>
        <button type="submit" class="focus-ring btn btn-secondary border">Search</button>
      </div>
     </form>
    </div>

  </div>
</nav>
