<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231009094308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE guide DROP FOREIGN KEY FK_CA9EC7351E5FEC79');
        $this->addSql('DROP INDEX IDX_CA9EC7351E5FEC79 ON guide');
        $this->addSql('ALTER TABLE guide DROP id_location_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE guide ADD id_location_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE guide ADD CONSTRAINT FK_CA9EC7351E5FEC79 FOREIGN KEY (id_location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_CA9EC7351E5FEC79 ON guide (id_location_id)');
    }
}
