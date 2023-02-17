<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230212152105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD offre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB4CC8505A FOREIGN KEY (offre_id) REFERENCES offres (id)');
        $this->addSql('CREATE INDEX IDX_351268BB4CC8505A ON abonnement (offre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB4CC8505A');
        $this->addSql('DROP INDEX IDX_351268BB4CC8505A ON abonnement');
        $this->addSql('ALTER TABLE abonnement DROP offre_id');
    }
}
