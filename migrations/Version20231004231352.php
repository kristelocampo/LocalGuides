<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231004231352 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review ADD id_article_id INT DEFAULT NULL, ADD id_itinerary_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6D71E064B FOREIGN KEY (id_article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6363642C0 FOREIGN KEY (id_itinerary_id) REFERENCES itineraries (id)');
        $this->addSql('CREATE INDEX IDX_794381C6D71E064B ON review (id_article_id)');
        $this->addSql('CREATE INDEX IDX_794381C6363642C0 ON review (id_itinerary_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6D71E064B');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6363642C0');
        $this->addSql('DROP INDEX IDX_794381C6D71E064B ON review');
        $this->addSql('DROP INDEX IDX_794381C6363642C0 ON review');
        $this->addSql('ALTER TABLE review DROP id_article_id, DROP id_itinerary_id');
    }
}
