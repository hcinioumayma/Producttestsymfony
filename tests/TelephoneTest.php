<?php
namespace App\Tests\Entity;
use App\Entity\Telephone;
use PHPUnit\Framework\TestCase;
class TelephoneTest extends TestCase{
    public function testCalculateTotalPrice()
    {
        // Créer un nouvel objet Telephone
        $telephone = new Telephone();
        $telephone->setPrice(500); // Définir le prix unitaire

        // Appeler la méthode calculateTotalPrice avec différentes quantités
        $totalPrice1 = $telephone->calculateTotalPrice(1);
        $totalPrice2 = $telephone->calculateTotalPrice(5);
        $totalPrice3 = $telephone->calculateTotalPrice(10);

        // Vérifier que les prix totaux sont calculés correctement
        $this->assertEquals(500, $totalPrice1);
        $this->assertEquals(2500, $totalPrice2);
        $this->assertEquals(5000, $totalPrice3);
    }
}


