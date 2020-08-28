<?php

  // creiamo classe Stanza
  class Stanza {
    // impostiamo gli attributi
    public $id;
    public $room_number;
    public $floor;
    public $beds;
    public $created_at;
    public $updated_at;

    // decidiamo quali attribuire passare al momento della creazione delle istanze
    public function __construct($_id, $_room_number, $_floor, $_beds, $_created_at, $_updated_at) {
      $this->id = $_id;
      $this->room_number = $this->setRoomNumber($_room_number);
      $this->floor = $_floor;
      $this->beds = $_beds;
      $this->created_at = $_created_at;
      $this->updated_at = $_updated_at;
    }

    // creo metodo che controlla che i data passati all attributo room_number siano numeri interi
    public function setRoomNumber($room_number) {
      if (is_numeric($room_number)) {
        return $room_number;
      } else {
        die('Non hai inserito un numero!');
      }
    }

    // metodo che ritorna sotto forma di array il contenuto del mio database
    public function stampaStanza() {
      return [
        'id' => $this->id,
        'room_number' => $this->room_number,
        'floor' => $this->floor,
        'beds' => $this->beds,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at
      ];
    }
  }

 ?>
