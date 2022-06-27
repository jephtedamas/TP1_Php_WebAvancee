
<?php

  class Singer{

      private $name;

      private $address;

      private $postalCode;

      private $phone;

      private $email;

      private $musicGenre;



      public function __construct($name, $address, $postalCode, $phone, $email, $musicGenre) {
        $this->name = $name;

        $this->address = $address;

        $this->postalCode = $postalCode;

        $this->phone = $phone;

        $this->email = $email;

        $this->musicGenre = $musicGenre;

      }

      public function __destruct() {

        echo "Présentation de: $this->name";

        echo "adresse: $this->address";

        echo "code postal: $this->postalCode";

        echo "téléphone: $this->phone";

        echo "courriel: $this->email";

        echo "genre de musique est: $this->musicGenre";
      
      }
    }






  $singer1 = new Singer('Pierre Olivier', '1048 avenue Los angeles', '123245', 'confidentiel', 'instagraworld', 'Country');






?>