<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230226223430 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offres_activite (offres_id INT NOT NULL, activite_id INT NOT NULL, INDEX IDX_9F5C5BD46C83CD9F (offres_id), INDEX IDX_9F5C5BD49B0F88B1 (activite_id), PRIMARY KEY(offres_id, activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE offres_activite ADD CONSTRAINT FK_9F5C5BD46C83CD9F FOREIGN KEY (offres_id) REFERENCES offres (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE offres_activite ADD CONSTRAINT FK_9F5C5BD49B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offres_activite DROP FOREIGN KEY FK_9F5C5BD46C83CD9F');
        $this->addSql('ALTER TABLE offres_activite DROP FOREIGN KEY FK_9F5C5BD49B0F88B1');
        $this->addSql('DROP TABLE offres_activite');
    }
}
