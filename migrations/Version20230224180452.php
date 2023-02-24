<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230224180452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendrier ADD salla_id INT DEFAULT NULL, ADD activite VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB95352D762 FOREIGN KEY (salla_id) REFERENCES salle (id)');
        $this->addSql('CREATE INDEX IDX_B2753CB95352D762 ON calendrier (salla_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB95352D762');
        $this->addSql('DROP INDEX IDX_B2753CB95352D762 ON calendrier');
        $this->addSql('ALTER TABLE calendrier DROP salla_id, DROP activite');
    }
}
