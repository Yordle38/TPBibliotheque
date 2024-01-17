<?php
use PHPUnit\Framework\TestCase;

class PersonneTest extends TestCase {

    public function setUp(): void {
        // Méthode setUp équivalente à @Before
    }

    public function tearDown(): void {
        // Méthode tearDown équivalente à @After
    }

    /**
     * Test de la fonction getNumero de la class Personne.
     */
    public function testGetNumero() {
        $this->markTestIncomplete("Test à implémenter plus tard");
    }

    /**
     * Test de la fonction getNom de la class Personne.
     */
    public function testGetNom() {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals("Turing", $alan->getNom());
    }

    /**
     * Test de la fonction getPrenom de la class Personne.
     */
    public function testGetPrenom() {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals("Alan", $alan->getPrenom());
    }

    /**
     * Test de la fonction getAnNaissance de la class Personne.
     */
    public function testGetAnNaissance() {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals(1912, $alan->getAnNaissance());
    }

    /**
     * Test de la fonction getDernierNum de la class Personne.
     */
    public function testGetDernierNum() {
        $this->markTestIncomplete("Test à implémenter plus tard");
    }

    /**
     * Test de la fonction setNumPers de la class Personne.
     */
    public function testSetNumPers() {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setNumPers(18);
        $this->assertEquals(18, $alan->getNumero());
    }

    /**
     * Test de la fonction setNomPers de la class Personne.
     */
    public function testSetNomPers() {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setNomPers("Minsky");
        $this->assertEquals("Minsky", $alan->getNom());
    }

    /**
     * Test de la fonction setPrenomPers de la class Personne.
     */
    public function testSetPrenomPers() {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setPrenomPers("Marvin");
        $this->assertEquals("Marvin", $alan->getPrenom());
    }

    /**
     * Test de la fonction setAnNaissance de la class Personne.
     */
    public function testSetAnNaissance() {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setAnNaissance(1990);
        $this->assertEquals(1990, $alan->getAnNaissance());
    }

    /**
     * Test de toString pour la class Personne.
     */
    public function testToString() {
        $alan = new Personne("Turing", "Alan", 1912);
        $expectedString = "Personne [numero=1, nom=Turing, prenom=Alan, anNaissance=1912]";
        $this->assertEquals($expectedString, $alan->__toString());
    }
}

?>