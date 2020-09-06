<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>>Practical 4</title>
    <link href="style.css" rel = "stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
  <header>
  <nav class="topmenu">
    <div class="logo">Sumit</div>
    <ul class="nav">
      <li><a href="#">Home</a></li>

    </ul>
  </nav>

    <div class="cont">
      <h1 style="color: black">Please Select Menu form Dropdown list</h1>
    </div>
    <br>
    <div class="container">
      <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="restaurant">
        <option value="">Select Menu</option>
    </select>
    <br>

    <table id="tabl" class="table tab">
      <tr>
        <th>ID</th>
        <td id="id"></td>
      </tr>
      <tr>
        <th>Name</th>
        <td id="menuname"></td>
      </tr>
      <tr>
        <th>Short Name</th>
        <td id="sname"></td>
      </tr>
      <tr>
        <th>Description</th>
        <td id="descp"></td>
      </tr>
      <tr>
        <th>Price Small</th>
        <td id="psmall"></td>
      </tr>
      <tr>
        <th>Price Large</th>
        <td id="plarge"></td>
      </tr>
	  <tr>
        <th>Small Portion Name</th>
        <td id="spname"></td>
      </tr>
      <tr>
        <th>Large Portion Name</th>
        <td id="lpname"></td>
      </tr>
    </table>


    </div>
    </header>
    <footer class="footer">
      <div class="col">
        <ul>
          <li>Legal</li>
          <li>Privacy</li>
        </ul>
      </div>
      <div class="col">
        <ul class="foot">Social media links
          <li><a href="https://www.instagram.com/accounts/login/?hl=en">Instagram</a></li>
          <li><a href="https://twitter.com/login">Twitter</a></li>
          <li><a href="https://www.linkedin.com/login">Linkdein</a></li>
      </ul></div>
      <div class="col">etc etc My projects (copyrights)</div>
      <div class="col">etc etc My projects (copyrights)</div>
  </footer>

    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js" defer></script>

  </body>
</html>
