<form action="/items">
  <ul>
    <?php foreach ($items as $item): ?>
      <input type="text" name="items[]" value="<?= $item ?>" />
    <?php endforeach; ?>
  </ul>
  <input type="submit" value="Subscribe!" />
</form>