<?php
function formValidator($array)
    {

        $userPtrn = "/^[a-zA-ZÀ-ÿ]+$/";
        $passPtrn = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])().{0,}$/";

        $formErrors = [];

        foreach ($array as $cle => $valeur) {

            // Si le champ parcouru a pour clé firstName ou lastName
            if ($cle === "fName" || $cle === "lName") {

                // Alors procéder à la vérification des noms et prénoms (qui est identique).
                if (empty(trim($valeur)) || strlen($valeur) < 2 || strlen($valeur) > 25 || !preg_match($userPtrn, trim($valeur))) {
                    $formErrors[$cle] = TRUE;
                }
            }
            // Si le champ parcouru en est un autre ...
            else {

                // Si le champ est mail
                if ($cle === "mail") {
                    if (!filter_var($valeur, FILTER_VALIDATE_EMAIL)) {
                        $formErrors[$cle] = TRUE;
                    }
                }

                // Sinon, DANS CE CAS PRECIS, il ne reste plus que le champ motDePasse.
                if (strlen($valeur) < 8 && !preg_match($passPtrn, $valeur)) {
                    $formErrors[$cle] = TRUE;
                }

                if ($cle === "link1" || $cle === "link2" || $cle === "link3") {
                    if (!filter_var($valeur, FILTER_VALIDATE_URL)) {
                        $formErrors[$cle] = TRUE;
                    }
                }
            }
        }

        if (!empty($_FILES)) {
            $tempPath = $_FILES["file"]["tmp_name"];
            $definitivePath = './uploads/' . basename($_FILES["file"]["name"]);

            if (exif_imagetype($tempPath) != IMAGETYPE_JPEG) {
                $formErrors["img"] = TRUE;
            } else {
                move_uploaded_file($tempPath, $definitivePath);
            }
        }
        return $formErrors;
    }
?>