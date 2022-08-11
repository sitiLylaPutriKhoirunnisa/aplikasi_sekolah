<?php
 $db = new PDO("mysql:host=localhost;dbname=smkmutu",'root','');
 $query = $db->query('select * from siswa');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="proseshapus.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proseshapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>