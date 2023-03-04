<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230226174021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendrier ADD coach_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB93C105691 FOREIGN KEY (coach_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B2753CB93C105691 ON calendrier (coach_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB93C105691');
        $this->addSql('DROP INDEX IDX_B2753CB93C105691 ON calendrier');
        $this->addSql('ALTER TABLE calendrier DROP coach_id');
    }
}
