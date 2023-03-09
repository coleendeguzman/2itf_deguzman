<?php

class artist {
    private $artistName;
    private $monthlyListeners;

    public function setArtist ($artist) {
        $this->artist = $artist;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function setMonthlyListeners ($monthlyListeners) {
        $this->monthlyListeners = $monthlyListeners;
    }

    public function getmonthlyListeners() {
        return $this->monthlyListeners;
    }

    public function displayInfo() {
        echo $this->getArtist() . " has " . $this->getmonthlyListeners() . " monthly listeners on Spotify. <br>";
    }
}

class latestRelease extends artist{
    public function __construct(private $song) {

    }

    public function getSong() {
        return $this->song;
    }

    public function displayInfo() {
        echo $this->getArtist() . " is famous across the globe. " . "<br>";
    }

    public function printInfo() {
        echo $this->getArtist() . "'s latest song release is called " . $this->getSong() . ". <br>";
    }

    public function printInfo2($debut) {
        echo $this->getArtist() . " debuted on " . $debut . ". <br><br>";
    }
}

class albumTitle extends artist {
    private $albumTitle;

    public function setAlbumTitle($albumTitle) {
        $this->albumTitle = $albumTitle;
    }

    public function getAlbumTitle() {
        return $this->albumTitle;
    }
}

class albumRelease extends latestRelease {
    private $albumRelease;

    public function setAlbumRelease($albumRelease) {
            $this->albumRelease = $albumRelease;
    }

    public function getAlbuRelease() {
            return $this->albumRelease;
    }
}

$parentClass = new artist();
$parentClass -> setArtist("beabadoobee");
$parentClass -> setMonthlyListeners(16479783);
$parentClass -> displayInfo();

$childClass = new latestRelease("Glue Song");
$childClass -> setArtist("beabadoobe");
$childClass -> printInfo();
$childClass -> displayInfo();
$childClass -> printInfo2(2020);

$test1 = new artist();
$test1 -> setArtist("TOMORROW X TOGETHER");
$test1 -> setMonthlyListeners(9262805);
$test1 -> displayInfo();

$test2 = new latestRelease("Sugar Rush Ride");
$test2 -> setArtist("TOMORROW X TOGETHER");
$test2 -> printInfo();
$test2 -> displayInfo();
$test2 -> printInfo2(2019);

$childClass = new latestRelease("ABYSS");
$childClass -> setArtist("WOODZ");
$childClass -> printInfo();
$childClass -> displayInfo();
$childClass -> printInfo2(2020);


?>