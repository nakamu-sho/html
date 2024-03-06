<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
        <?php for ($i = 1; $i <= 9; $i++) { ?>
           <tr>
                <?php for ($j = 1; $j <= 9; $j++) { ?>
                    <td><?= $i . ' × ' . $j . ' = '.($i * $j);?>  </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
