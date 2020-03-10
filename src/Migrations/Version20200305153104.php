<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200305153104 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE annonceagent');
        $this->addSql('DROP TABLE annonceclub');
        $this->addSql('DROP TABLE atout');
        $this->addSql('DROP TABLE categorieclub');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE experience');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE joueur');
        $this->addSql('DROP TABLE objectif');
        $this->addSql('DROP TABLE physique');
        $this->addSql('DROP TABLE profession');
        $this->addSql('DROP TABLE sante');
        $this->addSql('DROP TABLE statistiques');
        $this->addSql('DROP TABLE statut');
        $this->addSql('ALTER TABLE contact DROP id_contact');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agent (id_agent INT AUTO_INCREMENT NOT NULL, nom_agent VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, prenom_agent VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, email_agent VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, password_agent VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, pays_agent VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, continent_agent VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ville_agent VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id_agent)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE annonceagent (id_annonceagent INT AUTO_INCREMENT NOT NULL, intitule_annonceagent INT NOT NULL, type_annonceagent INT NOT NULL, date_annonceagent DATE NOT NULL, agent_id INT NOT NULL, UNIQUE INDEX id_annonceagent (id_annonceagent), PRIMARY KEY(id_annonceagent)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE annonceclub (id_annonceclub INT AUTO_INCREMENT NOT NULL, intitule_annonceclub VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, type_annonceclub VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, date_annonceclub DATE NOT NULL, centre_id INT NOT NULL, PRIMARY KEY(id_annonceclub)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE atout (id_atout INT AUTO_INCREMENT NOT NULL, qualite VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ameliorer VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, state_id INT NOT NULL, PRIMARY KEY(id_atout)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE categorieclub (id_categorie INT AUTO_INCREMENT NOT NULL, niveau VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, centre_id INT NOT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE club (id_club INT AUTO_INCREMENT NOT NULL, nom_club VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, pays_club VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ville_club VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, email_club VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, password_club VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, continent_club VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id_club)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE experience (id_experience INT AUTO_INCREMENT NOT NULL, saison_debut DATE NOT NULL, saison_fin DATE NOT NULL, club VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, championnat VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, match_joue INT NOT NULL, buts INT NOT NULL, passes INT NOT NULL, carton_jaune INT NOT NULL, carton_rouge INT NOT NULL, state_id INT NOT NULL, PRIMARY KEY(id_experience)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE formation (id_formation INT AUTO_INCREMENT NOT NULL, intitule_formation VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, state_id INT NOT NULL, PRIMARY KEY(id_formation)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE joueur (id_joueur INT AUTO_INCREMENT NOT NULL, nom_joueur VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, prenom_joueur VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, email_joueur VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, password_joueur VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, pays_joueur VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ville_joueur VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, continent_joueur VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id_joueur)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE objectif (id_objectif INT AUTO_INCREMENT NOT NULL, objectif VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, state_id INT NOT NULL, PRIMARY KEY(id_objectif)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE physique (id_physique INT AUTO_INCREMENT NOT NULL, taille INT NOT NULL, poids INT NOT NULL, corpulence VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, state_id INT NOT NULL, PRIMARY KEY(id_physique)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE profession (id_profession INT AUTO_INCREMENT NOT NULL, intitule_profession VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, state_id INT NOT NULL, PRIMARY KEY(id_profession)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE sante (id_sante INT AUTO_INCREMENT NOT NULL, renseignement_sante VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, state_id INT NOT NULL, PRIMARY KEY(id_sante)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE statistiques (id_statistiques INT AUTO_INCREMENT NOT NULL, media VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, statistiques VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, state_id INT NOT NULL, PRIMARY KEY(id_statistiques)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE statut (id_statut INT AUTO_INCREMENT NOT NULL, statut VARCHAR(25) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, player_id INT NOT NULL, agent_id INT NOT NULL, centre_id INT NOT NULL, PRIMARY KEY(id_statut)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE contact ADD id_contact INT DEFAULT NULL');
    }
}
