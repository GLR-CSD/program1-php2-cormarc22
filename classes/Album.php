<?php

/**
 *
 */
class Album {
    /**
     * @var
     */
    private $id;
    private $naam;
    private $artiesten;
    private $release_datum;
    private $url;
    private $afbeelding;
    private $prijs;

    // Constructor
    public function __construct($id, $naam, $artiesten, $release_datum, $url, $afbeelding, $prijs) {
        $this->id = $id;
        $this->naam = $naam;
        $this->artiesten = $artiesten;
        $this->release_datum = $release_datum;
        $this->url = $url;
        $this->afbeelding = $afbeelding;
        $this->prijs = $prijs;
    }

    // Getters and Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function setNaam($naam) {
        $this->naam = $naam;
    }

    public function getArtiesten() {
        return $this->artiesten;
    }

    public function setArtiesten($artiesten) {
        $this->artiesten = $artiesten;
    }

    public function getReleaseDatum() {
        return $this->release_datum;
    }

    public function setReleaseDatum($release_datum) {
        $this->release_datum = $release_datum;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getAfbeelding() {
        return $this->afbeelding;
    }

    public function setAfbeelding($afbeelding) {
        $this->afbeelding = $afbeelding;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public function setPrijs($prijs) {
        $this->prijs = $prijs;
    }
}

?>
