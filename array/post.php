<div class="titulo">$_POST</div>

<form action="#" method="post">
  <input type="text" name="name">
  <input type="text" name="last_name">
  <select name="state">
    <option value="AL">Alabama</option>
    <option value="NY">New York</option>
  </select>
  <button>Submit</button>
</form>

<style>
  form>* {
    font-size: 1.8rem;
  }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>' . count($_POST);