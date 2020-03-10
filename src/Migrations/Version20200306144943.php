<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200306144943 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agent (id INT AUTO_INCREMENT NOT NULL, nom_agent VARCHAR(255) NOT NULL, prenom_agent VARCHAR(255) NOT NULL, email_agent VARCHAR(255) NOT NULL, password_agent VARCHAR(255) NOT NULL, pays_agent VARCHAR(255) NOT NULL, ville_agent VARCHAR(255) NOT NULL, continent_agent VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonce_agent (id INT AUTO_INCREMENT NOT NULL, intitule_annonceagent VARCHAR(255) NOT NULL, type_annonceagent VARCHAR(255) NOT NULL, date_annonceagent DATETIME NOT NULL, agent_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonce_club (id INT AUTO_INCREMENT NOT NULL, intitule_annonceclub VARCHAR(255) NOT NULL, type_annonceclub VARCHAR(255) NOT NULL, date_annonceclub VARCHAR(255) NOT NULL, centre_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE atout_joueur (id INT AUTO_INCREMENT NOT NULL, qualite VARCHAR(255) NOT NULL, ameliorer VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_club (id INT AUTO_INCREMENT NOT NULL, niveu VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, centre_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE club (id INT AUTO_INCREMENT NOT NULL, nom_club VARCHAR(255) NOT NULL, pays_club VARCHAR(255) NOT NULL, ville_club VARCHAR(255) NOT NULL, continent_club VARCHAR(255) NOT NULL, email_club VARCHAR(255) NOT NULL, password_club VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience_joueur (id INT AUTO_INCREMENT NOT NULL, saison_debut DATETIME NOT NULL, saison_fin DATETIME NOT NULL, clubjoueur VARCHAR(255) NOT NULL, championnat VARCHAR(255) NOT NULL, match_joue INT NOT NULL, buts INT NOT NULL, passes INT NOT NULL, carton_jaune INT NOT NULL, carton_rouge INT NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_joueur (id INT AUTO_INCREMENT NOT NULL, intitule_formationjoueur VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE joueur (id INT AUTO_INCREMENT NOT NULL, nom_joueur VARCHAR(255) NOT NULL, prenom_joueur VARCHAR(255) NOT NULL, email_joueur VARCHAR(255) NOT NULL, password_joueur VARCHAR(255) NOT NULL, pays_joueur VARCHAR(255) NOT NULL, ville_joueur VARCHAR(255) NOT NULL, continent_joueur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE objectif_joueur (id INT AUTO_INCREMENT NOT NULL, objectif VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE physique_joueur (id INT AUTO_INCREMENT NOT NULL, taille VARCHAR(255) NOT NULL, poids VARCHAR(255) NOT NULL, corpulence VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profession_joueur (id INT AUTO_INCREMENT NOT NULL, intitule_professionjoueur VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sante_joueur (id INT AUTO_INCREMENT NOT NULL, renseignement_santejoueur VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistiques_joueur (id INT AUTO_INCREMENT NOT NULL, media VARCHAR(255) NOT NULL, statistiques VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut (id INT AUTO_INCREMENT NOT NULL, statut VARCHAR(255) NOT NULL, player_id INT NOT NULL, agent_id INT NOT NULL, centre_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact DROP id_contact, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE date_contact date_contact DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE annonce_agent');
        $this->addSql('DROP TABLE annonce_club');
        $this->addSql('DROP TABLE atout_joueur');
        $this->addSql('DROP TABLE categorie_club');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE experience_joueur');
        $this->addSql('DROP TABLE formation_joueur');
        $this->addSql('DROP TABLE joueur');
        $this->addSql('DROP TABLE objectif_joueur');
        $this->addSql('DROP TABLE physique_joueur');
        $this->addSql('DROP TABLE profession_joueur');
        $this->addSql('DROP TABLE sante_joueur');
        $this->addSql('DROP TABLE statistiques_joueur');
        $this->addSql('DROP TABLE statut');
        $this->addSql('ALTER TABLE contact ADD id_contact INT DEFAULT NULL, CHANGE id id INT NOT NULL, CHANGE date_contact date_contact DATE NOT NULL');
    }
}
