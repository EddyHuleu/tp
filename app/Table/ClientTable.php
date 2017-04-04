<?php
namespace App\Table; // nom du dossier actuel
use Core\Table\Table;
/**
* class pour la table services
*/
class ClientTable extends Table // Table == Core\Table\Table
{


    public function nomPrenom()
    {
        return $this->query("SELECT id,nom,prenom FROM clients");
    }

	public function toutSaufMarital($id)
    {
        return $this->query("SELECT clients.id,
                                    clients.nom,
                                    clients.prenom,
                                    clients.date_de_naissance,
                                    clients.adresse,
                                    clients.code_postal,
                                    clients.numero_de_telephone,
                                    statut_marital.statut as statut
                                FROM clients
                                LEFT JOIN statut_marital
                                    ON statut_marital = statut_marital.id
                                    WHERE clients.id =?
                                ", [$id]);
    }
}

