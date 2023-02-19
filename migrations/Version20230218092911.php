<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230218092911 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion ADD off_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1D95F2A3C FOREIGN KEY (off_id) REFERENCES offres (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C11D7DD1D95F2A3C ON promotion (off_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1D95F2A3C');
        $this->addSql('DROP INDEX UNIQ_C11D7DD1D95F2A3C ON promotion');
        $this->addSql('ALTER TABLE promotion DROP off_id');
    }
}
