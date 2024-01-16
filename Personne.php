<?php

/**
 * Classe représentant une personne.
 */
class Personne {

    /**
     * @var int Le numero de la personne.
     */
    private $numeroPers;

    /**
     * @var string Le nom de la personne.
     */
    private $nomPers;

    /**
     * @var string Le prenom de la personne.
     */
    private $prenomPers;

    /**
     * @var int l'année de naissance de la personne.
     */
    private $anNaissance;

    /**
     * @var int Le dernier numero de la personne.
     */
    private $dernierNumero;

    /**
     * Constructeur de la classe Personne.
     *
     * @param string $nom Le nom de la personne.
     * @param string $prenom Le prenom de la personne.
     * @param int $anneeNaissance L'année de naissance de la personne.
     */
    public function __construct($nom, $prenom, $anneeNaissance) {
        $this->nomPers = $nom;
        $this->prenomPers = $prenom;
        $this->anNaissance = $anneeNaissance;
    }

        /**
     * Définit le numéro de la personne.
     *
     * @param int $numero Le numéro à définir.
     */
    public function setNumPers($numero) {
        $this->numeroPers = $numero;
    }

    /**
     * Obtient le dernier numéro de la personne.
     *
     * @return int Le dernier numéro de la personne.
     */
    public function getDernierNum() {
        return $this->dernierNumero;
    }

    /**
     * Obtient le numéro de la personne.
     *
     * @return int Le numéro de la personne.
     */
    public function getNumero() {
        return $this->numeroPers;
    }

    /**
     * Obtient le nom de la personne.
     *
     * @return string Le nom de la personne.
     */
    public function getNom() {
        return $this->nomPers;
    }

    /**
     * Obtient le prénom de la personne.
     *
     * @return string Le prénom de la personne.
     */
    public function getPrenom() {
        return $this->prenomPers;
    }

    /**
     * Obtient l'année de naissance de la personne.
     *
     * @return int L'année de naissance de la personne.
     */
    public function getAnNaissance() {
        return $this->anNaissance;
    }

    /**
     * Définit le nom de la personne.
     *
     * @param string $nom Le nom à définir.
     */
    public function setNomPers($nom) {
        $this->nomPers = $nom;
    }

    /**
     * Définit le prénom de la personne.
     *
     * @param string $prenom Le prénom à définir.
     */
    public function setPrenomPers($prenom) {
        $this->prenomPers = $prenom;
    }

    /**
     * Définit l'année de naissance de la personne.
     *
     * @param int $annee L'année à définir.
     */
    public function setAnNaissance($annee) {
        $this->anNaissance = $annee;
    }

    /**
     * Convertit la personne en une chaîne de caractères.
     *
     * @return string La représentation de la personne en chaîne de caractères.
     */
    public function __toString() {
        return "Personne [numero={$this->numeroPers}, nom={$this->nomPers}, prenom={$this->prenomPers}, anNaissance={$this->anNaissance}]";
    }
}

?>