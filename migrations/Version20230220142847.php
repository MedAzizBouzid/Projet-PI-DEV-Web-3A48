<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220142847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544D0C07AFF');
        $this->addSql('DROP INDEX type ON offres');
        $this->addSql('ALTER TABLE offres DROP nv_prix');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544D0C07AFF FOREIGN KEY (promo_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE promotion CHANGE pourcentage pourcentage INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544D0C07AFF');
        $this->addSql('ALTER TABLE offres ADD nv_prix DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544D0C07AFF FOREIGN KEY (promo_id) REFERENCES promotion (id) ON DELETE SET NULL');
        $this->addSql('CREATE UNIQUE INDEX type ON offres (type)');
        $this->addSql('ALTER TABLE promotion CHANGE pourcentage pourcentage INT DEFAULT NULL');
    }
}
