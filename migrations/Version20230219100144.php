<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230219100144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offres DROP INDEX UNIQ_C6AC3544D0C07AFF, ADD INDEX IDX_C6AC3544D0C07AFF (promo_id)');
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544D0C07AFF');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544D0C07AFF FOREIGN KEY (promo_id) REFERENCES promotion (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offres DROP INDEX IDX_C6AC3544D0C07AFF, ADD UNIQUE INDEX UNIQ_C6AC3544D0C07AFF (promo_id)');
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544D0C07AFF');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544D0C07AFF FOREIGN KEY (promo_id) REFERENCES promotion (id) ON UPDATE SET NULL ON DELETE SET NULL');
    }
}
