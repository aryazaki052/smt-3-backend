<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["pilihan"])) {
        $userInput = $_POST["pilihan"];
        
        include 'class.php';

        $krs = new Krs("rinus");
        $dataKrs = $krs->getKrs($userInput);

        var_dump($dataKrs);
    } else {
        echo "Data tidak tersedia";
    }
}
?> -->