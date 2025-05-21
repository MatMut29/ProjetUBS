<?php
$host = 'localhost';
$dbname = 'ma_base';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$sql ="SELECT * FROM contact_ensibs ORDER BY date_envoi DESC";
$stmt = $pdo->prepare(query: $sql);
$contacts = $stmt->fetchAll(mode: PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1>Liste des prises de contact ENSIBS</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>date de naissance</th>
                <th>Formations</th>
                <th>annee</th>
                <th>langues</th>
                <th>demande</th>
                <th>date d'envoi</th>
            </tr>
        </table>
        <table>
            <?php foreach ($contacts as $contact) ?>
            <tr>
                <td><?= $contact['id'] ?></td>
                <td><?= $contact['nom'] ?></td>
                <td><?= $contact['prenom'] ?></td>
                <td><?= $contact['email'] ?></td>
                <td><?= $contact['date_naissance'] ?></td>
                <td><?= $contact['formations'] ?></td>
                <td><?= $contact['annee'] ?></td>
                <td><?= $contact['langues'] ?></td>
                <td><?= $contact['demande'] ?></td>
                <td><?= $contact['date_envoi'] ?></td> 
            </tr>
            <?php endforeach ?>
        </table>

    </body>
</html>
