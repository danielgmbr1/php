<?php
/**
 * @psalm-import-type Product from types 
*/

/** @var Product[] $products */

?>

<?php if(empty($products)): ?>
<p>Sem dados para mostrar</p>
<?php else: ?>
<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Estado</th>
            <th>Unidade</th>
            <th>Link </th>
        </tr>
    </thead>

    <?php foreach($products as $product): ?>
    <tr>
      <td><?= $product['name'] ?></td>  
      <td><?= $product['unit'] ?></td>    
      <td><?= $product['quantity'] ?></td>  
    </tr>
    <?php endforeach ?>
</table>
<?php endif ?>