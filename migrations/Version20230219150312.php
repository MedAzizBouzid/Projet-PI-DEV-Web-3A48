<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230219150312 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pass_evenement DROP FOREIGN KEY FK_79950FDAFD02F13');
        $this->addSql('ALTER TABLE pass_evenement DROP FOREIGN KEY FK_79950FDAEC545AE5');
        $this->addSql('DROP TABLE pass_evenement');
        $this->addSql('ALTER TABLE pass ADD event_id INT DEFAULT NULL, ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pass ADD CONSTRAINT FK_CE70D42471F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE pass ADD CONSTRAINT FK_CE70D42419EB6921 FOREIGN KEY (client_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_CE70D42471F7E88B ON pass (event_id)');
        $this->addSql('CREATE INDEX IDX_CE70D42419EB6921 ON pass (client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pass_evenement (pass_id INT NOT NULL, evenement_id INT NOT NULL, INDEX IDX_79950FDAFD02F13 (evenement_id), INDEX IDX_79950FDAEC545AE5 (pass_id), PRIMARY KEY(pass_id, evenement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pass_evenement ADD CONSTRAINT FK_79950FDAFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pass_evenement ADD CONSTRAINT FK_79950FDAEC545AE5 FOREIGN KEY (pass_id) REFERENCES pass (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pass DROP FOREIGN KEY FK_CE70D42471F7E88B');
        $this->addSql('ALTER TABLE pass DROP FOREIGN KEY FK_CE70D42419EB6921');
        $this->addSql('DROP INDEX IDX_CE70D42471F7E88B ON pass');
        $this->addSql('DROP INDEX IDX_CE70D42419EB6921 ON pass');
        $this->addSql('ALTER TABLE pass DROP event_id, DROP client_id');
    }
}
