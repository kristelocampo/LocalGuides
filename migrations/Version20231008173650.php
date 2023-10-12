<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231008173650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE guide_language (guide_id INT NOT NULL, language_id INT NOT NULL, INDEX IDX_E15ACFD5D7ED1D4B (guide_id), INDEX IDX_E15ACFD582F1BAF4 (language_id), PRIMARY KEY(guide_id, language_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE guide_language ADD CONSTRAINT FK_E15ACFD5D7ED1D4B FOREIGN KEY (guide_id) REFERENCES guide (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE guide_language ADD CONSTRAINT FK_E15ACFD582F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE guide_language DROP FOREIGN KEY FK_E15ACFD5D7ED1D4B');
        $this->addSql('ALTER TABLE guide_language DROP FOREIGN KEY FK_E15ACFD582F1BAF4');
        $this->addSql('DROP TABLE guide_language');
    }
}
