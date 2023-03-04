<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230225133442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, materiel VARCHAR(255) NOT NULL, intensite VARCHAR(255) NOT NULL, grpmusculaire VARCHAR(255) NOT NULL, tenue VARCHAR(255) NOT NULL, recomendation VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendrier (id INT AUTO_INCREMENT NOT NULL, salla_id INT DEFAULT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description VARCHAR(255) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, activite VARCHAR(255) NOT NULL, INDEX IDX_B2753CB95352D762 (salla_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, panier_id INT DEFAULT NULL, liste_produit VARCHAR(255) NOT NULL, etat VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6EEAA67DF77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, quantite INT NOT NULL, totale_panier DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, panier_id INT DEFAULT NULL, nom_p VARCHAR(255) NOT NULL, type_p VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, stock INT NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_29A5EC27F77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, nom_r VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle_activite (salle_id INT NOT NULL, activite_id INT NOT NULL, INDEX IDX_A434021BDC304035 (salle_id), INDEX IDX_A434021B9B0F88B1 (activite_id), PRIMARY KEY(salle_id, activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB95352D762 FOREIGN KEY (salla_id) REFERENCES salle (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27F77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE salle_activite ADD CONSTRAINT FK_A434021BDC304035 FOREIGN KEY (salle_id) REFERENCES salle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salle_activite ADD CONSTRAINT FK_A434021B9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salle ADD superficie VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB95352D762');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DF77D927C');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27F77D927C');
        $this->addSql('ALTER TABLE salle_activite DROP FOREIGN KEY FK_A434021BDC304035');
        $this->addSql('ALTER TABLE salle_activite DROP FOREIGN KEY FK_A434021B9B0F88B1');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE calendrier');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE salle_activite');
        $this->addSql('ALTER TABLE salle DROP superficie');
    }
}
