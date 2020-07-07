<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200626110353 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agent (id_agent INT AUTO_INCREMENT NOT NULL, pays_agent VARCHAR(255) NOT NULL, ville_agent VARCHAR(255) NOT NULL, continent_agent VARCHAR(255) NOT NULL, PRIMARY KEY(id_agent)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonce_agent (id_annonceagent INT AUTO_INCREMENT NOT NULL, intitule_annonceagent VARCHAR(255) NOT NULL, type_annonceagent VARCHAR(255) NOT NULL, date_annonceagent DATETIME NOT NULL, agent_id INT NOT NULL, PRIMARY KEY(id_annonceagent)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonce_club (id_annonceclub INT AUTO_INCREMENT NOT NULL, intitule_annonceclub VARCHAR(255) NOT NULL, type_annonceclub VARCHAR(255) NOT NULL, date_annonceclub VARCHAR(255) NOT NULL, centre_id INT NOT NULL, PRIMARY KEY(id_annonceclub)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE atout_joueur (id_atoutjoueur INT AUTO_INCREMENT NOT NULL, qualite VARCHAR(255) NOT NULL, ameliorer VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id_atoutjoueur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_club (id_categorieclub INT AUTO_INCREMENT NOT NULL, niveu VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, centre_id INT NOT NULL, PRIMARY KEY(id_categorieclub)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE club (id_club INT AUTO_INCREMENT NOT NULL, pays_club VARCHAR(255) NOT NULL, ville_club VARCHAR(255) NOT NULL, continent_club VARCHAR(255) NOT NULL, PRIMARY KEY(id_club)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id_contact INT AUTO_INCREMENT NOT NULL, nom_contact VARCHAR(255) NOT NULL, prenom_contact VARCHAR(255) NOT NULL, email_contact VARCHAR(255) NOT NULL, commentaire_contact VARCHAR(255) NOT NULL, date_contact DATETIME NOT NULL, PRIMARY KEY(id_contact)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience_joueur (id_experiencejoueur INT AUTO_INCREMENT NOT NULL, saison_debut DATETIME NOT NULL, saison_fin DATETIME NOT NULL, clubjoueur VARCHAR(255) NOT NULL, championnat VARCHAR(255) NOT NULL, match_joue INT NOT NULL, buts INT NOT NULL, passes INT NOT NULL, carton_jaune INT NOT NULL, carton_rouge INT NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id_experiencejoueur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_joueur (id_formationjoueur INT AUTO_INCREMENT NOT NULL, intitule_formationjoueur VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id_formationjoueur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE joueur (id_joueur INT AUTO_INCREMENT NOT NULL, pays_joueur VARCHAR(255) NOT NULL, ville_joueur VARCHAR(255) NOT NULL, continent_joueur VARCHAR(255) NOT NULL, PRIMARY KEY(id_joueur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE objectif_joueur (id_objectifjoueur INT AUTO_INCREMENT NOT NULL, objectif VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id_objectifjoueur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE physique_joueur (id_physiquejoueur INT AUTO_INCREMENT NOT NULL, taille VARCHAR(255) NOT NULL, poids VARCHAR(255) NOT NULL, corpulence VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id_physiquejoueur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profession_joueur (id_professionjoueur INT AUTO_INCREMENT NOT NULL, intitule_professionjoueur VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id_professionjoueur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE situation (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistiques_joueur (id_statistiquesjoueur INT AUTO_INCREMENT NOT NULL, media VARCHAR(255) NOT NULL, statistiques VARCHAR(255) NOT NULL, player_id INT NOT NULL, PRIMARY KEY(id_statistiquesjoueur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, situation INT NOT NULL, nom VARCHAR(180) NOT NULL, prenom VARCHAR(180) NOT NULL, statut VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', password TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\', INDEX IDX_8D93D649EC2D9ACA (situation), PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649EC2D9ACA FOREIGN KEY (situation) REFERENCES situation (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649EC2D9ACA');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE annonce_agent');
        $this->addSql('DROP TABLE annonce_club');
        $this->addSql('DROP TABLE atout_joueur');
        $this->addSql('DROP TABLE categorie_club');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE experience_joueur');
        $this->addSql('DROP TABLE formation_joueur');
        $this->addSql('DROP TABLE joueur');
        $this->addSql('DROP TABLE objectif_joueur');
        $this->addSql('DROP TABLE physique_joueur');
        $this->addSql('DROP TABLE profession_joueur');
        $this->addSql('DROP TABLE situation');
        $this->addSql('DROP TABLE statistiques_joueur');
        $this->addSql('DROP TABLE user');
    }
}
