<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230219134808 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pass_evenement (pass_id INT NOT NULL, evenement_id INT NOT NULL, INDEX IDX_79950FDAEC545AE5 (pass_id), INDEX IDX_79950FDAFD02F13 (evenement_id), PRIMARY KEY(pass_id, evenement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pass_evenement ADD CONSTRAINT FK_79950FDAEC545AE5 FOREIGN KEY (pass_id) REFERENCES pass (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pass_evenement ADD CONSTRAINT FK_79950FDAFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pass_evenement DROP FOREIGN KEY FK_79950FDAEC545AE5');
        $this->addSql('ALTER TABLE pass_evenement DROP FOREIGN KEY FK_79950FDAFD02F13');
        $this->addSql('DROP TABLE pass_evenement');
    }
}
