<div class="titulo">CSS integration</div>

<h1 center>

  <?php

  echo 'Hello';
  echo '<small>';
  echo ' World!';
  echo '</small>';

  ?>

</h1>

<?= "<div center azul>Another way to 'express' myself!</div>" ?>

<br>

<div center><button dobro>
    <?= "Cool" ?>
  </button></div>

<style>
  button {
    padding: 5px
      <?= 2 * 10 ?>
      px;
    background-color: #4286f4;
    color: #EEE;
    font-weight: bold;
    border-radius: 10px;
  }

  [center] {
    display: flex;
    justify-content: center;
  }

  <?= "[azul]" ?>
    {
    color: #4286f4;
  }

  [dobro] {
    font-size:
      <?= 10 - 8 ?>
      rem;
  }
</style>