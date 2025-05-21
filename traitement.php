<!--traiter  formulaire HTML et  insérer les données  dans une base de données MySQL.-->
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

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$date = $_POST['date'];
$formations = $_POST['formations'];
$annee = $_POST['annee'];
$langue = $_POST['langue'];
$langue = implode(separator; ', ', array: $langues);
$demande = $_POST['demande'];

$sql = "INSERT INTO contact_ensibs (nom, prenom, email, date_naissance, formations, annee, langue, demande) 
        VALUES (:nom, :prenom, :email, :date, :formations, :annee, :langue, :demande)";

$stmt = $pdo->prepare(query: $sql);
$stmt->execute(params:{
    'nom' => $nom, 
    'prenom' => $prenom, 
    'email' => $email, 
    'date' => $date, 
    'formations' => $formations, 
    'annee' => $annee, 
    'langue' =>
    'demande' => $demande
});

header(header: "location: liste.php");
exit;

?>
