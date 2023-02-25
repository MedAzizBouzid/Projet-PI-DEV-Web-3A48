<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222075926 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC19EB6921');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC71F7E88B');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC19EB6921 FOREIGN KEY (client_id) REFERENCES `user` (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC71F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC19EB6921');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC71F7E88B');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC71F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id)');
    }
}
