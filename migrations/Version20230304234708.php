<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230304234708 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE map ADD mapsalle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE map ADD CONSTRAINT FK_93ADAABB87535914 FOREIGN KEY (mapsalle_id) REFERENCES salle (id)');
        $this->addSql('CREATE INDEX IDX_93ADAABB87535914 ON map (mapsalle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE map DROP FOREIGN KEY FK_93ADAABB87535914');
        $this->addSql('DROP INDEX IDX_93ADAABB87535914 ON map');
        $this->addSql('ALTER TABLE map DROP mapsalle_id');
    }
}
