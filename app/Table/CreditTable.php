<?php
namespace App\Table; // nom du dossier actuel
use Core\Table\Table;
/**
* class pour la table services
*/
class CreditTable extends Table // Table == Core\Table\Table
{


    public function monCredit($id)
    {
        return $this->query("SELECT * FROM credits WHERE idClients =?", [$id]);
    }
}

