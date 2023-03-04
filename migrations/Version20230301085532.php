<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230301085532 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, offre_id INT DEFAULT NULL, salle VARCHAR(255) NOT NULL, date_d DATE NOT NULL, mpayement VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, etatab TINYINT(1) NOT NULL, INDEX IDX_351268BB4CC8505A (offre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, materiel VARCHAR(255) NOT NULL, intensite VARCHAR(255) NOT NULL, grpmusculaire VARCHAR(255) NOT NULL, tenue VARCHAR(255) NOT NULL, recomendation VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendrier (id INT AUTO_INCREMENT NOT NULL, salla_id INT DEFAULT NULL, coach_id INT DEFAULT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description VARCHAR(255) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, activite VARCHAR(255) NOT NULL, INDEX IDX_B2753CB95352D762 (salla_id), INDEX IDX_B2753CB93C105691 (coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendrier_rdv (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, fond_couleur VARCHAR(7) NOT NULL, bordure_color VARCHAR(7) NOT NULL, debut DATETIME NOT NULL, fin DATETIME NOT NULL, description VARCHAR(255) NOT NULL, text_color VARCHAR(7) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_off (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, panier_id INT DEFAULT NULL, nb_articles INT NOT NULL, total_commande DOUBLE PRECISION NOT NULL, etat VARCHAR(255) NOT NULL, num_tel_client VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6EEAA67DF77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment_like (id INT AUTO_INCREMENT NOT NULL, comment_id INT DEFAULT NULL, user_email VARCHAR(255) NOT NULL, INDEX IDX_8A55E25FF8697D13 (comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, event_id INT DEFAULT NULL, description LONGTEXT NOT NULL, INDEX IDX_67F068BC19EB6921 (client_id), INDEX IDX_67F068BC71F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, begin_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', finish_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', description LONGTEXT NOT NULL, capacite INT NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, INDEX IDX_B26681EC54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE forget_pwd (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, code VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_A5985380A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_panier (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, panier_id INT DEFAULT NULL, quantite INT NOT NULL, total_produit DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_21691B4F347EFB (produit_id), INDEX IDX_21691B4F77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, rdv_id INT DEFAULT NULL, message VARCHAR(255) NOT NULL, datee_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_BF5476CA4CCE3F86 (rdv_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offres (id INT AUTO_INCREMENT NOT NULL, promo_id INT DEFAULT NULL, categ_id INT DEFAULT NULL, prix DOUBLE PRECISION NOT NULL, duree INT NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_C6AC3544D0C07AFF (promo_id), INDEX IDX_C6AC3544E8175B12 (categ_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offres_activite (offres_id INT NOT NULL, activite_id INT NOT NULL, INDEX IDX_9F5C5BD46C83CD9F (offres_id), INDEX IDX_9F5C5BD49B0F88B1 (activite_id), PRIMARY KEY(offres_id, activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, total_panier DOUBLE PRECISION NOT NULL, nombre_articles INT DEFAULT NULL, INDEX IDX_24CC0DF219EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pass (id INT AUTO_INCREMENT NOT NULL, event_id INT DEFAULT NULL, client_id INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_CE70D42471F7E88B (event_id), INDEX IDX_CE70D42419EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, stock VARCHAR(255) NOT NULL, INDEX IDX_29A5EC27BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, pourcentage INT NOT NULL, date_fin DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, service_id INT NOT NULL, date_at DATETIME NOT NULL, discription VARCHAR(255) NOT NULL, INDEX IDX_65E8AA0A19EB6921 (client_id), INDEX IDX_65E8AA0AED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, telephone INT NOT NULL, email VARCHAR(255) NOT NULL, superficie VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle_activite (salle_id INT NOT NULL, activite_id INT NOT NULL, INDEX IDX_A434021BDC304035 (salle_id), INDEX IDX_A434021B9B0F88B1 (activite_id), PRIMARY KEY(salle_id, activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, image LONGTEXT NOT NULL, description LONGTEXT NOT NULL, tarif DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsor (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, event_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, logo LONGTEXT NOT NULL, email VARCHAR(255) NOT NULL, INDEX IDX_818CC9D4C54C8C93 (type_id), INDEX IDX_818CC9D471F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_contrat (id INT AUTO_INCREMENT NOT NULL, type_c VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_event (id INT AUTO_INCREMENT NOT NULL, type_e VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, user_name VARCHAR(255) NOT NULL, num_tel INT NOT NULL, image VARCHAR(255) NOT NULL, etat INT DEFAULT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB4CC8505A FOREIGN KEY (offre_id) REFERENCES offres (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB95352D762 FOREIGN KEY (salla_id) REFERENCES salle (id)');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB93C105691 FOREIGN KEY (coach_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE comment_like ADD CONSTRAINT FK_8A55E25FF8697D13 FOREIGN KEY (comment_id) REFERENCES commentaire (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC19EB6921 FOREIGN KEY (client_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC71F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EC54C8C93 FOREIGN KEY (type_id) REFERENCES type_event (id)');
        $this->addSql('ALTER TABLE forget_pwd ADD CONSTRAINT FK_A5985380A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_panier ADD CONSTRAINT FK_21691B4F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE ligne_panier ADD CONSTRAINT FK_21691B4F77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CA4CCE3F86 FOREIGN KEY (rdv_id) REFERENCES rendez_vous (id)');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544D0C07AFF FOREIGN KEY (promo_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544E8175B12 FOREIGN KEY (categ_id) REFERENCES categorie_off (id)');
        $this->addSql('ALTER TABLE offres_activite ADD CONSTRAINT FK_9F5C5BD46C83CD9F FOREIGN KEY (offres_id) REFERENCES offres (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE offres_activite ADD CONSTRAINT FK_9F5C5BD49B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF219EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE pass ADD CONSTRAINT FK_CE70D42471F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE pass ADD CONSTRAINT FK_CE70D42419EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE salle_activite ADD CONSTRAINT FK_A434021BDC304035 FOREIGN KEY (salle_id) REFERENCES salle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salle_activite ADD CONSTRAINT FK_A434021B9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D4C54C8C93 FOREIGN KEY (type_id) REFERENCES type_contrat (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D471F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB4CC8505A');
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB95352D762');
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB93C105691');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DF77D927C');
        $this->addSql('ALTER TABLE comment_like DROP FOREIGN KEY FK_8A55E25FF8697D13');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC19EB6921');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC71F7E88B');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EC54C8C93');
        $this->addSql('ALTER TABLE forget_pwd DROP FOREIGN KEY FK_A5985380A76ED395');
        $this->addSql('ALTER TABLE ligne_panier DROP FOREIGN KEY FK_21691B4F347EFB');
        $this->addSql('ALTER TABLE ligne_panier DROP FOREIGN KEY FK_21691B4F77D927C');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CA4CCE3F86');
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544D0C07AFF');
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544E8175B12');
        $this->addSql('ALTER TABLE offres_activite DROP FOREIGN KEY FK_9F5C5BD46C83CD9F');
        $this->addSql('ALTER TABLE offres_activite DROP FOREIGN KEY FK_9F5C5BD49B0F88B1');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF219EB6921');
        $this->addSql('ALTER TABLE pass DROP FOREIGN KEY FK_CE70D42471F7E88B');
        $this->addSql('ALTER TABLE pass DROP FOREIGN KEY FK_CE70D42419EB6921');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27BCF5E72D');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A19EB6921');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AED5CA9E6');
        $this->addSql('ALTER TABLE salle_activite DROP FOREIGN KEY FK_A434021BDC304035');
        $this->addSql('ALTER TABLE salle_activite DROP FOREIGN KEY FK_A434021B9B0F88B1');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D4C54C8C93');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D471F7E88B');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE calendrier');
        $this->addSql('DROP TABLE calendrier_rdv');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE categorie_off');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE comment_like');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE forget_pwd');
        $this->addSql('DROP TABLE ligne_panier');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE offres');
        $this->addSql('DROP TABLE offres_activite');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE pass');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE salle_activite');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('DROP TABLE type_contrat');
        $this->addSql('DROP TABLE type_event');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
