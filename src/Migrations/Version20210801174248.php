<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210801174248 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql("INSERT INTO user
                (id, username, username_canonical, email, email_canonical, enabled, password, roles, created_at, updated_at)
            VALUES
                (1, 'test', 'test', 'test@test.com', 'test@test.com', true, '$2y$13\$ZTQaebFtlgUAfejyELwaqOJkS3dyEpkDMN2XFxpGCIx5TJBpHSUW.', 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', '".(new \DateTime())->format("Y-m-d H:i:s")."', '".(new \DateTime())->format("Y-m-d H:i:s")."'),
                (2, 'test1', 'test1', 'test1@test.com', 'test1@test.com', true, '$2y$13\$ZTQaebFtlgUAfejyELwaqOJkS3dyEpkDMN2XFxpGCIx5TJBpHSUW.', 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', '".(new \DateTime())->format("Y-m-d H:i:s")."', '".(new \DateTime())->format("Y-m-d H:i:s")."'),
                (3, 'test2', 'test2', 'test2@test.com', 'test2@test.com', true, '$2y$13\$ZTQaebFtlgUAfejyELwaqOJkS3dyEpkDMN2XFxpGCIx5TJBpHSUW.', 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', '".(new \DateTime())->format("Y-m-d H:i:s")."', '".(new \DateTime())->format("Y-m-d H:i:s")."'),
                (4, 'test3', 'test3', 'test3@test.com', 'test3@test.com', true, '$2y$13\$ZTQaebFtlgUAfejyELwaqOJkS3dyEpkDMN2XFxpGCIx5TJBpHSUW.', 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', '".(new \DateTime())->format("Y-m-d H:i:s")."', '".(new \DateTime())->format("Y-m-d H:i:s")."')
        ;");
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

    }
}
