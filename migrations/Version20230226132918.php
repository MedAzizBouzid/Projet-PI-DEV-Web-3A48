<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230226132918 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, offre_id INT DEFAULT NULL, salle VARCHAR(255) NOT NULL, date_d DATE NOT NULL, mpayement VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_351268BB4CC8505A (offre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_off (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offres (id INT AUTO_INCREMENT NOT NULL, promo_id INT DEFAULT NULL, categ_id INT DEFAULT NULL, prix DOUBLE PRECISION NOT NULL, duree INT NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_C6AC3544D0C07AFF (promo_id), INDEX IDX_C6AC3544E8175B12 (categ_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, pourcentage INT NOT NULL, date_fin DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB4CC8505A FOREIGN KEY (offre_id) REFERENCES offres (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544D0C07AFF FOREIGN KEY (promo_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544E8175B12 FOREIGN KEY (categ_id) REFERENCES categorie_off (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB4CC8505A');
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544D0C07AFF');
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544E8175B12');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE categorie_off');
        $this->addSql('DROP TABLE offres');
        $this->addSql('DROP TABLE promotion');
    }
}
